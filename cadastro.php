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

Abre_Conexao();

if(mysql_errno() != 0) {
	if(!isset($erros)) {
		echo "Erro o arquivo init.php foi auterado, nao existe \$erros";
		exit;
	}
	echo $erros[mysql_errno()];
	exit;
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript" src="http://www.geradorcpf.com/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="http://www.geradorcpf.com/jquery.maskedinput-1.1.4.pack.js"/></script>
<script type="text/javascript">$(document).ready(function(){	$("#cpf").mask("999.999.999-99");});</script>
<script type="text/javascript">
/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('fone').onkeypress = function(){
		mascara( this, mtel );
	}
}
</script>

<title>Cadastro</title>
<style>
<!--
.textBox { border:1px solid gray; width:300px;} 
-->
</style>

</script>
<script language="javascript" type="text/javascript">
function validar() {
var nome = form1.nome.value;
var data = form1.data.value;
var fone = form1.fone.value;
var cpf = form1.cpf.value;
var altura = form1.altura.value;
var peso = form1.peso.value;
var email = form1.email.value;
var objetivo = form1.objetivo.value;
var login = form1.login.value;

if (nome == "") {
alert('Preencha o campo nome');
form1.nome.focus();
return false;
}
if (data == "") {
alert('Preencha o campo Data Nascimento');
form1.data.focus();
return false;
}
if (fone == "") {
alert('Preencha o campo Celular');
form1.fone.focus();
return false;
}
if (cpf == "") {
alert('Preencha o campo CPF');
form1.cpf.focus();
return false;
}
if (altura == "") {
alert('Preencha o campo Altura');
form1.altura.focus();
return false;
}
if (peso == "") {
alert('Preencha o campo Peso');
form1.peso.focus();
return false;
}
if (email == "") {
alert('Preencha o campo Email');
form1.email.focus();
return false;
}
if (objetivo == "") {
alert('Preencha o campo Objetivo');
form1.objetivo.focus();
return false;
}
if (login == "") {
alert('Preencha o campo Login');
form1.login.focus();
return false;
}
}
</script>

<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58 || tecla==46)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>
	
</head>

<body>
<form id="form1" name="form1" method="post" onsubmit="return verifica()" action="salvar.php">
  <table width="500" border="0" align="left">
  <td>&nbsp;</td>
    <tr>
      <td>Nome Completo:</td>
      <td><input name="nome" type="text" id="nome" maxlength="45" class="textBox" /></td>
    </tr>
	<td>&nbsp;</td>	 
    <tr>
      <td>Data Nascimento:</td>
      <td><input name="data" type="date" id="data" maxlength="10" class="textBox" /></td>
    </tr>
	<td>&nbsp;</td>
  <tr>
      <td>CPF:</td>
      <td><input name="cpf" type="text" id="cpf" maxlength="14" class="textBox" onkeypress='return SomenteNumero(event)' /></td>
    </tr>
    <td>&nbsp;</td>   
	<tr>
      <td>Telefone:</td>
      <td><input name="telefone" type="text" id="telefone" maxlength="14" class="textBox" onkeypress='return SomenteNumero(event)'/></td>
    </tr>
	<td>&nbsp;</td>
  <tr>
      <td>Celular:</td>
      <td><input name="celular" type="text" id="celular" maxlength="15" class="textBox" onkeypress='return SomenteNumero(event)'/></td>
    </tr>
  <td>&nbsp;</td>    
	<tr>
      <td>Email:</td>
      <td><input name="email" type="text" id="email" maxlength="45" class="textBox" /></td>
    </tr>
	<td>&nbsp;</td>
	<tr>
      <td>Sexo:</td>
      <td><input name="sexo" type="text" id="sexo" maxlength="10" class="textBox" /></td>
    </tr>
	<td>&nbsp;</td>
    <tr>
      <td>cep:</td>
      <td><input name="cep" type="text" id="cep" maxlength="9" class="textBox" /></td>
    </tr>
  <td>&nbsp;</td>
    <tr>
      <td>Endereço:</td>
      <td><input name="endereco" type="text" id="endereco" maxlength="45" class="textBox" /></td>
    </tr>
  <td>&nbsp;</td>
    <tr>
      <td>numero:</td>
      <td><input name="numero" type="text" id="numero" maxlength="5" class="textBox" /></td>
    </tr>
  <td>&nbsp;</td>
    <tr>
      <td>Complemento:</td>
      <td><input name="complementoEnd" type="text" id="complementoEnd" maxlength="45" class="textBox" /></td>
    </tr>
  <td>&nbsp;</td>
    <tr>
      <td>Status:</td>
      <td><input name="statusUser" type="text" id="statusUser" maxlength="10" class="textBox" /></td>
    </tr>
  <td>&nbsp;</td>
    <tr>
      <td>Login:</td>
      <td><input name="login" type="text" id="login" maxlength="20" class="textBox" /></td>
    </tr>
	<td>&nbsp;</td>
    <tr>
      <td>Senha:</td>
      <td><input name="senha" type="text" id="senha" maxlength="6" class="textBox" /></td>
    </tr>
  <td>&nbsp;</td>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" onclick="return validar()" /></td>
    </tr>	
  </table>
</form>
</body>
</html>
