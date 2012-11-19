<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Importância das descrições para SEO | Agência SEO Marketing</title>
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
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">A Importância das Descrições para SEO</span> </div>
  </div>
  <h1><small>Tutorial SEO</small><br/>A Importância das Descrições para SEO</h1>
  <h2>Saiba a importância da meta description em uma estratégia de SEO</h2>
  <p class="destaque">No tópico anterior, falamos sobre a importância dos títulos e como ele é exibido nas páginas de busca. Dessa vez, falaremos sobre a descrição, também conhecida como Meta Description.</p>
  <p>Embora alguns digam que ela não causa efeito direto no posicionamento do site, ela ainda pode ser muito relevante, pois é responsável por atrair o clique do usuário. Na internet, há vários estudos sobre o assunto, definindo tamanho, formato, posição das keywords para melhor coversão, etc. Explicaremos aqui a parte simples dessa ciência.</p>
  <p>Veja abaixo um exemplo de Meta Description:</p>
  <img src="<?php echo $dominio;?>imagens/tutorial-seo/meta-description-example.jpg" />
  <p>O código para o exemplo acima ficar assim:</p>
  <p><strong>&lt;meta name="description" content="Tutorial Adwords - Entenda os links patrocinados, e saiba como são classificados os anúncios do Google e Yahoo. " /&gt;</strong></p>
  <p>Profissionais que trabalham com Google Adwords e ferramentas similares já estão muito familiarizados com esse item, pois constantemente criam novas campanhas e procuram a melhor forma de descrever o produto/serviço no anúncio e aumentar as suas conversões. Para a área de Otimização de Sites, podemos aplicar os mesmos conceitos.</p>
  <p>As descrições devem conter no máximo 250 caracteres, porém, geralmente são utilizados 152 para que o buscador não corte o texto. Procure utilizar sinônimos e uma boa explicação que defina bem o conteúdo da página. Evite textos excessivamente comerciais e prefira uma abordagem mais sutil. Lembre-se que esse item pode fazer a diferença entre conseguir ou perder um acesso por meio dos resultados orgânicos.</p>
  <p>Outra dica é fazer pequenos testes com intervalos de aproximadamente 1 mês ou um pouco menos. Os períodos devem ser espaçados, pois o Google leva um certo tempo para indexar o conteúdo e alterações muito frequentes podem atrapalhar o posicionamento.</p>
  <a href="<?php echo $dominio;?>tutorial-seo/conteudo-duplicado-seo/" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Próximo Tópico</span> <span class="prox_topico_grande">Conteúdo Duplicado e SEO</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_seo_secundario">
  <div class="destaque_tut_seo">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_seo">
    <li>Exemplo Meta Description</li>
    <li>Meta Description influencia no posicionamento?</li>
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