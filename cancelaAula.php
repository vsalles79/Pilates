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
if(mysql_query("UPDATE agenda set statusAgenda = '1' where id_agenda = $id")) {
	if(mysql_affected_rows() == 1){
		echo "Aula Cancelada com sucesso<br />";
	}	
}
?>
<a href="home.php">Voltar</a>