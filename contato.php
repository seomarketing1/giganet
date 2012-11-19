<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Contato - | Agência SEO Marketing</title>
<?php
include("includes/header.php");
include("includes/menu.php");
?>
<div id="contato_content">
    <div class="contato_principal">
    <h1>Sobre o que vamos falar?</h1>
    <p>Quer consultoria 100% focada em marketing para sites de busca como o Google. Entre em contato com a gente e aumente a quantidade de oportunidades de negócio geradas através da internet.</p>
    <div id="area-form-contato">
    <div class="form-msg"></div>
    <form action="" method="post" class="form_contato" id="form_contato">
    <input type="text" id="assunto" name="Assunto" class="form_contato_input" value="Assunto:" onblur="if (this.value == '') {this.value = 'Assunto:';}"
 onfocus="if (this.value == 'Assunto:') {this.value = '';}" />
    <input type="text" id="nome" name="Nome" class="form_contato_input" value="Nome:" onblur="if (this.value == '') {this.value = 'Nome:';}"
 onfocus="if (this.value == 'Nome:') {this.value = '';}"  />
    <input type="text" id="email" name="email" class="form_contato_input" value="E-MAIL:"  onblur="if (this.value == '') {this.value = 'E-MAIL:';}"
 onfocus="if (this.value == 'E-MAIL:') {this.value = '';}"/>
    <textarea cols="3" rows="4" name="mensagem" id="mensagem" class="form_contato_textarea" onblur="if (this.value == '') {this.value = 'Mensagem:';}"
 onfocus="if (this.value == 'Mensagem:') {this.value = '';}">Mensagem:</textarea>
    <input type="submit" value="Enviar" id="ok"  class="form_contato_submit"/>
    </form>
    </div>
    <script type="text/javascript">
	$(function(){
		$('.form_contato').submit(function(){
			if($('#assunto').val() == '' || $('#assunto').val() == null || $('#assunto').val() == 'Assunto:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>Assunto</strong>.');
				$('input[name="Assunto"]').focus();
			}
			else if($('input[name="Nome"]').val() == '' || $('input[name="Nome"]').val() == null || $('input[name="Nome"]').val() == 'Nome:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>Nome</strong>.');
				$('input[name="Nome"]').focus();
			}
			else if($('input[name="email"]').val() == '' || $('input[name="email"]').val() == null || $('input[name="email"]').val() == 'E-MAIL:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>E-mail</strong>.');
				$('input[name="email"]').focus();
			}
			else
			{
				$.ajax({
					type:'post',
					url:'contato.envio.php',
					data:$('#form_contato').serialize(),
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
    <br/>
	</div>
    <div class="contato_secundario"><p>
    Encontre-nos:<br/><br/>
<span class="destaque">Na web:</span> preencha os campos abaixo<br/>
<span class="destaque">Por e-mail:</span> contato@seomarketing.com.br<br/>
<span class="destaque">Pelo telefone:</span> (11) 2361-8823 - <span class="destaque">Plantão:</span> (11) 8160-6977<br/>
<span class="destaque">Skype:</span> seomarketing</p>
<a rel="nofollow" onclick="lpButtonCTTUrl = 'http://server.iad.liveperson.net/hc/49683955/?cmd=file&amp;file=visitorWantsToChat&amp;site=49683955&amp;imageUrl=http://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/Portuguese/General/3a&amp;referrer='+escape(document.location); lpButtonCTTUrl = (typeof(lpAppendVisitorCookies) != 'undefined' ? lpAppendVisitorCookies(lpButtonCTTUrl) : lpButtonCTTUrl); window.open(lpButtonCTTUrl,'chat49683955','width=475,height=400,resizable=yes');return false;" target="chat49683955" href="http://server.iad.liveperson.net/hc/49683955/?cmd=file&amp;file=visitorWantsToChat&amp;site=49683955&amp;byhref=1&amp;imageUrl=http://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/Portuguese/General/3a"><img border="0" name="hcIcon" alt="Liverperson" src="http://server.iad.liveperson.net/hc/49683955/?cmd=repstate&amp;site=49683955&amp;channel=web&amp;&amp;ver=1&amp;imageUrl=http://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/Portuguese/General/3a" alt="" /></a></div>
    <div class="mapa"><div class="location">                        
                        <p>
							<iframe width="868" height="366" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Cancioneiro+de+%C3%89vora,+588,+S%C3%A3o+Paulo&amp;sll=-14.179186,-50.449219&amp;sspn=88.819977,186.328125&amp;ie=UTF8&amp;ll=-23.626675,-46.692195&amp;spn=0.014548,0.013733&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br />
							<small><a href="http://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Rua+Cancioneiro+de+%C3%89vora,+588,+S%C3%A3o+Paulo&amp;sll=-14.179186,-50.449219&amp;sspn=88.819977,186.328125&amp;ie=UTF8&amp;ll=-23.626675,-46.692195&amp;spn=0.014548,0.013733&amp;z=15&amp;iwloc=A" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>	
						</p>
                        <p align="center"><strong>Rua Cancioneiro de &Eacute;vora, 588. Ch&aacute;cara Santo Ant&ocirc;nio, S&atilde;o Paulo, SP. 04708-010 - Brasil.</strong></p><br/>
				  	</div></div>
<?php
include("includes/rodape.php");
?>
</body>
</body>
</html>