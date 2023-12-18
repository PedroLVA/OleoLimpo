<?php

if(isset($_POST["submit"])){

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero_rua = $_POST["numero_rua"];
    $senha = $_POST["password"];
    $senha_repetir = $_POST["password_repeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';


    if(emptyStringSignup($nome, $sobrenome, $email, $cep, $estado, $cidade, $bairro, $rua, $numero_rua, $senha, $senha_repetir) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if(existsEmail($conn, $email) !== false){
        header("location: ../signup.php?error=emailexists");
        exit();
    }
    if(pwdMatch($senha, $senha_repetir) !== false){
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    createUser($conn, $nome, $sobrenome, $email, $cep, $estado, $cidade, $bairro, $rua, $numero_rua, $senha);

}
else{
    header("location: ../signup.php");
}