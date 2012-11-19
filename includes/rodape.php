<div id="rodape">
 <div id="rodape_contexto">
  <div id="rodape_boxa"><span class="rodape_header">SEO MARKETING</span> <br/>Rua Cancioneiro de Évora, 588<br/> Chácara Santo Antônio <br/> São Paulo - Sp - Brasil<br/> (11)3058-2333<br/> <a href="mailto:contato@seomarketing.com.br" class="whithe">contato@seomarketing.com.br</a></div>
  <div class="rodape_divisor"></div>
  <div id="rodape_boxb"><span class="rodape_header">Site</span><br/> <span class="rodape_menu"><a href="<?php echo $dominio;?>servicos/">O que fazemos</a></span><br/> <span class="rodape_menu"><a href="<?php echo $dominio;?>quem-somos/">A empresa</a></span><br/> 
   <!--<span class="rodape_menu"><a href="<?php echo $dominio;?>servicos/">Nossos Serviços</a></span><br/>--> 
   <span class="rodape_menu"><a href="<?php echo $dominio;?>seo/">Seo</a></span><br/> <span class="rodape_menu"><a href="<?php echo $dominio;?>links-patrocinados/">Adwords</a></span><br/> <a href="<?php echo $dominio;?>social-media/">Redes Sociais</a><br/> </div>
  <div class="rodape_divisor"></div>
  <div id="rodape_boxc"><span class="rodape_header">Atendimento Online</span><br/> <a rel="nofollow" onclick="lpButtonCTTUrl = 'http://server.iad.liveperson.net/hc/49683955/?cmd=file&amp;file=visitorWantsToChat&amp;site=49683955&amp;imageUrl=http://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/Portuguese/General/3a&amp;referrer='+escape(document.location); lpButtonCTTUrl = (typeof(lpAppendVisitorCookies) != 'undefined' ? lpAppendVisitorCookies(lpButtonCTTUrl) : lpButtonCTTUrl); window.open(lpButtonCTTUrl,'chat49683955','width=475,height=400,resizable=yes');return false;" target="chat49683955" href="http://server.iad.liveperson.net/hc/49683955/?cmd=file&amp;file=visitorWantsToChat&amp;site=49683955&amp;byhref=1&amp;imageUrl=http://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/Portuguese/General/3a" style="margin-left:40px;"><img border="0" name="hcIcon" alt="Liverperson" src="http://server.iad.liveperson.net/hc/49683955/?cmd=repstate&amp;site=49683955&amp;channel=web&amp;&amp;ver=1&amp;imageUrl=http://server.iad.liveperson.net/hcp/Gallery/ChatButton-Gallery/Portuguese/General/3a" alt="" /></a> </div>
  <div id="rodape_boxd"> <span class="rodape_header">Entre em contato<br/>com a SEO MARKETING</span>
   <div class="form-msg-rapida"></div>
   <form action="" id="contato_rapido">
    <div class="contato_rapido">
     <input type="text" name="contato_rapido_email" id="contato_rapido_email"  class="contato_rapido_input" value="E-MAIL:"  onblur="if (this.value == '') {this.value = 'E-MAIL:';}"
 onfocus="if (this.value == 'E-MAIL:') {this.value = '';}"/>
     <textarea name="contato_rapido_mensagen" id="contato_rapido_mensagem" class="contato_rapido_mensagem" rows="3" cols="4" onblur="if (this.value == '') {this.value = 'Mensagem';}"
 onfocus="if (this.value == 'Mensagem') {this.value = '';}">Mensagem</textarea>
     <input type="submit" value="enviar" class="contato_rapido_botao" />
    </div>
   </form>
   <script type="text/javascript">
	$(function(){
		$('#contato_rapido').submit(function(){
			if($('input[name="contato_rapido_email"]').val() == '' || $('input[name="contato_rapido_email"]').val() == null || $('input[name="contato_rapido_email"]').val() == 'E-MAIL:')
			{
				$('.form-msg-rapida').html('Por favor, preencha o campo <strong>E-mail</strong>.');
				$('input[name="contato_rapido_email"]').focus();
			}
			else
			{
				$.ajax({
					type:'post',
					url:'<?php echo $dominio;?>contato.envio.rapido.php',
					data:$('#contato_rapido').serialize(),
					beforeSend:function(){
						$('.form-msg-rapida').hide().html('Enviando e-mail. Entraremos em contato assim que possível.').fadeIn(400);
					},
					success:function(e){
						$('#form_rapido').fadeOut(400);
						$('.form-msg-rapida').hide().html('E-mail enviado com sucesso.').fadeIn(400);
					}
				});
			}
			return false;
		});
	});
	</script> 
  </div>
 </div>
</div>
<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script> 
<!-- Facebook async loading of JSAPI -->
<div id="fb-root"></div>
<script type="text/javascript">
    // Facebook async loading.
    (function() {
      var e = document.createElement('script'); e.async = true;
      e.src = document.location.protocol +
        '//connect.facebook.net/pt_BR/all.js';
      document.getElementById('fb-root').appendChild(e);
    }());

    window.fbAsyncInit = function() {
      FB.init({appId: '164838206912600', status: true, cookie: true,
               xfbml: true});

      //_ga.trackFacebook();
    };

  </script>
<div id="tw-root"></div>
<script type="text/javascript">
    (function(){
      var twitterWidgets = document.createElement('script');
      twitterWidgets.type = 'text/javascript';
      twitterWidgets.async = true;
      twitterWidgets.src = 'http://platform.twitter.com/widgets.js';

      // Setup a callback to track once the script loads.
     // twitterWidgets.onload = _ga.trackTwitter;

      document.getElementById('tw-root').appendChild(twitterWidgets);
    })();
  </script>