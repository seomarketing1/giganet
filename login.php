<?php
require("connect.inc.php");

session_name("acesso_seomarketing");

session_start();
if($_SESSION["session_id"] == session_id())
{
	header("cliente/lista.php");
}

if($_POST){
	$user="seomarketing";
	$pass="acesso_seomkt321";
	
	$userform = $_POST['usuario'];
	$passform = $_POST['pass'];
	
	if($userform == $user && $passform == $pass)
	{
		$_SESSION["session_id"] = session_id();
		$_SESSION["user_name"] = $userform;
		
		header("location:cliente/lista.php");
	}
	else
	{
		header("location:login.php");
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entrar - SEO Marketing</title>
</head>

<body>
<form action="https://http://www.giganet.info/adwords/login.php" method="post">
<label>Usuário</label>
<input type="text" id="user" name="user" />
<br />
<br />
<label>Senha:</label>
<input type="password" id="pass" name="pass" />
<br />
<br />
<input type="submit" name="enviar" />

</form>
</body>
</html>