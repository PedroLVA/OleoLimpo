<?php
   session_start();
   unset($_SESSION['usuariolog']);
   unset($_SESSION['senhalog']);
   header('Location: login.php');
?>