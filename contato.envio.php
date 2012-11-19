<?php
$nome = "";
$assunto = "";
$email = "";
$mensagem = "";

/*if($_POST['Assunto'] != NULL && $_POST['Assunto'] != ""){$assunto = $_POST['Assunto'];}*/
if(!empty($_POST['Assunto'])){$assunto = $_POST['Assunto'];}

if(!empty($_POST['Nome'])){$nome = $_POST['Nome'];}

if(!empty($_POST['email'])){$email = $_POST['email'];}

if(!empty($_POST['mensagem'])){$mensagem = $_POST['mensagem'];}


$destinatario = "leandro@seomarketing.com.br";
$remetente = "contato@seomarketing.com.br";

//Quebra de linha, NÃO ALTERAR
if(PHP_OS == "Linux") $quebra_linha = "\n"; //Se for Linux
elseif(PHP_OS == "WINNT") $quebra_linha = "\r\n"; // Se for Windows

$headers = "MIME-Version: 1.1".$quebra_linha;
$headers.="Content-type: text/html; charset=ISO-8859-1".$quebra_linha;

// Trocar o endereço de email. Do FROM e RETURN-PATH
$headers .= $remetente.$quebra_linha;
$headers .= "Return-Path: ".$destinatario.$quebra_linha; // return-path


$corpo="

<html>

<head>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />

<style type='text/css'>

<!--

BODY

{

	font-family: Arial, Helvetica, sans-serif;

	margin:2px;

}

DIV

{

	padding-top:8px;

	font-size:15px;

}

.titulos 

{  

	font-size: 20px; 

	color: #000000; 

	font-weight: bold;

}

.rodape

{

	color:#333333;

	font-size:10px;

}

-->

</style>

</head>

<body bgcolor=#ffffff>

	<div>

        <div class=titulos>Contato</div><br />

        <div><b>Enviada por:</b> ".$nome."</div><br />

		<div><b>Assunto:</b> ".$assunto."</div><br />

        <div><b>E-mail para resposta:</b> <a href=mailto".$email.">".$email."</a></div><br />
		
		<div><b>Mensagem:</b> ".$mensagem."</div><br />

	</div>

	</body>

</html>

";





$bound = "XYZ-" . date("dmYis") . "-ZYX";


//mail("leandro@seomarketing.com.br", "Mensagem enviada através da Landing Page de Eventos",$corpo, $headers);

mail($destinatario, "Mensagem enviada através da Landing Page de Eventos",$corpo, $headers);


?>