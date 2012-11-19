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
<title>Índice de qualidade do Google AdWords | Agência SEO Marketing</title>
<meta name="description" content="" />
<?php
include("../../includes/header.php");
?>
<script src='../../js/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
<script src='../../js/jquery.rating.js' type="text/javascript" language="javascript"></script>
<?
include("../../includes/menu.php");
?>
<div id="tutorial_adw_faq_content">
<div class="tutorial_adw_faq_principal">
 <?php
include("../../includes/tutorial/menu_tutorial_adwords.php");
?>
 <h1>O que é o índice de Qualidade Adwords?</h1>
 <h2>Buscas relacionadas: índice de qualidade google adwords</h2>
 <p>O <strong>Índice de Qualidade Adwords</strong> é um das duas macro-variáveis que determinam o posicionamento de um anúncio Google. A cada busca feita por um usuário do Google, ocorre um &quot;leilão instantâneo&quot; para determinar quais anunciantes aparecerão para aquela busca e em qual posição. A fórmula que determina o posicionamento de um anúncio no Google é:</p>
 <p>Posicionamento = Lance (máx. CPC) X IQ (Índice de Qualidade)</p>
 <p>Por essa fórmula, é fácil entender que, quanto maior o índice de qualidade de um anúncio, menor o valor a ser pago para que o anúncio permaneça na mesma posição. Se o anunciante optar por manter o seu lance, a tendência é o anúncio subir de posição à medida que o índice de qualidade aumenta.</p>
 <p>O Índice de Qualidade Adwords é influenciado por uma série de variáveis, como a taxa de cliques do anúncio (CTR), relevância da Landing Page ao anúncio e o histórico do índice de qualidade das palavras-chave desde a criação da conta.</p>
 <p>Mais dúvidas? Continue navegando por nosso  <a href="http://www.seomarketing.com.br/perguntas-e-respostas-adwords.asp" target="_blank">FAQ - perguntas frequentes</a> ou nosso <a href="http://www.seomarketing.com.br/tutorial-adwords.html" target="_blank">tutorial Adwords.<br /> </a></p>
 <p>Veja também porque vale a pena você <a href="http://www.seomarketing.com.br/servicos/links-patrocinados.asp" target="_blank">confiar a administração de sua conta Adwords à SEO Marketing</a>, agência certificada pelo Google - Google Qualified Company.</p>
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
<div class="tutorial_adw_faq_secundario">
<?php
include("../../includes/tutorial/lateral_tutorial_adw.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</body>
</body>
</html>