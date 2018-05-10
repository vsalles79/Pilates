<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">

<head>
	<title>Recuperar Senha</title>

	<meta http-equiv="Content-Type" content="text/html;">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Icons -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/simple-line-icons.min.css" rel="stylesheet">
	<link href="css/daterangepicker.min.css" rel="stylesheet">

	<!-- Style -->	
	<link href="css/style.css" rel="stylesheet"/>
	<link href="css/senha.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	
</head>

<body class="app flex-row align-items-center" id="recover-password">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card-group">
					<div class="card p-4" id="recupera_senha">
							<h1> Recuperar sua senha </h1>
							<p>Insira seus dados cadastrados. Sua senha ser&aacute; enviada por e-mail.</p>
							<td>&nbsp;</td>
							<form name="senha" method="post" action="PHPMailer/enviar_senha.php">
							  	<div class="input-group mb-3">
								  <input class="form-control" name="cpf" type="text" id="cpf" maxlength="15" size="30" placeholder="CPF"/>
								</div>
								<div class="input-group mb-4"> 
								  <input class="form-control" name="email" type="text" id="email" size="30" placeholder="Email"/>
								</div>
								<div>
								  	<div colspan="2">
								  		<div align="right"> 
									  		<input name="enviar" type="submit" id="enviar" value="Enviar">
										</div>
									</div>
								</div> 
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>
