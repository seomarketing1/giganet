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
<title>Por que nem todos os meus fãs irão ver minhas postagens no Facebook? | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
?>
<script src='../../js/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
 <script src='../../js/jquery.rating.js' type="text/javascript" language="javascript"></script>
<?
include("../../includes/menu.php");
?>
<div id="tutorial_soc_faq_content">
  <div class="tutorial_soc_faq_principal">
    	<?php
include("../../includes/tutorial/menu_tutorial.php");
?>

		<div class="breadcrumb">
			<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			  <a href="<?php echo $dominio;?>" itemprop="url">
			    <span itemprop="title">Página Inicial</span>
			  </a> ›
			</div>  
			<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			  <a href="<?php echo $dominio;?>tutorial/" itemprop="url">
			    <span itemprop="title">Tutorial</span>
			  </a> ›
			</div>  
			<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			  <a href="<?php echo $dominio;?>tutorial-social-media/FAQ/" itemprop="url">
			    <span itemprop="title">FAQ Social Media</span>
			  </a> ›
			</div>
			<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			    <span itemprop="title">Por que nem todos os meus fãs irão ver minhas postagens no Facebook?</span>
			</div>
		</div>
		
    	<h1><small>FAQ Social Media</small><br/>Por que nem todos os meus fãs irão ver minhas postagens no Facebook?</h1>
    
    <p>Primeiro, é importante considerar que, no momento em que a sua página faz uma postagem, nem todos os seus fãs estarão online.</p>

	<p>Além disso, o Facebook tem um algoritmo chamado EdgeRank. Ele é usado para selecionar as postagens que vão aparecer ou não nos feeds de cada pessoa. São levados em consideração:</p>

	<ul>
	<li><strong>Afinidade:</strong> é o peso da conexão entre o seu perfil e outro perfil. Por exemplo, se você curte uma página e comenta frequentemente nela, essa interação terá um peso diferente do que uma página que você curte, mas dificilmente comenta;</li>
	<li><strong>Peso de cada “edge”:</strong> é o peso de cada ação feita. Isso pode variar com seu comportamento na rede. Se você costuma dar mais “curtirs” a comentar, os “curtirs” terão mais peso no seu caso;</li>
	<li><strong>Tempo:</strong> quanto mais antiga a postagem, menos peso ela terá.</li>
	</ul>

	<p>Assim, o Facebook evita que o usuário receba uma enxurrada de informações, fotos, links e coisas desinteressantes sem parar.</p>

	<p>Para a empresa aparecer bem para seus usuários é importante que ela crie afinidade com eles por intermédio de conteúdo de qualidade que gere interação.</p>
    
        <div class="faq_compratilhar">
        <h3>Compartilhe esta informação</h3>
        </div>
        <div class="faq_avaliar">
        <span class="faq_avaliar_header">Avalie esta informação</span><span class="faq_avaliar_star">
        <form action="../../contato.envio.faq.php" method="post" id="faq_avaliar"><input type="hidden" id="score" name="score" value="<?php echo $score;?>" />
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
</form></span> 
        </div>
        <div class="face_coments">
        <div class="fb-comments" data-href=<?php echo '"'.curPageURL().'"';?>" data-num-posts="10" data-width="555"></div>
        </div>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_soc_faq_secundario">
<?php
include("../../includes/tutorial/lateral_tutorial_social.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</body>
</body>
</html>