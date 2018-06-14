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
  <title>Cadastro Aluno</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html" />
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/cadastroAluno.js"></script>
  <script type="text/javascript" src="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

  <style>
    <!--
    .textBox { border:1px solid gray; width:300px;} 
    -->
  </style>

</script>
<script language="javascript" type="text/javascript">
function validar() {
var descricao = form1.descricao.value;
var valor = form1.valor.value;

if (descricao == "") {
alert('Preencha o campo Descricao');
form1.descricao.focus();
return false;
}
if (valor == "") {
alert('Preencha o campo Valor');
form1.valor.focus();
return false;
}
}
</script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/servico.css">	
</head>

<body id="cad-servico">
  <div class="container">
   <div class="row">
      <div class="col-md-12" id="menuTab">
            <div class="menu">
            <ul class="menu-list">
              <li><a href="home.php" id="btnHome" class="btn btn-info" role="button" title="Home"><i class="fas fa-home"></i></a></li>
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
  
    <div class="tab-content">
      <div id="menu1">
        <div class="col-sm-12 form-servico">
          <form id="form2" name="form2" method="post" onsubmit="return verifica()" action="salvarServico.php">
              <div class="col-sm-6">

                    <!--<div class="form-group">
                      <div class="input-group" id="name">
                        <input name="id-servico" type="text" id="id-servico" maxlength="45" class="textBox" placeholder="ID"/>
                      </div>
                    </div>-->

                    <div class="form-group">
                      <div class="input-group">
                        <input name="descricao" type="text" id="descricao-servico" maxlength="10" class="textBox" placeholder="Descrição" />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <input name="valor" type="text" id="valor-servico" maxlength="10" class="textBox" placeholder="Valor serviço" />
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <td>&nbsp;</td>
                      <td><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" onclick="return validar()" /></td>
                    </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
