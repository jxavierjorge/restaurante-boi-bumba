<?php require 'login.php'; ?>
<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = ($_POST['senha']);
  if ($login != "Admin" or $senha != "123456"){
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
        }else if ($login == "Admin" and $senha == "123456"){
          header("Location:index.php");
        }
?>