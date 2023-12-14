<?php

if (isset($_POST["submit"])){

    $email = $_POST["email"];
    $senha = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyStringLogin($email,  $senha) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $senha);
}
else{
    header("location: ../contacts.php");
    exit();
}