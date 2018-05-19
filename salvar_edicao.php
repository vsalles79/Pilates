<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
$nome         = $_POST["nome"];
$data         = $_POST["data"];
$dataArray = explode("-", $data);
$dataSql = $dataArray[2]."-".$dataArray[1]."-".$dataArray[0];
$cpf            = $_POST["cpf"];
$telefone       = $_POST["telefone"];
$celular        = $_POST["celular"];
$email 		    = $_POST["email"];
$sexo           = $_POST["sexo"];
$cep            = $_POST["cep"];
$endereco       = $_POST["endereco"];
$numero         = $_POST["numero"];
$complementoEnd = $_POST["complementoEnd"];
$statusUser     = $_POST["statusUser"];
$login          = $_POST["login"];
$senha		    = $_POST["senha"];


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
		echo "Erro nao foi possivel efetuar a edição";
		exit;
	}	
	@mysql_close();
}

}

?>
<a href="listar.php">Voltar</a>