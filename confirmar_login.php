<?

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$login = $_POST['login'];
$senha = $_POST['senha'];

include "configdb.php";

$db			=	mysql_connect ($host, $login_db, $senha_db); //conecta ao mysql
$basedados	=	mysql_select_db($database); //conecta a base de dados

$sql = "SELECT login, senha, nome
        FROM usuarios
        WHERE login = '$login' AND senha = '$senha'";

$query = mysql_query($sql);
  while($dados = mysql_fetch_array($query)) {
	$nome          = $dados["nome"];
	}
$contagem = mysql_num_rows($query); 
  
if ( $contagem == 1 ) {	
  setcookie ("login", $login, time()+900); //grava o cookie com o login
  setcookie ("senha", $senha, time()+900); //grava o cookie com a senha
   header("Location: home.php"); //se a senha digitada está correta, mostra a mensagem
  } else {
  
  }
  
 } 
 ?>
 <script language="JavaScript">alert('Login ou senha inv\u00e1lidos.');
location.href='login.php';</script>
