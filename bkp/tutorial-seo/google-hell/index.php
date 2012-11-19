<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Google Hell | Agência SEO Marketing</title>
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
			    <span itemprop="title">Google Hell (índice suplementar)</span>
			</div>
		</div>

    	<h1><small>Tutorial SEO</small><br/>Google Hell (índice suplementar)</h1>
        <h2>Saiba mais sobre as causas desse "período" que causou a queda do indíce suplementar dos websites</h2>
        
    	<h2>Como o Google varre a internet?</h2>
        
    	<p>O Google "passeia" pela internet por meio de um "robozinho" chamado Googlebot. Explicando de uma forma simplificada, esse robozinho é um software que lê as páginas da internet, armazena o seu conteúdo e segue os links contidos nestas páginas para repetir continuamente esse processo. Algumas páginas de sites de notícias ou blogs diários são "visitados" pelo Googlebot várias vezes ao dia, enquanto outras podem ficar meses sem receber a visita do robozinho.</p>
        
        <p>Praticamente toda a informação varrida pelo Googlebot é armazenada em seus servidores. Logo, quando se realiza uma busca no Google, ele utiliza as informações armazenadas e não o conteúdo da internet para calcular que páginas aparecem nos primeiros resultados de busca.</p>
        
    	<h2>Índices do Google</h2>
        
    	<p>Com o aumento do número de páginas da internet e com o objetivo de priorizar sites que tivessem mais importância, o Google passou em 2003 a dividir o seu índice em dois - o principal e o suplementar. Com isso, poderia dar mais atenção às páginas de maior importância e de atualização mais constante. Por outro lado, páginas que não tivessem uma atualização frequente, que contivessem spam, conteúdo duplicado ou não recebessem links importantes, passavam para o índice suplementar.</p>
        
        <p>Isso significava que o Google visitaria essas páginas com menos frequência e que, provavelmente, elas teriam um posicionamento pior na página de resultados dos mecanismos de busca (SERP). Ter um número significativo de páginas no índice suplementar do Google, significava para muitos sites uma queda significativa de visitantes e de receita. Então, foi dado o nome de "Google Hell" para o índice suplementar, que traduzido para o português seria "O inferno do Google".</p>
        
    	<h2>O Google Hell</h2>
        
    	<p>As páginas que estavam no Google Hell eram facilmente identificadas por terem a indicação de "índice suplementar" na sua tela de resultados. Temido por webmasters do mundo todo, o inferno do Google estava mais para purgatório do que necessariamente inferno, já que era difícil mas não impossível de sair dele. Era comum que sites novos tivessem suas páginas no índice suplementar antes do Google conceder a estas o devido crédito. Com um trabalho eficiente de White Hat SEO e paciência, porém, era possível voltar às páginas ao seu índice principal. <a href="http://www.forbes.com/home/technology/2007/04/29/sanar-google-skyfacet-tech-cx_ag_0430googhell.html">Relatos infamados</a> de webmasters inconformados espalhavam-se pela internet. Por seu lado, <a href="http://www.mattcutts.com/blog/google-hell/">Google defendia-se</a> ao dizer que o índice suplementar não era o fim do mundo, sites poderiam ser bem rankeados mesmo estando no Google Hell e que muitas vezes páginas iam parar no índice suplementar por não seguirem suas diretrizes.</p>
        
    	<h2>O fim do Google Hell</h2>
        
    	<p>Em 31 de Julho de 2007, o Google <a href="http://googlewebmastercentral.blogspot.com/2007/07/supplemental-goes-mainstream.html">anunciou</a> que deixaria de colocar a denominação "índice suplementar" nas páginas que fizessem parte desse índice, por mais que continue a existir. O argumento utilizado é o de que as constantes evoluções de seus algoritmos permitem que o índice suplementar seja visitado mais vezes pelo Googlebot e, com isso, páginas desse índice aparecerão mais vezes nos resultados de busca. O "Google Hell" continua então a existir, mas agora não é identificado. Com isso, ao menos, gera-se menos polêmica.</p>
        
<a href="<?php echo $dominio;?>tutorial-seo/link-exchange-link-farms/" class="tutorial_seo_prox_topico">
    <span class="prox_topico_peq">Próximo Tópico</span>
    <span class="prox_topico_grande">Link Exchange e Link Farms</span>
    </a>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
    
<div class="destaque_tut_seo">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_seo">
        <li>Como o Google varre a internet</li>
        <li>O fim do Google Hell?</li>
    </ul>
</div>
    
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>


</div></div></body></html>