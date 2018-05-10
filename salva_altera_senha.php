<?php

include "configdb.php";

($_SERVER['REQUEST_METHOD'] == 'POST');
$login   = $_POST['login'];
$senha   = $_POST['senha'];
$senha_n = $_POST['senha_n'];

$db			=	mysql_connect ($host, $login_db, $senha_db); //conecta ao mysql
$basedados	=	mysql_select_db($database); //conecta a base de dados

$sql = "SELECT login, senha
        FROM usuarios
        WHERE login = '$login' AND senha = '$senha'";

	
	?>
 <script language="JavaScript">alert('Senha alterada com sucesso!');
location.href='../adm/index.php';</script>

<?

  } else {
  
  
 ?>
 <script language="JavaScript">alert('Login ou senha inválidos.');
location.href='../sistema/altera_senha.php';</script>

<?
  } 
?>