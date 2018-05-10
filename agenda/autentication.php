<?php
    ob_start();
    require_once('dbConnect.php');  
    $login = $_POST['login'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE login = '$login' AND senha = md5('$pass');";
    $query = mysqli_query($con,$sql);
         
    $check = mysqli_fetch_array($query);
?>
<html>
<head>
<title>Logado</title>
<script type="text/javascript">
    function loginsucessfully(){
        setTimeout("window.location.href='/agenda/'", 10);
    }
    
    function loginfailed(){
	alert("Usuário ou Senha incorretos.");
        setTimeout("window.location.href='login/'", 10);
    }
</script>
</head>
<body>
<?php
    
    if(isset($check)){
	session_start();
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $pass;
        echo "<script>loginsucessfully()</script>";
    }else{
        echo "<script>loginfailed()</script>";
    }
?>
</body>
</html>
<?php ob_end_flush(); ?>
