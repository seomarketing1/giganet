<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Google Robots | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
</head><div id="tutorial_seo_content">
    <div class="tutorial_seo_principal">
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
			  <a href="<?php echo $dominio;?>tutorial-seo/" itemprop="url">
			    <span itemprop="title">Tutorial SEO</span>
			  </a> ›
			</div>
			<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			    <span itemprop="title">Googlebot, o robô do Google</span>
			</div>
		</div>

    	<h1><small>Tutorial SEO</small><br/>Googlebot, o robô do Google</h1>
        
    	<h2>Veja como o Google descobre e armazena o conteúdo da internet</h2>
        
    	<p>Na internet, <strong>robots</strong>, ou <strong>robôs</strong>, são aplicativos que percorrem a internet em busca de conteúdo com o objetivo de indexar ou verificar alterações ocorridas desde a última "visita" (Saiba como funcionam os sites de busca, no início do tutorial). Robots também são conhecidos como <strong>"indexadores"</strong>, <strong>"bots"</strong> ou <strong>"crawlers"</strong>. Muito conhecidos na comunidade <strong>SEO</strong>, possuem até nome próprio. Os robots do Google são chamados de <strong>Googlebot</strong>, os robots do Bing de <strong>Bingbot</strong>, os robots do Yahoo de <strong>Yahoobot</strong> ou <strong>Yahoo! Slurp</strong>. Seguindo links de páginas, eles permitem aos sites de busca varrerem a internet para armazenar o conteúdo encontrado pelo caminho.</p>
        
    	<h2>O que são links</h2>
        
    	<p>Eles são comandos utilizados em páginas da internet que levam o internauta a outras páginas do mesmo site ou fora dele. Geralmente, o link aparece em destaque, com outra cor ou sublinhado.</p>
        
        <p><strong>Exemplo:</strong> clique no texto <a href="<?php echo $dominio;?>tutorial-seo/">tutorial SEO</a> e você será redirecionado ao início deste tutorial.</p>
        
    	<h2>Como trabalha o Googlebot</h2>
        
    	<p>Os robots começam seu trabalho em uma determinada página. Armazenam o conteúdo e mapeiam todos os links existentes nela. Em seguida, priorizam cada um dos links e começam a segui-los, a fim de armazenar o conteúdo e mapear os links encontrados, e assim sucessivamente.</p>
        
    	<h2>Como controlar a ação dos robots</h2>
        
    	<p>Nem todo o conteúdo de um site deve ser indexado pelos robots. Páginas de login, páginas repetidas e páginas de impressão são alguns exemplos. Existem algumas formas para impedir que o seu site seja visitado pelo Googlebot. Um deles é por meio do arquivo "robots.txt". Temos neste tutorial, uma página dedicada ao <a href="<?php echo $dominio;?>tutorial-seo/como-configurar-robots">robots.txt</a>. Uma outra forma de controlar o acesso do Googlebot no site é pela Meta Tag "robots".</p>
        
<a href="<?php echo $dominio;?>tutorial-seo/link-building/" class="tutorial_seo_prox_topico">
    <span class="prox_topico_peq">Próximo Tópico</span>
    <span class="prox_topico_grande">Link Building</span>
    </a>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
    
<div class="destaque_tut_seo">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_seo">
        <li>Como o Google coleta conteúdo da internet</li>
        <li>Como funciona o Googlebot</li>
    </ul>
</div>
    
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>


</div></div></body></html>