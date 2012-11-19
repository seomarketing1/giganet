<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Conteúdo Duplicado e SEO | Agência SEO Marketing</title>
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
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Conteúdo Duplicado</span> </div>
  </div>
  <h1><small>Tutorial SEO</small><br/>Conteúdo duplicado</h1>
  <p>Escrever conteudo</p>
  <a href="<?php echo $dominio;?>tutorial-seo/densidade-keywords-web-writing/" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Próximo Tópico</span> <span class="prox_topico_grande">Densidade das Keywords e Web Writing</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
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
 </div>
</div>
</body></html>