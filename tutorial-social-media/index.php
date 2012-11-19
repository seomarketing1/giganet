<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Tutorial Social Media | Agência SEO Marketing</title>
<meta name="description" content="" />
<?php
include("../includes/header.php");
include("../includes/menu.php");
?>
<div id="tutorial_soc_content">
 <div class="tutorial_soc_principal">
  <?php
include("../includes/tutorial/menu_tutorial_social.php");
?>
  <div class="breadcrumb">
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>" itemprop="url"> <span itemprop="title">Página Inicial</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>tutorial/" itemprop="url"> <span itemprop="title">Tutorial</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Tutorial Social Media</span> </div>
  </div>
  <h1><small>Tutorial Social Media</small><br/>Rede Social ou Mídia Social?</h1>
  <p>A rede social é uma estrutura composta por pessoas ou organizações que partilham de valores e objetivos em comum. Esse tipo de estrutura possibilita relacionamentos não hierárquicos entre seus participantes. Por isso, a rede social não necessariamente ocorre online, como muitos pensam. </p>
  <p>Já mídias sociais significam a produção de muitos para muitos, ou seja, a descentralização da produção e veiculação de informações. Com suas ferramentas, qualquer pessoa pode disseminar e compartilhar novos conteúdos e informações.</p>
  <p>Então o Facebook pode ser os dois ao mesmo tempo? Sim! Ele pode ser tanto uma rede social online, que você usa para estabelecer relações pessoais/sociais, como uma mídia social onde você cria e dissemina novos conteúdos de forma descentralizada.</p>
  <p>Ambos os termos já existiam antes da internet, mas ganharam força com a popularização do próprio veículo e das redes de relacionamento, como Twitter e Orkut.</p>
  <h2>As Redes Sociais no Brasil</h2>
  <h3>Facebook</h3>
  <p>Com mais de 60 milhões de usuários, é o segundo país com mais usuários na rede. Cerca de 79% dos internautas brasileiros estão cadastrados nessa rede social</p>
  <h3>Twitter</h3>
  <p>Com cerca de 33 milhões de usuários registrados, o Brasil também ocupa a segunda posição nessa rede social, sendo que 23% dos tweets mundiais partem dos brasileiros.</p>
  <h3>Google+</h3>
  <p>Oferecendo uma nova forma de interação, o Google+ é a principal rede social do Google. Tem 5.43% de usuários brasileiros, número que cresce a cada dia.</p>
  <h3>LinkedIn</h3>
  <p>Com mais de 10 milhões de usuários brasileiros, a rede tem como principal objetivo promover e facilitar conexões profissionais.</p>
  <a href="<?php echo $dominio;?>tutorial-social-media/tutorial-facebook/" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Próximo Tópico</span> <span class="prox_topico_grande">Tutorial Facebook</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_soc_secundario">
  <div class="destaque_tut_soc">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_soc">
    <li>As Redes Socias no Brasil</li>
    <li>Facebook, Twitter, Google+ e LinkedIn</li>
   </ul>
  </div>
  <?php
include("../includes/tutorial/lateral_tutorial_social.php");
echo "</div>";
include("../includes/rodape.php");
?>
 </div>
</div>
</body></html>