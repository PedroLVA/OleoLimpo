<?php
require_once 'functions.inc.php';
require_once 'dbh.inc.php';
session_start();
if (isset($_POST["submit"])) {
    //image variables
    $file = $_FILES["foto"];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

     //pegando o nome e a extenção
    $fileExt = explode('.', $fileName); //fileExt é usado somente pra tratar a extensão e colocar em outra variavel, fileName tbm, ele é irrelevante pois a gente vai mudar o nome
    $fileActualExt = strtolower(end($fileExt));
    $fileNameNew = uniqid('', true) . "." . $fileActualExt;
    $fileDestination = "../images/".$fileNameNew;
    $relativeFileDestination = "images/".$fileNameNew;

    //array de extensão permitida
    $allowed = array("png", "jpg", "jpeg");
    
    //image variables
    $qtdOleo = $_POST["qtdOleo"];
    $infoAdicional = $_POST["infoAdicional"];

    sendImage($fileTmpName, $fileSize, $fileError, $fileActualExt, $allowed, $fileDestination);
    sendDonationData($qtdOleo, $relativeFileDestination, $infoAdicional, $_SESSION["iddoador"], $conn);

    

    
    
} else {
    header("location: ../index.php");
    exit();
}
