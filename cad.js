<?php

  if(isset($_POST['submit']))
  {
     include_once('conexao.php');     
          
     $nome = $_POST['cad_nome'];
     $email = $_POST['cad_email'];
     $telefone = $_POST['cad_tel'];
     $endereco = $_POST['cad_ende'];
     $bairro = $_POST['cad_bairro'];
     $login = $_POST['cad_login'];     
     $senha = $_POST['cad_senha'];
          
     $result = mysqli_query($conexao, "INSERT INTO cadastro(nome, email, telefone, endereco, bairro, login, senha)
     VALUES ('$nome', '$email', '$telefone', '$endereco', '$bairro', '$login', '$senha')");     
  }    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro</title>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="layout.css" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1><br>
    <form action="cad.php" method="POST">
        <div class="div_cad">    
        <label id="cad_nome">Nome:</label>
        <input class="inputcad1" type="text" name="cad_nome" placeholder="Digite seu nome" required/>                
        </div>    
        <div>
        <label id="cad_email">Email:</label>    
        <input class="inputcad1" type="email" name="cad_email" placeholder="Digite seu email" required/>                        
        </div>    
        <div>
        <label id="cad_tel">Telefone:</label>
        <input class="inputcad1" type="tel" maxlength="15" name="cad_tel" placeholder="Digite seu telefone" required/>                
        </div>    
        <div>
        <label id="cad_ende">Endereço:</label>        
        <input class="inputcad1" type="text" name="cad_ende" placeholder="Digite seu endereço" required/>                        
        </div>
        <div>
        <label id="cad_bairro">Bairro:</label>        
        <input class="inputcad1" type="text" name="cad_bairro" placeholder="Digite seu bairro" required/>
        </div>        
        <div>
        <label id="cad_login">Crie seu Login:</label>        
        <input class="inputcad1" type="text" name="cad_login" placeholder="Digite seu login" required/>        
        </div>      
        <div>
        <label id="cad_senha">Crie sua senha:</label>   
        <input class="inputcad1" type="password" name="cad_senha" placeholder="Digite sua senha" required/>
        </div>
        <div>
        <input type="submit" name="submit"/> 
        </div>
    </form>
</body>
</html>
