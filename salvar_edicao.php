<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
$nome         = $_POST["nome"];
$data         = $_POST["data"];
$dataArray = explode("-", $data);
$dataSql = $dataArray[2]."-".$dataArray[1]."-".$dataArray[0];
$fone         = $_POST["fone"];
$cpf          = $_POST["cpf"];
$altura       = $_POST["altura"];
$peso         = $_POST["peso"];
$email 		  = $_POST["email"];
$objetivo     = $_POST["objetivo"];
$login        = $_POST["login"];
$id           = $_POST["id"];


if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a fun��o Abre_Conexao";
	exit;
}

Abre_Conexao();
if(@mysql_query("UPDATE usuarios SET nome = '$nome', data = '$dataSql' , fone = '$fone', cpf = '$cpf' , altura = '$altura' ,
 peso = '$peso' , email = '$email' , objetivo = '$objetivo' , login = '$login' WHERE id_usuario = $id")) {

	if(mysql_affected_rows() == 1){
		echo "Registro atualizado com sucesso";
	}	

} else {
	if(mysql_errno() == 1062) {
		echo $erros[mysql_errno()];
		exit;
	} else {	
		echo "Erro nao foi possivel efetuar a edi��o";
		exit;
	}	
	@mysql_close();
}

}

?>
<a href="listar.php">Voltar</a>