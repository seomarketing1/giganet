<?php
$score = "";
$vote = "";
$url = "";
$page = "";

if(!empty($_POST['score'])){$score = $_POST['score'];}

if(!empty($_POST['vote'])){$vote = $_POST['vote'];}

if(!empty($_POST['url'])){$url = $_POST['url'];}

if(!empty($_POST['name-page'])){$page = $_POST['name-page'];}


$userdb = "root";
	$pass = "zumbi011187";
	$host = "localhost";

	
	$con = mysql_connect($host, $userdb, $pass);
	mysql_select_db("site_seo", $con);

$query = "Select*From score_page WHERE page_name='".$page."'";

$resultado = mysql_query($query);

$num = mysql_num_rows($resultado);

if($num > 0)
{
	$query = "Update score_page set score='".$score."', vote='".$vote."' WHERE page_name='".$page."'";
	mysql_query($query) or die(mysql_error());
}
else
{
	$query = "Insert Into score_page ( page_name, page_url, score, vote) VALUES ('".$page."', '".$url."', '".$score."', '".$vote."')";
	mysql_query($query) or die(mysql_error());
	
}


echo "atualizado";
?>