<?php
function emptyStringSignup($nome, $sobrenome, $email, $cep, $bairro, $rua, $numero_rua, $senha, $senha_repetir){
    $resultado = null;

    if(empty($nome) || empty($sobrenome) || empty($email) || empty($cep) || empty($bairro) || empty($rua) || empty($numero_rua)|| empty($senha) || empty($senha_repetir)){
        $resultado = true;
    }
    else{
        $resultado = false;
    }

    return $resultado;
}

function pwdMatch($senha, $senha_repetir){
    $resultado = null;
    if($senha !== $senha_repetir){
        $resultado = true;
    }
    else{
        $resultado = false;
    }
    return $resultado;
}

function existsEmail($conn, $email){
    $sql = "SELECT * from doador WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../sigunp.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultadoQuery = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultadoQuery)){
        return $row;
    }
    else{
        $resultado = false;
        return $resultado;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $nome, $sobrenome, $email,  $bairro, $cep, $rua, $numero_rua, $senha){
    $sql = "INSERT INTO doador (nome, sobrenome, email, bairro, cep, rua, rua_numero, senha) values(?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../sigunp.php?error=stmtfailed");
        exit();
    }

    $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssssss", $nome, $sobrenome, $email, $bairro, $cep, $rua, $numero_rua, $hashedSenha);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

