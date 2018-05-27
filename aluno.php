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
  <title>Aluno</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html" />
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/cadastroAluno.js"></script>
  <script type="text/javascript" src="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
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
      	id('telefone').onkeypress = function(){
      		mascara( this, mtel );
      	}
      }
  </script>


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
var cpf = form1.cpf.value;
var telefone = form1.telefone.value;
var celular = form1.celular.value;
var email = form1.email.value;
var sexo = form1.sexo.value;
var cep = form1.cep.value;
var endereco = form1.endereco.value;
var numero = form1.numero.value;
var complementoEnd = form1.complementoEnd.value;
var statusUser = form1.statusUser.value;
var login = form1.login.value;
var senha = form1.senha.value;

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
if (cpf == "") {
alert('Preencha o campo CPF');
form1.cpf.focus();
return false;
}
if (telefone == "") {
alert('Preencha o campo Telefone');
form1.telefone.focus();
return false;
}
if (celular == "") {
alert('Preencha o campo Celular');
form1.celular.focus();
return false;
}
if (email == "") {
alert('Preencha o campo Email');
form1.email.focus();
return false;
}
if (sexo == "") {
alert('Preencha o campo Sexo');
form1.sexo.focus();
return false;
}
if (cep == "") {
alert('Preencha o campo Cep');
form1.cep.focus();
return false;
}
if (endereco == "") {
alert('Preencha o campo Endereço');
form1.endereco.focus();
return false;
}
if (numero == "") {
alert('Preencha o campo Numero');
form1.numero.focus();
return false;
}
if (complementoEnd == "") {
alert('Preencha o campo Complemento');
form1.complementoEnd.focus();
return false;
}
if (login == "") {
alert('Preencha o campo Login');
form1.login.focus();
return false;
}
if (senha == "") {
alert('Preencha o campo Senha');
form1.Senha.focus();
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

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://www.geradorcpf.com/jquery-1.2.6.pack.js"></script>
  <script type="text/javascript" src="http://www.geradorcpf.com/jquery.maskedinput-1.1.4.pack.js"/></script>
  <script type="text/javascript">$(document).ready(function(){	$("#cpf").mask("999.999.999-99");});</script>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/aluno.css">	
</head>

<body id="aluno">
  <div class="container">
    <div class="row">
        <div class="col-md-12" id="menuTab">
            <div class="menu">
            <ul class="menu-list">
              <li><a href="home.html" id="btnHome" class="btn btn-info" role="button" title="Home"><i class="fas fa-home"></i></a></li>
              <li><a href="agenda.php" id="btnAgenda" class="btn btn-danger" role="button" title="Agenda"><i class="fas fa-calendar-alt"></i></a></li>
              <li><a href="listar.php" id="btnAluno" class="btn btn-primary" role="button" title="Aluno"><i class="fas fa-user"></i></a></li>
              <li>
                <a href="#" id="btnReport" class="btn btn-warning" role="button" title="Cadastros">
            <i class="fas fa-briefcase"></i></a>
                 <ul class="sub-menu">
                  <li><a href="cadastroAluno.php">Aluno</a></li>
                  <li><a href="cadastroFuncionario.php">Colaborador</a></li>
                  <li><a href="servico.php">Serviço</a></li>
                  <li><a href="cadastroAgenda.php">Agendamento</a></li>
                </ul>
              </li>
              <!-- <li><a href="relatorio.html" id="btnReport" class="btn btn-warning" role="button" title="Relatório"><i class="fas fa-clipboard"></i></a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
  <script>
        $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
        });

  </script>
</body>
</html>
