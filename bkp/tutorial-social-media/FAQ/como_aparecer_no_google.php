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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Tutorial SEO| Agência SEO Marketing</title>
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
include("../../includes/menu_tutorial.php");
?>
    	<h1>Como aparecer no Google?</h1>
        <p>Quando você pesquisa no Google e demais sites de busca, as repostas apresentadas vêm de um índice armazenado em seus servidores, e não da internet propriamente dita. Dessa forma, o seu site precisa estar indexado no Google, Yahoo, MSN, etc. A princípio, os sites de busca encontram automaticamente o seu site seguindo links que apontam para ele.  Para saber se o seu site faz parte do índice do Google, entre em google.com.br e digite site:<span class="destaque_faq_soc">www.O-SEU-SITE.com.br</span> (substitua pelo nome do seu site). Se o Google retornar algum resultado, significa que o site já está no índice, e você deve pular o passo seguinte.</p>
        <p>Caso o seu site seja novo ou não possua links apontados para ele, é necessário cadastrá-lo manualmente. O site para cadastro no Google é <span class="destaque_faq_soc">http://www.google.com/addurl/?continue=/addurl</span>.</p>
        <p>Uma vez que o seu site esteja indexado no Google, ele deve começar a aparecer nos resultados de busca. Pode ser que ele apareça na milésima página de resultados para alguns termos procurados. O trabalho de melhorar o posicionamento nos resultados é chamado de SEO - Search Engine Optimization. </p>
        <div class="faq_compratilhar">
        <h3>Compartilhe esta informação</h3>
        </div>
        <div class="faq_avaliar">
        <span class="faq_avaliar_header">Avalie esta informação</span><span class="faq_avaliar_star"><form action="#" method="post" id="faq_avaliar"><input name="star1" type="radio" class="star"/><input name="star1" type="radio" class="star"/><input name="star1" type="radio" class="star"/><input name="star1" type="radio" class="star"/><input name="star1" type="radio" class="star"/></form></span> 
        </div>
        <div class="face_coments">
        <div class="fb-comments" data-href=<?php echo '"'.curPageURL().'"';?> data-num-posts="10" data-width="555"></div>
        </div>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_soc_faq_secundario">
<div class="destaque_tut_soc">
        	<h3>Destaques</h3>
            <ul class="ul_destaque_tut_soc">
            	<li><a href="#" class="a_destaque_tut_seo">Como o Google exibe seus resultados?</a></li>
                <li><a href="#" class="a_destaque_tut_seo">Saiba o que é o índice do Google</a></li>
                <li><a href="#" class="a_destaque_tut_seo">SERP - Search Engine Results Page</a></li>
            </ul>
        </div>
        <div class="topicos_soc">
        <h3>Tópicos do Tutorial</h3>
            <ul class="ul_tut_soc">
                <li><a href="#" class="a_tut_soc">Início do Tutorial SEO</a></li>
                <li><a href="#" class="a_tut_soc">Googlebot robots</a></li>
                <li><a href="#" class="a_tut_soc">Resultados Naturais ou Orgânicos</a></li>
                <li><a href="#" class="a_tut_soc">Relevância</a></li>
                <li><a href="#" class="a_tut_soc">O que é SEO - Search Engine Optimization (otimização de sites para buscadores)</a></li>
                <li><a href="#" class="a_tut_soc">Black Hat SEO / White Hat SEO</a></li>
                <li><a href="#" class="a_tut_soc">Link Exchange e Link Farms (compra e troca de links)</a></li>
                <li><a href="#" class="a_tut_soc">Google Hell (índice suplementar)</a></li>
                <li><a href="#" class="a_tut_soc">Page Rank (PageRank - PR)</a></li>
                <li><a href="#" class="a_tut_soc">Meta Tags</a></li>
                <li><a href="#" class="a_tut_soc">O que é robots.txt</a></li>
                <li><a href="#" class="a_tut_soc">Penalidades Google</a></li>
                <li><a href="#" class="a_tut_soc">Cache do Google</a></li>
                <li><a href="#" class="a_tut_soc">Ferramentas SE</a></li>             
            </ul>
        </div>
        <div class="cert_header">Certificações</div>
        <div class="cert_lateral">
         <a href="https://adwords.google.com/professionals/profile/org?id=012458613222517896837&hl=pt_BR" target="_new"><img src="<?php echo $dominio;?>imagens/adwords_certified_partner-125.png" width="116" height="116"/></a> 
         <img src="<?php echo $dominio;?>imagens/apadi.png" style=" margin-left:50px;" width="110" height="116" />
         <img src="<?php echo $dominio;?>imagens/certificado-landing-page-optimization-2.png" width="116" height="46"  Style=" vertical-align:botton;  margin-top:10px;"/>
         <img src="<?php echo $dominio;?>imagens/SEMPO-SEO-Marketing.png" style="vertical-align:botton;padding-top:10px; padding-left:8px;" /></div>
        <div class="cert_header">Mídia e destaque</div>
        <div class="nm_lateral">
        <h3>SEO MARKETING<br/>NA MÍDIA</h3>
        <p>Somos 100% focados em marketing para sites de busca, como o Google; Experiência em lidar com empresas de todos os portes.</p>
        </div>
    </div>
    </div>
</div>
<?php
include("../../includes/rodape.php");
?>
</body>
</body>
</html>