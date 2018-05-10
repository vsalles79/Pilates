<?php

	$servidor = 'localhost'; //Geralmente por padrão é localhost, mas dependendo da hospedagem pode ser outro endereço.
	$usuario = 'usuario do banco';
	$senha = 'senha do banco';
	$banco = 'nome do banco';
	

	// Conecta-se ao banco de dados MySQL
	$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

	// Caso algo tenha dado errado, exibe uma mensagem de erro
	if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

?>
