<?php
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
$id = $_GET["id"];

Abre_Conexao();
$re    = mysql_query("SELECT count(*) as total FROM servicos WHERE id = $id");  
$total = mysql_result($re, 0, "total");

if($total == 1) {
  $re    = mysql_query("SELECT * FROM servicos WHERE servicos.id = $id");
  $dados = mysql_fetch_array($re);    
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Editar Servi�o</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html" />
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/cadastroAluno.js"></script>
  <script type="text/javascript" src="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/servico.css">  
</head>

<body id="cad-aluno">
  <div class="container">
    <div class="tab-content">
      <div id="menu1">
        <div class="col-sm-12 form-aluno">
          <form id="form1" name="form1" method="post" action="salvar_edicao.php">
              <div class="col-sm-6">

                     <div class="form-group">
                        <div class="input-group" id="edit-descricao">
                          <input name="descricao" type="text" id="descricao-servico" maxlength="10" class="textBox" placeholder="Descri��o" value="<?php echo $dados["descricao"]; ?>"/>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="input-group">
                          <input name="valor" type="text" id="valor-servico" maxlength="10" class="textBox" placeholder="Valor servi�o" value="<?php echo $dados["valor"]; ?>" />
                        </div>
                      </div>

                    <div class="form-group">
                      <td>&nbsp;</td>
                      <a href="listar.php"><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" /></a>
                    </div>
              </div>
          </form>
        </div>
      </div>

          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Alunos</h4>

                  <div class="form-group">
                      <div class="input-group" id="nome">
                          <input type="text" class="form-control" id="name" placeholder="Nome">
                           <button type="button" class="btn btn-primary" id="searchName"><i class="fa fa-search"></i></button>
                      </div>
                  </div>
                </div>
                <div class="modal-body">
                  <?php include 'listar.php';?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>

</body>
</html>
