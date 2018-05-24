<?php
  
if($_SERVER["REQUEST_METHOD"] == "POST") {
$nome           = $_POST["nome"];
$data           = $_POST["data"];
$cpf            = $_POST["cpf"];
$telefone       = $_POST["telefone"];
$celular        = $_POST["celular"];
$email 		    = $_POST["email"];
$sexo           = $_POST["sexo"];
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
if(@mysql_query("INSERT INTO usuarios VALUES (  NULL , '$nome', '$data' , '$cpf', '$telefone' , '$celular' ,
 '$email' , '$sexo' ,  '$statusUser' ,  '$login' , '$senha' )")){

	if(mysql_affected_rows() == 1){
		echo "Registro efetuado com sucesso";
	}	

} else {
	if(mysql_errno() == 1062) {
		echo $erros[mysql_errno()];
		exit;
	} else {	
		echo "Erro nao foi possivel efetuar o cadastro";
		exit;
	}	
	@mysql_close();
}

}
?>
<a href="listar.php">Voltar</a>