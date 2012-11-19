<?php
$headers = apache_request_headers();
include("inclusos/hosts.php");

//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="seosocial.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){

$("#teste").SeoSocial();	
});
</script>
<style type="text/css">
.googleplus_inativo { background-image:url(../imagens/MEIDIA.png);background-position: 45px 0px;
width:22px;
height:23px;
display:inline-block;
margin-left:5px;
margin-right:5px;}
.googleplus_ativo { background-image:url(../imagens/MEIDIA.png);background-position: 45px 21px ;
width:22px;
height:23px;
display:inline-block;
margin-left:5px;
margin-right:5px;}
.facebook_ativo {background-image:url(../imagens/MEIDIA.png);background-position: -22px 21px;
width:23px;
height:23px;
display:inline-block;
margin-left:5px;
margin-right:5px;}
.facebook_inativo { background-image:url(../imagens/MEIDIA.png);background-position: -22px 0px;
width:22px;
height:23px;
display:inline-block;
margin-left:5px;
margin-right:5px;
}
.twitter_inativo {  background-image:url(../imagens/MEIDIA.png);background-position: -0px 0px;
width:22px;
height:23px;
display:inline-block;
margin-left:5px;
margin-right:5px;}
.twitter_ativo {background-image:url(../imagens/MEIDIA.png);background-position: -0px 21px;
width:22px;
height:23px;
display:inline-block;
margin-left:5px;
margin-right:5px;}
</style>
</head>

<body>
</body>
<div id="barra_social" style="display:block;">
    <div id="icones_barra" style="display:inline-block;">
        <div id="barra_gp" class="googleplus_inativo">&nbsp;</div>
        <div id="barra_fb" class="facebook_inativo">&nbsp;</div>
        <div id="barra_tw" class="twitter_inativo">&nbsp;</div>
    </div>
    <div id="teste" style="display:inline-block;"></div>
</div>
</html>
