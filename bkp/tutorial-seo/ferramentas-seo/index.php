<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Ferramentas SEO | Agência SEO Marketing</title>
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
			    <span itemprop="title">Ferramentas SEO Gratuitas</span>
			</div>
		</div>

    	<h1><small>Tutorial SEO</small><br/>Ferramentas SEO Gratuitas</h1>
    	<h2>Conheça as principais ferramentas SEO para melhor acompanhar o trabalho de otimização de seu site</h2>
    	<p>Um trabalho de SEO é geralmente um trabalho complexo, onde elementos internos e externos a seu site combinados definem o posicionamento de seu site nas buscas de cada palavra-chave digitada por usuários do Google. Existem diversas ferramentas SEO que podem facilitar e muito o seu trabalho.</p>
    	<p>Se você leva SEO a sério, já deve ser um fiel usuário do Firefox. Apesar de diversos plugins possuirem versões para o IE, vamos focar aqui em feramentas stand-alone ou para  Firefox.  Duas ferramentas são o &quot;canivete suiço&quot; das ferramentas de SEO - Search Status e SEO Quake. O SEO Quake é mais completo e é a favorita de diversos SEOs, mas pode ser mais complicada de entender para usuários leigos. Dependendo ainda da forma que estiver configurada, pode executar repetidas solicitações de informações ao Google e Yahoo até ter a sua funcionalidade temporariamente bloqueada. Pela sua variedade de opções, esta ferramenta terá um capítulo à parte.  Já o Search Status executa várias funções de uma forma leve e simplificada. Existem ainda diversas outras ferramentas e sites que executam funções específicas, descritas abaixo.</p>
    	<h2><strong>Ferramenta de Visualização de PageRank</strong></h2>
    	<p><a href="http://www.quirk.biz/searchstatus/"><strong>Search Status</strong></a> - Permite visualizar facilmente o PageRank e Rank Alexa de páginas que você visita.</p>
    	<p align="center"><img src="<?php echo $dominio;?>/imagens/tutorial-seo/visualizar-pagerank.jpg" alt="" /></p>
    	<p>Recomendamos configurá-la como na tela acima. Para isso, clique no símbolo similar a @ com o botão direito, entre na opção OPTIONS e edite as opções conforme abaixo:</p>
    	<p align="center"><img src="<?php echo $dominio;?>/imagens/tutorial-seo/search-status-config.jpg" alt="" /></p>
    	<h2>Ferramenta de visualização de cache Search Status</h2>
    	<p><a href="http://www.quirk.biz/searchstatus/"><strong>Search Status</strong></a> - Clique com o mouse no botão direito do visualizador de PageRank e clique em <strong>Show Cache</strong> para verificar a versão no cache do Google da página que você está visitando.</p>
    	<p align="center"><img src="<?php echo $dominio;?>/imagens/tutorial-seo/cache-searcstatus.jpg" alt="search status" /></p>
    	<h2>Análise de Meta Tags</h2>
    	<p><a href="http://www.quirk.biz/searchstatus/"><strong>Search Status</strong></a> - Clique no botão similar a @ e escolha a opção meta tags.</p>
    	<p align="center"><img src="<?php echo $dominio;?>/imagens/tutorial-seo/meta-tags-terra.jpg" alt="" /></p>
    	<h2><strong>Ferramenta de análise de backlinks</strong></h2>
    	<p><a href="http://www.linkdiagnosis.com/"><strong>Link Diagnosis</strong></a> - Oferece uma visualização detalhada dos backlinks de seu site baseado nos resultados do Yahoo!, com PageRank e anchor text do site de origem do link.</p>
    	<h2><strong>Análise de posicionamento de resultados</strong></h2>
    	<p><a href="http://tools.seobook.com/firefox/rank-checker/"><strong>SEOBOOK Rank Checker</strong></a> - permite rapidamente visualizar o posicionamento de um site para diversas palavras-chave.</p>
    	<h2><strong>Simuladores de Robots</strong></h2>
    	<p><a href="http://home.snafu.de/tilman/xenulink.html"><strong>Xenu's Link Sleuth</strong></a> - Rastreia um site como se fosso o robot do Google, e gera um mapa com as páginas e outbound links do site. PErmite facilmente ver a existência de links quebrados em seu site (links que apontam para páginas inexistentes).</p>
    	<h2><strong>Browsers de texto</strong></h2>
    	<p><a href="http://www.seo-browser.com/"><strong>SEO Browser</strong></a> - permite navegar pelos sites vendo o que os robots vêem, na ordem em que eles vêem. Excelente para encontrar falhas de programação em sites, como links escondidos do Google, impedindo a correta indexação do site.</p>
    	<h2><strong>Geradores de Sitemap</strong></h2>
    	<p><a href="http://www.xml-sitemaps.com/"><strong>XML Sitemaps</strong></a> - Permite facilmente gerar um sitemap Google para ajudar os robots na correta indexação de seu site.</p>
    	<h2><strong>Análise de densidade de palavras-chave</strong></h2>
    	<p><a href="http://www.ranks.nl/tools/spider.html"><strong>Ranks.nl</strong></a> - Relatório detalhado e rico em opções de palavras-chave do site, e não se perde com acentos, como diversas outras ferramentas.</p>
    	<h2><strong>País de hospedagem do site</strong></h2>
    	<p><a href="https://addons.mozilla.org/pt-BR/firefox/addon/5791"><strong>Flagfox</strong></a> - Informa graficamente na barra de endereço o país de hospedagem do site. Ao clicar na bandeira, exibe detalhes da hospedagem.</p>
    	<p align="center"><img src="<?php echo $dominio;?>/imagens/tutorial-seo/flagfox-origem-pais.jpg" alt="" /></p>
    	<h2><strong>Visualização de links com nofollow</strong></h2>
    	<p><a href="http://www.quirk.biz/searchstatus/"><strong>Search Status</strong></a> - Permite visualizar facilmente quais links de uma página estão com a tag &quot;nofollow&quot;. Ajuda muito a avaliar a importância ou não de um site para efeito de link building. Os links com nofollow ficam num quadrado alaranjado com bordas tracejadas, como no exemplo abaixo:</p>
    	<p align="center"><img src="<?php echo $dominio;?>/imagens/tutorial-seo/nofollow-searchstatus.jpg" alt="" /></p>
    	<p align="center"><strong>Você chegou ao final de nosso tutorial. Volte ao início do <a href="http://www.seomarketing.com.br/tutorial-Google.html">tutorial Google</a> para rever os principais conceitos e entender como funciona o Google. Quer contratar uma agência especializada em fazer com que o seu site apareça nas buscas do Google?<a href="http://www.seomarketing.com.br/SEO-marketing.html"> Conheça a SEO Marketing</a> ou veja os nossos <a href="http://www.seomarketing.com.br/servicos/otimizacao-seo.asp">serviços de SEO</a>,<a href="http://www.seomarketing.com.br/servicos/links-patrocinados.asp"> Links Patrocinados</a>, <a href="http://www.seomarketing.com.br/servicos/landing-pages.asp">Landings Pages</a> e <a href="http://www.seomarketing.com.br/servicos/google-analytics.asp">Consultoria Analytics</a>. </strong></p>
<div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
    
<div class="destaque_tut_seo">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_seo">
        <li>1</li>
        <li>2</li>
    </ul>
</div>
    
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>


</div></div></body></html>