<?php
function emptyStringSignup($nome, $sobrenome, $email, $cep, $cidade, $estado, $bairro, $rua, $numero_rua, $senha, $senha_repetir){
    $resultado = null;

    if(empty($nome) || empty($sobrenome) || empty($email) || empty($cep) || empty($estado) || empty($cidade) || empty($bairro) || empty($rua) || empty($numero_rua)|| empty($senha) || empty($senha_repetir)){
        $resultado = true;
    }
    else{
        $resultado = false;
    }

    return $resultado;
}

//Login

function emptyStringLogin($email,  $senha){
    $resultado = null;

    if(empty($email) || empty($senha)){
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

function createUser($conn, $nome, $sobrenome, $email, $cep, $estado, $cidade, $bairro, $rua, $numero_rua, $senha){
    $sql = "INSERT INTO doador (nome, sobrenome, email, cep, estado, cidade, bairro, rua, rua_numero, senha) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../sigunp.php?error=stmtfailed");
        exit();
    }

    $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssssssss", $nome, $sobrenome, $email, $cep, $estado, $cidade, $bairro, $rua, $numero_rua, $hashedSenha);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function loginUser($conn, $email, $senha){
   $existeEmail = existsEmail($conn, $email);

   if($existeEmail === false){
    header("location: ../login.php?error=wronglogin");
    exit();
   }

   $senhaHashed = $existeEmail["senha"];
   $checarSenha = password_verify($senha, $senhaHashed);

   if($checarSenha === false){
    header("location: ../login.php?error=wronglogin");
    exit();
   }
   else if($checarSenha === true){
    session_start();
    $_SESSION["iddoador"] = $existeEmail["id"];
    $_SESSION["nomedoador"] = $existeEmail["nome"];
    
    header("location: ../index.php?error=none");
    
    exit();
   }

}

function sendImage($fileTmpName, $fileSize, $fileError, $fileActualExt, $allowed, $fileDestination){
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 10000000) {
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: ../cad-oil.php?error=none");
            } else {
                echo "Seu arquivo é muito grande";
            }
        } else {
            echo "Ocorreu um erro ao dar upload no arquivo";
        }
    } else {
        echo "Arquivo não permitido";
    }
}

function sendDonationData($qtdOleo, $fileDestination, $infoAdicional, $iddoador, $conn){
    $sql = "INSERT INTO doacao (quantidade_oleo, image_filepath, informacao_adicional, id_doador) values(?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../cad-oil.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "dssi", $qtdOleo, $fileDestination, $infoAdicional, $iddoador);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    exit();
}

