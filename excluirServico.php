<?php

if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a função Abre_Conexao";
	exit;
}
$id = $_GET["id"];
Abre_Conexao();
if(mysql_query("UPDATE servicos set statusServico = '0' where id = $id")) {
	if(mysql_affected_rows() == 1){
		echo "Registro deletado com sucesso<br />";
	}	
}
?>
<a href="listar.php">Voltar</a>