<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>FAQ SEO | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
<div id="tutorial_seo_faq_content">
<div class="tutorial_seo_faq_principal">
    	<?php
include("../../includes/tutorial/menu_tutorial.php");
?>
    	<h1>FAQ SEO - Perguntas e Respostas Sobre SEO</h1>
        <p class="destaque_faq_seo">Respostas às perguntas e pesquisas mais frequentes relacionadas ao mundo de Search Engine Optimization</p>
        <p>Neste espaço procuramos responder as perguntas mais comuns para quem tem interesse em conhecer melhor o mundo de Search Engine Marketing, tanto para SEO (resultados naturais, orgânicos, Google, Yahoo, Bing) quanto de links patrocinados (Google Adwords, Yahoo Search Marketing). Tem uma dúvida? Pesquise as perguntas abaixo, veja o nosso tutorial Google, consulte o Glossário SEO ou faça a sua pergunta utilizando o formulário ao final desta página.</p>
        <ul id="ul_tutorial_seo">
        	<li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/como-aparecer-no-google.php" class="tut_faq_seo_link">Como aparecer no Google?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/tempo-para-aparecer-nos-buscadores.php" class="tut_faq_seo_link">Quanto tempo leva para o meu site aparecer no Google, Yahoo e Bing?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/como-aparecer-na-primeira-pagina-do-google.php" class="tut_faq_seo_link"> Como aparecer na primeira página das pesquisas do Google?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/requisitos-basicos-para-um-site-ser-bem-posicionado-no-google.php" class="tut_faq_seo_link">Quais os requisitos básicos de um site para aparecer bem posicionado no Google?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/como-saber-se-meu-site-foi-penalizado-pelo-google.php" class="tut_faq_seo_link">Penalidades Google - será que meu site foi penalizado?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/qual-o-elemento-de-seo-mais-importante.php" class="tut_faq_seo_link">Qual o elemento de SEO mais importante?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/como-o-google-funciona.php" class="tut_faq_seo_link">Como funciona o Google?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/curso-de-seo-ou-consultoria-seo.php" class="tut_faq_seo_link">Curso de SEO ou consultoria? Escolha o melhor para você.</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-seo/FAQ/como-remover-um-site-do-google.php" class="tut_faq_seo_link">Como remover um site do Google?</a></li>
        </ul>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_faq_secundario">
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</body>
</body>
</html>