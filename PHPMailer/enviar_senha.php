<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Enviar Senha</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?
$email  = $_POST["email"];
$cpf    = $_POST["cpf"];

// Inclui o arquivo class.phpmailerer.php localizado na pasta phpmailer || TROQUE PELO SEU CAMINHO DA CLASSE
require_once('class.phpmailer.php');

// Inicia a classe PHPmailerer
$mailer = new PHPmailer();
$mailer->SMTPDebug = 2;
// Define os dados do servidor e tipo de conex�o
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mailer->IsSMTP(); // Define que a mensagem ser� SMTP
$mailer->Port = 465; //Indica a porta de conex�o para a sa�da de e-mailers
$mailer->SMTPSecure = 'ssl';
$mailer->Host = 'smtp.gmail.com';
$mailer->SMTPAuth = true; // Usar autentica��o SMTP (obrigat�rio para smtp.seudom�nio.com.br)
$mailer->Username = 'archivesuno@gmail.com'; // Usu�rio do servidor SMTP
$mailer->Password = '10111110'; // Senha do servidor SMTP

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mailer->From = 'archivesuno@gmail.com'; // Seu e-mailer
$mailer->Sender = 'archivesuno@gmail.com'; // Seu e-mailer
$mailer->FromName = 'Contato'; // Seu nome

// Define os destinat�rio(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mailer->AddAddress($email);

//$mailer->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mailer->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C�pia Oculta

// Define os dados t�cnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mailer->IsHTML(false); // Define que o e-mailer ser� enviado como HTML
$mailer->CharSet = 'iso-8859-1"'; // Charset da mensagem (opcional)

include "configdb.php";

$db			=	mysql_connect ($host, $login_db, $senha_db); //conecta ao mysql
$basedados	=	mysql_select_db($database); //conecta a base de dados

$confirmacao = mysql_query("SELECT * FROM `$tabela` WHERE cpf = '$cpf' AND email = '$email'", $db); //verifica se o login e a email conferem
  while ($row = mysql_fetch_array($confirmacao)) {
    $cpf   = $row["cpf"];
	$login = $row["login"]; //adiciona a variavel $login o login do usuario
	$senha = $row["senha"]; //adiciona a variavel $senha a senha do usuario
    $email = $row["email"]; //adiciona a variavel $email o email do usuario
	}

$contagem = mysql_num_rows($confirmacao); //traz o resultado da pesquisa acima

if ( $contagem == 1 ) {
  $msg  = "Recupera��o de Login e Senha" . chr(13) . chr(10);
  $msg .= "Login enviado em " . date("d/m/Y") . ", os dados seguem abaixo: " . chr(13) . chr(10) . chr(10);
  $msg .= "Login : " . $login . chr(13) . chr(10);
  $msg .= "Senha : " . $senha . chr(13) . chr(10);

  
	$mailer->Subject = "Recuperacao de Login";
	$mailer->Body = "$msg"; //campos do email na ordem, email destinho (n�o deve ser alterada), assunto, conteudo (n�o deve ser alterado), remetente (tamb�m n�o altere)
	
   !$mailer->Send();   
?> 
  <script language="JavaScript">alert('Seu Login foi enviado com sucesso para o email!');
	location.href='../login.php';</script>
<?	
  } else {
?>
    <script language="JavaScript">alert('Seu CPF ou E-mail esta incorreto.');
	location.href='../senha.php';</script>
<?	
  }
?>
</body>
</html>