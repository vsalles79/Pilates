<?php
  
if($_SERVER["REQUEST_METHOD"] == "POST") {
$descricao           = $_POST["descricao"];
$valor               = $_POST["valor"];

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
if(@mysql_query("INSERT INTO servicos VALUES (  NULL , '$descricao', '$valor' )")){

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