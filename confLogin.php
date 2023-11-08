<?php
  session_start();
  // teste para ver se ha uma confirmaçao do botao submit, login e senha da pagina de login
  if(isset($_POST['submit']) && !empty($_POST['usuariolog']) && !empty($_POST['senhalog']))
  {
    include_once('conexao.php');
    $usulog = $_POST['usuariolog'];
    $senhalog = $_POST['senhalog'];
          
    $sql = "SELECT * FROM cadastro WHERE login = '$usulog' AND senha = '$senhalog'";	
          
    $result = $conexao->query($sql);
     
    if(mysqli_num_rows($result) < 1)
    {
       unset($_SESSION['usuariolog']);     
       unset($_SESSION['senhalog']);     
       header('Location: login.php');
    }
    else
    {        
       $_SESSION['usuariolog'] = $usulog;
       $_SESSION['senhalog'] = $senhalog;
       header('Location: tela_cli.php');
    }     
  }
  else
  {
     header('Location: login.php');
  }
?>