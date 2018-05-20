<!DOCTYPE html>
<html>
<head>
	<title>Lista ALunos</title>
	<meta charset="utf-8">
  	<meta http-equiv="Content-Type" content="text/html" />

  	<script type="text/javascript" src="js/bootstrap.js"></script>
  	<script type="text/javascript" src="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/listar.css">	
</head>
<body id="listar">
	<script language="JavaScript">
		function abrir(URL) {

			var width = 350;
			var height = 280;

			var left = 250;
			var top = 150;

			window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

		}
	</script>
<div class="container">
	<div class="row">
			<div class="col-md-12" id="menuTab">
				    <div class="menu">
					  <ul class="menu-list">
					    <li><a href="home.html" id="btnHome" class="btn btn-info" role="button" title="Home"><i class="fas fa-home"></i></a></li>
					    <li><a href="../agenda/agenda.php" id="btnAgenda" class="btn btn-danger" role="button" title="Agenda"><i class="fas fa-calendar-alt"></i></a></li>
					    <li><a href="listar.php" id="btnAluno" class="btn btn-primary" role="button" title="Aluno"><i class="fas fa-user"></i></a></li>
					    <li>
					      <a href="#" id="btnReport" class="btn btn-warning" role="button" title="Serviço">
						<i class="fas fa-briefcase"></i></a>
					       <ul class="sub-menu">
					        <li><a href="cadastroAluno.php">Aluno</a></li>
					        <li><a href="cadastroFuncionario.php">Colaborador</a></li>
					        <li><a href="servico.php">Serviço</a></li>
					      </ul>
					    </li>
					    <!-- <li><a href="relatorio.html" id="btnReport" class="btn btn-warning" role="button" title="Relatório"><i class="fas fa-clipboard"></i></a></li> -->
					  </ul>
					</div>
			</div>
	</div>
	<div class="card">
		<div class="card-body">
			<table class="table table-responsive-sm table-striped" id="table">
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
					$re = mysql_query("SELECT * FROM usuarios WHERE usuarios.statusUser = '0' ORDER BY usuarios.nome;");
					if(mysql_errno() != 0) {
						if(!isset($erros)) {
							echo "Erro o arquivo init.php foi auterado, nao existe $erros";
							exit;
						}
						echo $erros[mysql_errno()];
						exit;
					}
					?>
						<thead>
							<tr role="row">
								<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
			                        colspan="1" aria-sort="ascending"
			                        aria-label="Username: activate to sort column descending" style="width: 222px;">
			                        Nome
			                    </th>
								<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
			                        colspan="1" aria-label="Actions: activate to sort column ascending"
			                        style="width: 186px;">A&ccedil;&otilde;es
			                    </th>		
							</tr>
						</thead>        
				<?php
				while($l = mysql_fetch_array($re)) {
					$id           = $l["id_usuario"];
					$nome         = $l["nome"];		
					
				echo "
					<tr>
						<td>&nbsp;$nome</td>	
						<td>
							<a href=\"editarAluno.php?id=$id\">[Editar]</a> 
							<a href=\"excluirAluno.php?id=$id\">[Excluir]</a> 							
						</td>								
					</tr>\n";
				}	
				@mysql_close();
				?>	
			</table>
		</div>
	</div>
</div>
</body>
</html>