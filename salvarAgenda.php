<?php
  
if($_SERVER["REQUEST_METHOD"] == "POST") {
$nome        	  = $_POST["nome"];
$data         	  = $_POST["data"];
$horaInicial      = $_POST["horaInicial"];
$horaFinal        = $_POST["horaFinal"];
$nomeFuncionario  = $_POST["nomeFuncionario"];
$servico 	 	  = $_POST["servico"];

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

if(@mysql_query("INSERT INTO agenda VALUES (  NULL , '$nome', '$data' , '$horaInicial' , '$horaFinal' , '$nomeFuncionario' , '$servico' )")){

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
<a href="agenda.php">Voltar</a>