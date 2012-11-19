<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Tutorial Blog | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
</head><div id="tutorial_seo_content">
    <div class="tutorial_seo_principal">
    	<?php
include("../../includes/tutorial/menu_tutorial_social.php");
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
        <span itemprop="title">Tutorial Blog</span>
    </div>
</div>

<h1><small>Tutorial Social Media</small><br/>Tutorial Blog</h1>
        
<h2>O que é um blog?</h2>

<p>É uma ferramenta virtual que permite publicar diversos tipos de postagens de maneira contínua, independente do lugar onde você esteja. Se existe a necessidade de fazer uma publicação imediata, ela pode ser feita por meio de tablets, celulares, computadores, notebooks, entre outros dispositivos móveis.</p>

<h2>O que é um Blog Corporativo?</h2>

<p>É um blog usado para fortalecer a relação 'cliente-empresa'. Esta ferramenta é um complemento ao site da empresa, usado para divulgar produtos, notícias, informativos, textos institucionais ou até mesmo um conteúdo diversificado.</p>

<h2>Como o blog funciona?</h2>

<p>Depois de criá-lo, a sua função é intensificar a relação dos visitantes e usuários com a empresa. Isto é realizado por meio de textos, imagens, vídeos e áudios, que ao serem vistos como um conteúdo relevante pelo público, os internautas retornam ao blog, divulgam e ainda compartilham as postagens.</p>

<h2>O que publicar?</h2>

<p>Assuntos que podem ser considerados relevantes pelos clientes da empresa e visitantes da ferramenta. Criatividade é sempre um ponto positivo, por isso inove e diversifique o conteúdo das postagens. Mescle a seriedade, objetividade, veracidade e o dinamismo, porque o resultado será positivo.</p>

<h2>Como identificar um assunto relevante?</h2>

<p>Publique sempre novidades, como um produto novo, um assunto que esteja em destaque dentro do nicho comercial da empresa ou algo que você saiba que será importante ser informado aos clientes e usuários.</p>

<h2>Otimização de conteúdo</h2>

<p>A geração de conteúdo para o blog deve ser de forma otimizada, no caso, trabalhada com técnicas atrativas de texto, que no futuro darão bons resultados ao blog, à empresa e aos clientes.</p>

<h2>Comentários são importantes?</h2>

<p>Sim, os comentários nas postagens é um método importante para analisar como o conteúdo está sendo absorvido e aceito pelo público. Além disso, eles agregam valor à publicação.</p>

        <a href="<?php echo $dominio;?>tutorial-social-media/tutorial-pinterest/" class="tutorial_seo_prox_topico">
        <span class="prox_topico_peq">Próximo Tópico</span>
        <span class="prox_topico_grande">Tutorial Pinterest</span>
        </a>

<div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
</div>

<div class="tutorial_seo_secundario">

<div class="destaque_tut_soc">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_soc">
        <li>Qual conteúdo publicar</li>
        <li>Otimização de conteúdo</li>
    </ul>
</div>

<?php
include("../../includes/tutorial/lateral_tutorial_social.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</div>

</div></body></html>