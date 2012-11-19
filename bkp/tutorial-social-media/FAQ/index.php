<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>FAQ Social Media | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
<div id="tutorial_soc_faq_content">
    <div class="tutorial_soc_faq_principal">
        <?php
include("../../includes/tutorial/menu_tutorial.php");
?>
    	<h1><small>FAQ Social Media</small><br/>Dicas e dúvidas frequentes de como a sua empresa deve se portar nas mídias sociais.</h1>
        
		<p class="destaque_faq_soc">Respostas às perguntas e dúvidas mais frequentes sobre Social Media.</p>
		
        <p>Disponibilizamos este espaço para oferecer respostas para algumas das perguntas mais comuns relacionadas às Mídias Sociais, veja o que temos de interessante sobre Facebook, Twitter, Google+ e afins. Caso deseje mais conteúdo, visite nosso <a href="<?php echo $dominio;?>tutorial-social-media/">Tutorial Social Media</a>, com dicas e estratégias para Mídias Sociais.</p>
		
		<!--
		
        <h2>Minha empresa deve ter um perfil ou uma fanpage?</h2>

<p>De acordo com os termos de serviço do Facebook, cada pessoa pode ter um perfil, esse com exclusivo caráter pessoal. Ou seja, qualquer empresa que tenha um perfil está quebrando esses termos, com a possibilidade desse ser excluído a qualquer momento.</p>

<p>A fanpage também oferece diversos recursos a mais que o perfil, como não limite de fãs, envio de mensagens para todos os fãs, customização e uso de aplicativos e análise de dados.</p>


<h2>Como criar um fanpage?</h2>

<p>Para criar uma fanpage, acesse o link:  <a href="http://www.facebook.com/pages/browser.php">http://www.facebook.com/pages/browser.php</a> e clique em "Criar Página". Depois, é só seguir os passos completando as informações de acordo com a sua empresa.</p>


<h2>Quero fazer uma promoção no Facebook. Posso usar os "curtirs" e compartilhamentos?</h2>

<p>De acordo com os termos de serviço do Facebook, nenhuma promoção pode estar vinculado ao nome do Facebook e nem utilizar de seus serviços oferecidos aos usuários, no caso, "curtirs", compartilhar, etc.</p>

<p>Segue abaixo algumas importantes diretrizes a serem seguidas:</p>

<ul>
<li>1 - Promoções no Facebook devem ser adiministradas por aplicativo no Facebook.com, em uma página canvas ou aplicativo dentro de uma aba.</li>
<li>2 - Promoções devem deixar clara que não é patrocinada, endossada ou associada ao Facebook e o participante deve estar ciente que está oferecendo informações para empresa e não ao Facebook.</li>
<li>3 - Não se deve utilizar funcionalidades do Facebook como forma de ingresso ou participação como mecanismo da promoção.</li>
<li>4 - Não se deve usar nenhuma funcionalidade do Facebook, como "curtir", como mecanismo de votação para alguma promoção.</li>
<li>5 - Não se deve utilizar o Facebook como meio de comunicação para comunicar, através de chat, mensagem ou post em perfil/página, o vencedor da promoção.</li>
<li>6 - Não utilizar o nome, marca, copyrights ou nenhuma propriedade intelectual do Facebook em conexão com uma promoção ou mencionar o Facebook nas regras ou materiais relacionados na promoção, exceto quando necessário para cumprir as obrigações do item 2.</li>
</ul>

<h2>O que é um Trendig Topic?</h2>

