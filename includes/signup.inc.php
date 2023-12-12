<?php

if(isset($_POST["submit"])){

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero_rua = $_POST["numero_rua"];
    $senha = $_POST["password"];
    $senha_repetir = $_POST["password_repeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

}
else{
    header("location: ../signup.php");
}