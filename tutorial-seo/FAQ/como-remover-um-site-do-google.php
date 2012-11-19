<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
function curPageURL() {
 $pageURL = 'http';
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>
<?php
$score = "";
$vote = "";

$page = curPageURL();

//if(!empty($_POST['name-page'])){$page = $_POST['name-page'];}


$userdb = "root";
	$pass = "zumbi011187";
	$host = "localhost";

	
	$con = mysql_connect($host, $userdb, $pass);
	mysql_select_db("site_seo", $con);
	
	$query = "Select*From score_page WHERE page_url='".$page."'";

$resultado = mysql_query($query) or die(mysql_error());;

if (mysql_num_rows($resultado) > 0) {

$num = mysql_fetch_assoc($resultado) or die("noresult");

$score = $num["score"];
$vote = $num["vote"];

$resul = $score/$vote;
} else {
	$resul = 0;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Como remover um site do Google | Agência SEO Marketing</title>
<meta name="description" content="" />
<?php
include("../../includes/header.php");
?>
<script src='../../js/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
<script src='../../js/jquery.rating.js' type="text/javascript" language="javascript"></script>
<?
include("../../includes/menu.php");
?>
<div id="tutorial_seo_faq_content">
<div class="tutorial_seo_faq_principal">
 <?php
include("../../includes/tutorial/menu_tutorial_seo.php");
?>
 <h1>Como aparecer no Google?</h1>
 <p>Para remover seu site do Google voc&ecirc; precisa ter alguns previl&eacute;gios e acessos, s&atilde;o eles:</p>
 <ul>
  <li>Acesso ao FTP do site;</li>
  <li>Acesso a interface do Google Webmaster Tools do site. </li>
 </ul>
 <p>Para iniciar a exclus&atilde;o do seu site dos &iacute;ndices do Google voc&ecirc; deve come&ccedil;ar modificando ou criando um arquivo <a href="http://www.seomarketing.com.br/robots.txt.html">robots.txt</a>.</p>
 <ul>
  <li> Verifique se h&aacute; um arquivo robots.txt na raiz do seu site.<br /> <strong>EX: </strong>http://www.meusite.com.br/robots.txt</li>
  <li> Crie o arquivo robots.txt ou modifique o conte&uacute;do para que seja:<br /> User-Agent: *<br /> Disallow: / </li>
  <li>Fa&ccedil;a o upload do arquivo robots.txt na raiz do seu site.</li>
  <li>V&aacute; at&eacute; a interface do <a href="http://www.google.com/webmasters/tools/" target="_blank">Google Webmaster Tools</a>&nbsp; e fa&ccedil;a a solicita&ccedil;&atilde;o de exclus&atilde;o do site em:</li>
  <br />
  <ul>
   <li><strong>Ferramentas</strong> &gt; <strong>Remover URLs</strong><br /> <br /> <img src="http://www.seomarketing.com.br/imagens/remover-site-1.jpg" alt="remover site do google - 1"  /></li>
   <br /><br />
   <li><strong>Novo Pedido de Remo&ccedil;&atilde;o</strong><br /> <br /> <img src="http://www.seomarketing.com.br/imagens/remover-site-2.jpg" alt="remover site do google 3" width="400" height="165" /><br /></li>
   <br /> <br />
   <li><strong>Marque a op&ccedil;&atilde;o &quot;O seu  site inteiro&quot;<br /> <br /> <img src="http://www.seomarketing.com.br/imagens/remover-site-3.jpg" alt="remover site do google 3" width="190" height="220" /></strong></li>
   <br /> <br />
   <li><strong>Confirme</strong><br /> <br /> <img src="http://www.seomarketing.com.br/imagens/remover-site-4.jpg" alt="remover site do google 4" width="400" height="234" /><br /></li>
  </ul>
  </li>
 </ul>
 <p> Pronto,  o Google ir&aacute; excluir seu site dos resultados de busca. O arquivo  robots.txt ir&aacute; impedir que o site seja indexado at&eacute; que voc&ecirc; mude sua  sintaxe ou simplesmente o exclua da raiz.</p>
 </p>
 <div class="faq_compratilhar">
  <h3>Compartilhe esta informação</h3>
 </div>
 <div class="faq_avaliar"> <span class="faq_avaliar_header">Avalie esta informação</span><span class="faq_avaliar_star">
  <form action="../../contato.envio.faq.php" method="post" id="faq_avaliar">
   <input type="hidden" id="score" name="score" value="<?php echo $score;?>" />
   <input type="hidden" id="vote" name="vote" value="<?php echo $vote;?>" />
   <input type="hidden" id="url" name="url"/>
   <input type="hidden" id="name-page" name="name-page" />
   <input type="hidden" id="rating" value="<?php echo $resul;?>" />
   <input name="star1" id="v1" <?php if($resul >=0.5 && $resul <=1){echo 'checked="true"';}?>  type="radio" class="star" value="0.5"/>
   <input name="star1" id="v2" <?php if($resul >=1 && $resul <=1.5){echo 'checked="true"';}?> type="radio" class="star" value="1"/>
   <input name="star1" id="v3" <?php if($resul >=1.5 && $resul <=2){echo 'checked="true"';}?> type="radio" class="star" value="1.5"/>
   <input name="star1" id="v4" <?php if($resul >=2 && $resul <=2.5){echo 'checked="true"';}?> type="radio" class="star" value="2"/>
   <input name="star1" id="v5" <?php if($resul >=2.5 && $resul <=3){echo 'checked="true"';}?> type="radio" class="star" value="2.5"/>
   <input name="star1" id="v6" <?php if($resul >=3 && $resul <=3.5){echo 'checked="true"';}?>  type="radio" class="star" value="3"/>
   <input name="star1" id="v7" <?php if($resul >=3.5 && $resul <=4){echo 'checked="true"';}?> type="radio" class="star" value="3.5"/>
   <input name="star1" id="v8" <?php if($resul >=4 && $resul <=4.5){echo 'checked="true"';}?> type="radio" class="star" value="4"/>
   <input name="star1" id="v9" <?php if($resul >=4.5 && $resul <=5){echo 'checked="true"';}?> type="radio" class="star" value="4.5"/>
   <input name="star1" id="v10" <?php if($resul >=5){echo 'checked="true"';}?> type="radio" class="star" value="5"/>
  </form>
  </span> </div>
 <div class="face_coments">
  <div class="fb-comments" data-href=<?php echo '"'.curPageURL().'"';?>" data-num-posts="10" data-width="555"></div>
 </div>
 <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
  Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
</div>
<div class="tutorial_seo_faq_secundario">
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</body>
</body>
</html>