<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Certificados | Agência SEO Marketing</title>
<?php include("../../includes/header.php"); ?>
<script src="<?php echo $dominio;?>js/simplegallery.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

var mygallery=new simpleGallery({
wrapperid: "equipe", //ID of main gallery container,
dimensions: [320, 180], //width/height of gallery in pixels. Should reflect dimensions of the images exactly
imagearray: [
["<?php echo $dominio;?>imagens/equipe-seo-marketing_pq.jpg", "<?php echo $dominio;?>imagens/equipe-seo-marketing.jpg", "_new", ""],
["<?php echo $dominio;?>imagens/equipe-seo-marketing-3_pq.jpg", "<?php echo $dominio;?>imagens/equipe-seo-marketing-3.jpg", "_new", ""],
["<?php echo $dominio;?>imagens/equipe-seo-marketing-2_pq.jpg", "<?php echo $dominio;?>imagens/equipe-seo-marketing-2.jpg", "_new", ""]
],
autoplay: [true, 2500, 2], //[auto_play_boolean, delay_btw_slide_millisec, cycles_before_stopping_int]
persist: false, //remember last viewed slide and recall within same session?
fadeduration: 500, //transition duration (milliseconds)
oninit:function(){ //event that fires when gallery has initialized/ ready to run
//Keyword "this": references current gallery instance (ie: try this.navigate("play/pause"))
},
onslide:function(curslide, i){ //event that fires after each slide is shown
//Keyword "this": references current gallery instance
//curslide: returns DOM reference to current slide's DIV (ie: try alert(curslide.innerHTML)
//i: integer reflecting current image within collection being shown (0=1st image, 1=2nd etc)
}
})

</script>
<?php
include("../../includes/menu.php");
?>
<div id="quemsomos_content">
<div class="quemsomos_principal">
 <h1>Certificados da Agência SEO Marketing</h1>
 <div class="certificado">
  <div class="img_certificado"><img src="<?php echo $dominio;?>imagens/adwords_certified_partner-125.gif" /></div>
  <div class="txt_certificado">
   <h2>GAP - Adwords Certified Partner</h2>
   <p>A SEO Marketing atendeu aos requisitos do Google para obter reconhecimento como um Adwords Certified Partner, a nova certificação Google Adwords lançada em 2010.</p>
   <p>Para tornar-se qualificado, vários indivíduos da SEO Marketing atenderam os seguintes requisitos:</p>
   <ul>
    <li>Ter gerenciado um gasto de pelo menos US$ 10.000 nos últimos 90 dias</li>
    <li>Ter pelo menos um funcionário individualmente qualificado</li>
    <li>Concordar com os Termos e Condições</li>
   </ul>
   <p><a href="#">Confira a Qualificação no site do Google »</a></p>
  </div>
 </div>
 <div class="certificado">
  <div class="img_certificado"><img src="<?php echo $dominio;?>imagens/GAP-Qualified-company.jpg" /></div>
  <div class="txt_certificado">
   <h2>GAP - Adwords Qualified Company</h2>
   <p>A SEO Marketing atendeu aos requisitos do Google para obter reconhecimento como um Google Advertising Professional qualificado.</p>
   <p>Para tornar-se qualificado, vários indivíduos da SEO Marketing:</p>
   <ul>
    <li>Aceitaram os termos do nosso programa.</li>
    <li>Gerenciaram no mínimo uma conta do AdWords em uma conta principal por 90 dias.</li>
    <li>Criaram e mantiveram o requisito de gasto em 90 dias.</li>
    <li>Passaram no exame do Google Advertising Professional.</li>
   </ul>
   <p>Além disso, a empresa deve ter gerenciado um mínimo de US$ 50.000 num período de 3 meses.</p>
   <p><a href="#">Confira a Qualificação no site do Google »</a></p>
  </div>
 </div>
 <div class="certificado">
  <div class="img_certificado"><img src="<?php echo $dominio;?>imagens/GAP-Qualified-individual.jpg" /></div>
  <div class="txt_certificado">
   <h2>GAP - Adwords Qualified Individual</h2>
   <p>A SEO Marketing atendeu aos requisitos do Google para obter reconhecimento como um Google Advertising Professional qualificado.</p>
   <p>Para tornar-se qualificado, vários indivíduos da SEO Marketing:</p>
   <ul>
    <li>Aceitaram os termos do nosso programa.</li>
    <li>Gerenciaram no mínimo uma conta do AdWords em uma conta principal por 90 dias.</li>
    <li>Criaram e mantiveram o requisito de gasto em 90 dias.</li>
    <li>Passaram no exame do Google Advertising Professional.</li>
   </ul>
   <p><a href="#">Confira a Qualificação no site do Google »</a></p>
  </div>
 </div>
 <div class="certificado">
  <div class="img_certificado"><img src="<?php echo $dominio;?>imagens/GAIQ.png" /></div>
  <div class="txt_certificado">
   <h2>GAIQ - Google Analytics Qualified</h2>
   <p>Para tirar o GAIQ basta o profissional interessado fazer uma prova de 70 questões e acertar, no mínimo, 75% delas.</p>
   <p><a href="#">Confira a Qualificação no site do Google »</a></p>
  </div>
 </div>
 <div class="certificado">
  <div class="img_certificado"><img src="<?php echo $dominio;?>imagens/certificacao-marketing-experiments.jpg" /></div>
  <div class="txt_certificado">
   <h2>Landing Page Optimization Certified</h2>
   <p><a href="#">Confira a Qualificação no site do Marketing Experiments »</a></p>
  </div>
 </div>
 <div class="certificado">
  <div class="img_certificado"><img src="<?php echo $dominio;?>imagens/SEMPO-SEO-Marketing.gif" /></div>
  <div class="txt_certificado">
   <h2>SEMPO - Search Engine Mkt. Prof. Organization</h2>
   <p>O SEMPO é o principal orgão mundial de marketing de Busca.</p>
   <p><a href="#">Confira os detalhes da nossa participação no SEMPO »</a></p>
  </div>
 </div>
 <div class="certificado">
  <div class="img_certificado"><img src="<?php echo $dominio;?>imagens/apadi.png" /></div>
  <div class="txt_certificado">
   <h2>APADI - Associação Paulista de Agências Digitais</h2>
   <p>A SEO Marketing associou-se em 2010 à APADI, entidade que representa as agências Digitais do Estado de São Paulo.</p>
   <p><a href="#">Confira mais detalhes de nossa participação na APADI »</a></p>
  </div>
 </div>
 <h2>NOSSOS SERVIÇOS </h2>
 <ul>
  <li><a href="<?php echo $dominio;?>links-patrocinados/" class="destaque"> Links Patrocinados</a>: <span>Criação e administração de anúncios.</span></li>
  <li><a href="<?php echo $dominio;?>seo/" class="destaque"> SEO - Otimização</a>: <span>Apareça em destaque nos sites de buscas.</span></li>
  <li><a href="<?php echo $dominio;?>social-media/" class="destaque"> Midias Sociais</a>: <span>A mensagem certa para quem chega ao seu site.</span></li>
  <li><a href="<?php echo $dominio;?>web-analytics/" class="destaque"> Consultoria Analytics</a>: <span>Conheça o seu site a fundo e aumente suas vendas.</span></li>
 </ul>
</div>
<?php
include("../../includes/lateral_qs.php");
include("../../includes/rodape.php");
?>
</body>
</body>
</html>