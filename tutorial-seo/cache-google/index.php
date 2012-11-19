<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Cache do Google | Agência SEO Marketing</title>
<meta name="description" content="" />
<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
</head>
<div id="tutorial_seo_content">
 <div class="tutorial_seo_principal">
  <?php
include("../../includes/tutorial/menu_tutorial_seo.php");
?>
  <div class="breadcrumb">
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>" itemprop="url"> <span itemprop="title">Página Inicial</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>tutorial/" itemprop="url"> <span itemprop="title">Tutorial</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>tutorial-seo/" itemprop="url"> <span itemprop="title">Tutorial SEO</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Cache do Google</span> </div>
  </div>
  <h1><small>Tutorial SEO</small><br/>Cache do Google</h1>
  <h2>Veja o que é e como funciona</h2>
  <p>Para exibir nos resultados de busca para determinada palavra do seu site, o Google armazena em seu "cache" uma versão das páginas que o Googlebot encontra. A última versão de uma página armazenada pode ser encontrada digitando-se "cache:(url a ser pesquisada)" na busca. É baseado no cache que o Google calcula o posicionamento de seu site e não no conteúdo atual dele, que pode ter sido alterado desde a última visita do Googlebot.</p>
  <p>Por exemplo, para ver o cache do Google para a página inicial do portal Terra, faça uma busca por <strong>"cache:www.terra.com.br"</strong>.</p>
  <p>A forma mais fácil de visualizar as páginas do cache de seu site é pela busca por "site:(o seu site)". Para visualizar o cache do Google para o site da Receita Federal, faça uma busca por <strong>"site:www.receita.fazenda.gov.br"</strong>.</p>
  <img src="<?php echo $dominio;?>/imagens/tutorial-seo/cache-google.jpg" alt="cache google" title="Cache Google" />
  <p>Ao final de cada resultado, existe um link com a palavra "cache". Clique nesse link para ver a versão atual dessa página nos servidores do Google.</p>
  <img src="<?php echo $dominio;?>/imagens/tutorial-seo/cache-google2.jpg" alt="cache google" title="Cache Google" />
  <p>A data exibida no topo da página com o cache não necessariamente diz respeito à data em que a página foi alterada, e sim à data em que o Googlebot visitou a página pela última vez. Este <a href="http://www.youtube.com/watch?v=8lmZS7TknQc&amp;feature=gv">vídeo em inglês de Matt Cutts</a>, do Google, explica o funcionamento desse processo.</p>
  <p>É possível orientar o Google a não armazenar as suas páginas em seu cache. Para isso, inclua o seguinte comando entre suas meta tags, antes da tag &lt;BODY&gt;:</p>
  <p>&lt;meta name=&rdquo;robots&rdquo; content=&rdquo;noarchive&rdquo;&gt;</p>
  <a href="<?php echo $dominio;?>tutorial-seo/google-hell/" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Próximo Tópico</span> <span class="prox_topico_grande">Google Hell</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_seo_secundario">
  <div class="destaque_tut_seo">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_seo">
    <li>Coo funciona o cache do Google?</li>
    <li>Definir armazenamento do cache</li>
   </ul>
  </div>
  <?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>
 </div>
</div>
</body></html>