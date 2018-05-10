<!DOCTYPE html>
<html>
<head>
	<title>Listagem</title>
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

	<a href="index.html">Voltar</a>
	<br />
	

	<div class="card">
		<div class="card-body">
			<table class="table table-responsive-sm table-striped" id="table">
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
		        <tbody>

		        </tbody>               
				<?php
				while($l = mysql_fetch_array($re)) {
					$id           = $l["id_usuario"];
					$nome         = $l["nome"];		
					
				echo "
					<tr>
						<td>
							<a href=\"editar.php?id=$id\">[Editar]</a> 
							<a href=\"excluir.php?id=$id\">[Excluir]</a> 							
						</td>
						<td>&nbsp;$nome</td>			
					</tr>\n";
				}	
				@mysql_close();
				?>	
			</table>
		</div>
	</div>

</body>
</html>