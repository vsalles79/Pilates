<!DOCTYPE html>
<html lang="pt-br"> 
<head>
	
	<title>Pilates</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
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
	<link href="css/login.css" rel="stylesheet"> 
</head>

<body class="app flex-row align-items-center" id="page-login">
	<div class="container">
		<div class="row justify-content-center">
	      	<div class="col-md-6">
	        	<div class="card-group">
	          		<div class="card p-4" id="form-login">
	            		<div class="card-body">								
							<h1>Bem-Vindo!</h1>
							<form name="login" method="post" action="confirmar_login.php">	
								<div class="input-group mb-3">
									<input name="login" type="text" id="login" class="form-login form-control" title="login" value="" size="30" maxlength="45" placeholder="Email"/>
								</div>
								<div class="input-group mb-4">
									<input name="senha" type="password" id="senha" class="form-login form-control" title="senha" value="" size="30" maxlength="6" placeholder="Senha"/>
								</div>
								<div class="row">
                 					<div class="col-6">
										<div class="botao_login">
											<input src="images/botao_login.png" name="entrar" type="image" />
										</div>
									</div>

									<div class="col-6 text-right">
										<a href="senha.php" >
											<button type="button" class="btn btn-link px-0" id="forgot-password">Esqueceu sua senha?</button>
										</a>
									</div>				
								</div>		
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Bootstrap and necessary plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
