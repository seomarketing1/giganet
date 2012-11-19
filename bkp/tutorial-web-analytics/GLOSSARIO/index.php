<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Tutorial SEO| Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
?>
<script type="text/javascript" src="../../js/jquery.listnav.min-2.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#glossario_ana_container').listnav({ 
    initLetter: 'a', 
    includeAll: true, 
    includeOther: false, 
    flagDisabled: false, 
    noMatchText: 'Nothing matched your filter, please click another letter.', 
    showCounts: false, 
    cookieName: 'seo-glossario-list'
  });
});
</script>
<?php
include("../../includes/menu.php");
?>
<div id="tutorial_ana_glossario_content">
    <div class="tutorial_ana_glossario_principal">
    	<?php
include("../../includes/menu_tutorial.php");
?>
    	<h1>GLOSSÁRIO DE<br/>A a Z</h1>
        <div id="glossario_ana_container-nav"></div>
        <div id="glossario_ana_container">
        	<div class="glossario_content">
                <span class="glossario_content_title">Black Hat SEO</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Cadastros de Sites</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Doorway Pages</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Googlebot</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Índice</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Keyword Stuffing</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Link Farm</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Marketing</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
        </div>
        <h2>Não encontrou a palavra<br/>que procurava?</h2>
        <form id="add_glossario"  action="#" method="post" class="form_faq">
        	<input type="hidden" name="categoria" value="ana"/>
            <input type="text" name="nome"  class="form_faq_input" value="Nome:" onblur="if (this.value == '') {this.value = 'Nome:';}"
 onfocus="if (this.value == 'Nome:') {this.value = '';}" />
            <input type="text" class="form_faq_input" name="email" value="E-Mail:" onblur="if (this.value == '') {this.value = 'E-Mail:';}"
 onfocus="if (this.value == 'E-Mail:') {this.value = '';}"  />
            <input type="text"  class="form_faq_input" name="termo" value="Termo:" onblur="if (this.value == '') {this.value = 'Termo:';}"
 onfocus="if (this.value == 'Termo:') {this.value = '';}" /><br/>
			 <div class="form-msg"></div>
            <input type="submit" value="Enviar"  class="form_faq_submit" />
            </form>
  <script type="text/javascript">
	$(function(){
		$('#add_glossario').submit(function(){
			if($('input[name="nome"]').val() == '' || $('input[name="nome"]').val() == null || $('input[name="nome"]').val() == 'Nome:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>Nome</strong>.');
				$('input[name="nome"]').focus();
			}
			else if($('input[name="email"]').val() == '' || $('input[name="email"]').val() == null || $('input[name="email"]').val() == 'E-Mail:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>E-mail</strong>.');
				$('input[name="email"]').focus();
			}
			else if($('input[name="termo"]').val() == '' || $('input[name="termo"]').val() == null || $('input[name="termo"]').val() == 'Termo:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>E-mail</strong>.');
				$('input[name="termo"]').focus();
			}
			else
			{
				$.ajax({
					type:'post',
					url:'contato.envio.php',
					data:$('#add_glossario').serialize(),
					beforeSend:function(){
						$('.form-msg').hide().html('Enviando e-mail. Entraremos em contato assim que possível.').fadeIn(400);
					},
					success:function(e){
						$('#form_contato').fadeOut(400);
						$('.form-msg').hide().html('E-mail enviado com sucesso.').fadeIn(400);
					}
				});
			}
			return false;
		});
	});
	</script>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
     <div class="tutorial_ana_glossario_secundario">
<div class="destaque_tut_ana">
        	<h3>Destaques</h3>
            <ul class="ul_destaque_tut_seo">
            	<li><a href="#" class="a_destaque_tut_seo">Como o Google exibe seus resultados?</a></li>
                <li><a href="#" class="a_destaque_tut_seo">Saiba o que é o índice do Google</a></li>
                <li><a href="#" class="a_destaque_tut_seo">SERP - Search Engine Results Page</a></li>
            </ul>
        </div>
        <div class="topicos_ana">
        <h3>Tópicos do Tutorial</h3>
            <ul class="ul_tut_ana">
                <li><a href="#" class="a_tut_ana">Início do Tutorial SEO</a></li>
                <li><a href="#" class="a_tut_ana">Googlebot robots</a></li>
                <li><a href="#" class="a_tut_ana">Resultados Naturais ou Orgânicos</a></li>
                <li><a href="#" class="a_tut_ana">Relevância</a></li>
                <li><a href="#" class="a_tut_ana">O que é SEO - Search Engine Optimization (otimização de sites para buscadores)</a></li>
                <li><a href="#" class="a_tut_ana">Black Hat SEO / White Hat SEO</a></li>
                <li><a href="#" class="a_tut_ana">Link Exchange e Link Farms (compra e troca de links)</a></li>
                <li><a href="#" class="a_tut_ana">Google Hell (índice suplementar)</a></li>
                <li><a href="#" class="a_tut_ana">Page Rank (PageRank - PR)</a></li>
                <li><a href="#" class="a_tut_ana">Meta Tags</a></li>
                <li><a href="#" class="a_tut_ana">O que é robots.txt</a></li>
                <li><a href="#" class="a_tut_ana">Penalidades Google</a></li>
                <li><a href="#" class="a_tut_ana">Cache do Google</a></li>
                <li><a href="#" class="a_tut_ana">Ferramentas SE</a></li>                
            </ul>
        </div>
        <div class="cert_header">Certificações</div>
        <div class="cert_lateral">
         <a href="https://adwords.google.com/professionals/profile/org?id=012458613222517896837&hl=pt_BR" target="_new"><img src="<?php echo $dominio;?>imagens/adwords_certified_partner-125.png" width="116" height="116"/></a> 
         <img src="<?php echo $dominio;?>imagens/apadi.png" style=" margin-left:50px;" width="110" height="116" />
         <img src="<?php echo $dominio;?>imagens/certificado-landing-page-optimization-2.png" width="116" height="46"  Style=" vertical-align:botton;  margin-top:10px;"/>
         <img src="<?php echo $dominio;?>imagens/SEMPO-SEO-Marketing.png" style="vertical-align:botton;padding-top:10px; padding-left:8px;" /></div>
        <div class="cert_header">Mídia e destaque</div>
        <div class="nm_lateral">
        <h3>SEO MARKETING<br/>NA MÍDIA</h3>
        <p>Somos 100% focados em marketing para sites de busca, como o Google; Experiência em lidar com empresas de todos os portes.</p>
        </div>
    </div>
    </div>
</div>
<?php
include("../../includes/rodape.php");
?>
</body>
</body>
</html>