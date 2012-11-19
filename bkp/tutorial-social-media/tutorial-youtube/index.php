<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Tutorial Youtube | Agência SEO Marketing</title>
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
      <a href="<?php echo $dominio;?>tutorial-social-media/" itemprop="url">
        <span itemprop="title">Tutorial Social Media</span>
      </a> ›
    </div>
    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <span itemprop="title">Tutorial Youtube</span>
    </div>
</div>

    	<h1><small>Tutorial Social Media</small><br/>Tutorial Youtube</h1>
        
        <h2>O YouTube</h2>

<p>Fundado por 3 colegas de trabalho em 2005, trata-se de uma plataforma de vídeos que permite que as pessoas assistam, publiquem e descubram vídeos criados originalmente. Foi adquirida pelo Google em 2006.</p>

<p>O site de compartilhamento de vídeos tem números surpreendentes: 60 horas de vídeo são carregadas a cada minuto, sendo que 4 bilhões deles são vistos por dia. </p>

<p>É uma excelente plataforma para divulgação de uma marca, seja por vídeos institucionais ou cobertura de eventos, por exemplo.</p>

<h3>Canais</h3>

<p>O Canal é o lugar onde você irá divulgar seus vídeos. Nele, são visíveis os vídeos que você carregou e os que você favoritou durante a navegação pela plataforma. Também é possível organizar vídeos por Listas de Reprodução.</p>

<p>É possível fazer a personalização do canal para que ele fique de acordo com a identidade visual da empresa.</p>

<h3>Incorporação</h3>

<p>O vídeo carregado em seu canal também pode ser incorporado à página de seu blog ou site, por exemplo. Dessa forma, é possível divulgá-lo nos diversos outros canais da empresa, sem que o usuário tenha que ser levado a outro ambiente.</p>

<h3>Compartilhamento</h3>

<p>É possível compartilhar os vídeos do YouTube em diversas redes sociais, como Facebook, Twitter e Orkut. Isso possibilita a viralização do conteúdo em diversas plataformas.</p>

        <a href="<?php echo $dominio;?>tutorial-social-media/tutorial-blog/" class="tutorial_seo_prox_topico">
        <span class="prox_topico_peq">Próximo Tópico</span>
        <span class="prox_topico_grande">Tutorial Blog</span>
        </a>

<div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
</div>

<div class="tutorial_seo_secundario">

<div class="destaque_tut_soc">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_soc">
        <li>Canais do Youtube</li>
        <li>Compartilhamento de vídeos</li>
    </ul>
</div>

<?php
include("../../includes/tutorial/lateral_tutorial_social.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</div>

</div></body></html>