<p>É uma lista, atualizada em tempo real, dos termos e frases mais publicados no Twitter, desde extensas frases, até hashtags (#). Este recurso do Twitter oferece uma opção de filtro, com alcance mundial, por países e de algumas cidades.</p>

<h2>Minha empresa deve utilizar palavras abreviadas no Twitter?</h2>

<p>Com o limite de 140 caracteres por post no Twitter, o uso de abreviações ajuda muito. Claro, que não saia abreviando todas as palavras, deixando este recurso apenas para as mais simples e que já tenham uma forma abreviada mais conhecida, como: hj, vc, tbm. </p>

<h2>Como deve ser o tom utilizado em minhas postagens?</h2>

<p>O tipo de abordagem feito por sua empresa nas mídias sociais deve ser definido de acordo com a estratégia que sua marca prentende aplicar nestes canais. Você pode tornar os seus perfis amigos de seus usuários e assim usar um tom de comunicação mais leve e semelhante ao usado por eles, ou até mesmo, seguir uma linha mais empresarial e "quadrada" apenas citando os benefícios de sua marca e tornando este mais um canal de SAC.</p>

<h2>Minha empresa deve estar presente em todas as redes sociais?</h2>

<p>Depende de qual é a sua estratégia para as redes sociais e principalmente qual é o seu tipo de empresa. Existem diversos tipos de redes sociais, cada uma com foco em diferentes públicos,  mesmo assim, com uma boa estratégia, pode interagir a sua marca de diferentes formas com os seus usuários.</p>

<h2>Qual tipo de conteúdo devo postar em minhas redes sociais?</h2>

<p>Sua estratégia é quem vai definir isso. Claro que postagens com objetivo de interação,são as que apresentam melhor resultado, já que torna viva a conversa com seus usuários. Procure informar seu público-alvo de acordo com a área em que a sua empresa atua. Se estas informações forem boas, as chances de falarem e compartilharem a sua marca, são maiores.</p>
        -->
		
		<ul id="ul_tutorial_soc">
        	<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/minha-empresa-deve-ter-perfil-ou-fanpage.php" class="tut_faq_soc_link">Minha empresa deve ter um perfil ou uma fanpage?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-criar-uma-fanpage.php" class="tut_faq_soc_link">Como criar uma Fanpage?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-fazer-promocao-no-facebook.php" class="tut_faq_soc_link">Qual a melhor forma de fazer uma promoção no Facebook?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/o-que-e-trending-topic.php" class="tut_faq_soc_link">O que é um Trending Topic?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/usar-abreviacao-no-twitter.php" class="tut_faq_soc_link">Minha empresa deve usar palavras abreviadas no Twitter?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-deve-ser-o-tom-das-postagens.php" class="tut_faq_soc_link">Como deve ser o "tom" utilizado em minhas postagens?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/minha-empresa-deve-estar-em-todas-as-redes-sociais.php" class="tut_faq_soc_link">Minha empresa deve estar presente em todas as redes sociais?</a></li>
            <li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/qual-tipo-de-conteudo-postar-nas-redes-sociais.php" class="tut_faq_soc_link">Qual tipo de conteúdo devo postar em minhas redes sociais?</a></li>
			
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/redes-ou-midias-sociais.php" class="tut_faq_soc_link">Redes sociais ou mídias sociais? Qual é o certo?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-divulgar-minha-fanpage.php" class="tut_faq_soc_link">Como divulgar minha Fanpage?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/o-que-e-facebook-ads.php" class="tut_faq_soc_link">O que é Facebook Ads?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/anunciar-no-facebook-ou-google-adwords.php" class="tut_faq_soc_link">É melhor anunciar no Facebook ou no Google Adwords?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/o-que-e-facebook-marketing.php" class="tut_faq_soc_link">O que é Facebook Marketing?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/perfis-fakes-podem-curtir-minha-pagina.php" class="tut_faq_soc_link">Se eu investir em Facebook Ads, perfis fakes irão curtir minha página?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/quanto-investir-em-facebook-ads.php" class="tut_faq_soc_link">Quanto investir em Facebook Ads?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/por-que-nem-todos-podem-ver-minhas-postagens-no-facebook.php" class="tut_faq_soc_link">Por que nem todos os meus fãs irão ver minhas postagens no Facebook?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-conseguir-rts-no-twitter.php" class="tut_faq_soc_link">Como conseguir RT's (Retweets) no Twitter?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-ter-conta-verificada-twitter.php" class="tut_faq_soc_link">Como posso ter uma conta verificada no Twitter?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/o-que-e-klout.php" class="tut_faq_soc_link">O que é Klout?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-aumentar-pontuacao-klout.php" class="tut_faq_soc_link">Como posso aumentar minha pontuação no Klout?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-o-pinterest-pode-ajudar-em-seo.php" class="tut_faq_soc_link">Como o Pinterest pode me ajudar em SEO?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/como-o-foursquare-pode-ajudar-meu-negocio.php" class="tut_faq_soc_link">Como o Foursquare pode ajudar meu negócio local?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/quais-tipos-de-promocao-fazer-no-foursquare.php" class="tut_faq_soc_link">Quais tipos de promoção posso fazer no Foursquare?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/por-que-minha-empresa-deve-ter-um-blog-corporativo.php" class="tut_faq_soc_link">Por que minha empresa deve ter um blog corporativo??</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/frequencia-de-postagem-no-blog.php" class="tut_faq_soc_link">Quantas vezes por semana devo postar no meu blog?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/o-que-sao-circulos-no-google-plus.php" class="tut_faq_soc_link">O que são Circulos no Google+?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/o-que-e-um-hangout.php" class="tut_faq_soc_link">O que é um Hangout?</a></li>
			<li><a href="<?php echo $dominio;?>tutorial-social-media/FAQ/para-que-serve-o-botao-plus-one.php" class="tut_faq_soc_link">Para que serve o +1?</a></li>
        </ul>
		
      <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>

<div class="tutorial_soc_faq_secundario">
<?php
include("../../includes/tutorial/lateral_tutorial_soc.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</body>
</body>
</html>