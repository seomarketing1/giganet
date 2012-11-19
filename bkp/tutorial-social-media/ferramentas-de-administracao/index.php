<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Ferramentas de Administração | Agência SEO Marketing</title>
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
        <span itemprop="title">Ferramentas de Administração</span>
    </div>
</div>

<h1><small>Tutorial Social Media</small><br/>Ferramentas de Administração</h1>
        
<h2>Ferramentas de Administração</h2>

<p>No ambiente digital, falar com o seu consumidor na hora certa e da forma certa é essencial.</p>

<p>As ferramentas de gerenciamento de redes sociais permitem um gerenciamento completo e simultâneo de todas as redes sociais da empresa.</p>

<p>Qual o melhor horário para falar com o seu consumidor? Em que dias o seu público-alvo é mais ativo na internet? Essas informações são importantes para direcionar suas mensagens no melhor momento.</p>

<p>É por isso que temos a preocupação de utilizar as ferramentas de gerenciamento de redes sociais que atendem melhor o negócio de nossos clientes.</p>

        <a href="<?php echo $dominio;?>tutorial-social-media" class="tutorial_seo_prox_topico">
        <span class="prox_topico_peq">Próximo Tópico</span>
        <span class="prox_topico_grande">Boas práticas em Social Media</span>
        </a>

<div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
</div>

<div class="tutorial_seo_secundario">

<div class="destaque_tut_soc">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_soc">
        <li>Gerenciamento de Redes Sociais</li>
        <li>Interação com o consumidor</li>
    </ul>
</div>

<?php
include("../../includes/tutorial/lateral_tutorial_social.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</div>

</div></body></html>