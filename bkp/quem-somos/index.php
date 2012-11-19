<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Quem somos | Agência SEO Marketing</title>
<?php include("../includes/header.php"); ?>
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
include("../includes/menu.php");
?>
</head><div id="quemsomos_content">
    <div class="quemsomos_principal">
    <h1>Quem Somos</h1>
    <img src="<?php echo $dominio;?>imagens/empresa.jpg" alt="" />
    <p>A SEO marketing é um empresa de consultoria 100% focada em marketing para sites de busca como o Google. Ajudamos empresas e prestadores de serviços a utilizarem os mecanismos de busca como uma poderosa ferramenta de vendas. Nossa missão é aumentar a quantidade de oportunidades de negócio geradas através da internet.
</p>
<p>O trabalho começa na geração de tráfego para o seu site através de campanhas de links patrocinados especificamente focadas no seu negócio e da otimização do site para o Google, melhorando o seu posicionamento nos resultados não pagos. O passo final é a otimização de todo o processo de navegação dos visitantes de seu site até o momento em que uma meta é atingida. O resultado é um aumento significativo de visitas qualificadas, e uma maior conversão de visitantes em clientes.</p>
<p><strong>SEO Marketing, a peça que faltava na sua estratégia de internet!</strong></p> 
<h2>POR QUE CONTRATAR<br/>A SEO MARKETING?</h2>
<ul>
	<li><span>Somos 100% focados em marketing para sites de busca, como o Google;</span></li>
	<li><span> Experiência em lidar com empresas de todos os portes, nacionais ou      multinacionais;</span></li>
	<li><span> Combinamos serviços de links patrocinados com otimização de sites (SEO), para maximizar o retorno de seu investimento;</span></li>
	<li><span> Parceria com o Google, Yahoo e UOL;</span></li>
	<li><span> Oferecemos à sua empresa treinamento, ferramentas e conhecimento necessários para continuar um trabalho eficiente de SEO e links patrocinados;</span></li>
	<li><span> Além de gerar tráfego ao seu site, usamos nossos experiência e técnicas do instituto americano Marketing Experiments para converter mais visitantes em vendas;</span></li>
	<li><span> Você receberá regularmente nosso newsletter com o que há de novo no mundo dos buscadores;</span></li>
	<li><span> Desenvolvemos ferramentas especificamente para suas campanhas de links patrocinados.</span></li>
</ul>
<h2>Diretores da SEO MARKETING</h2>
<div class="diretor">
    <div class="diretor_image">
    	<img src="<?php echo $dominio;?>imagens/schultze.jpg" alt="Benhard Schultze" />
    </div>
    <div class="diretor_texto">
       <h3>Benhard Schultze</h3>
        <p>Formado em Ciências da Computação pela PUC-SP e pós-graduado em Marketing pela ESPM-SP, Bernhard Schultze atua há 15 anos em áreas relacionadas a tecnologia.</p>
        <p>Schultze começou sua carreira na Eden, uma das empresas pioneiras de redes locais no Brasil, tendo depois passado pela Cabletron, Nortel e Intel, onde desempenhou importante papel nas áreas de pré e pós-vendas, marketing e gerência de produtos.</p>
        <span class="destaque">Em 2006 fundou a SEO Marketing, uma das agências de marketing de busca pioneiras no Brasil com centenas de clientes já atendidos.</span>
    </div>
</div>
<div class="diretor">
    <div class="diretor_image">
    <img src="<?php echo $dominio;?>imagens/dani.jpg" alt="Daniela Raketis" />
    </div>
    <div class="diretor_texto">
    <h3>Daniela Fávero</h3>
    <p>Atual diretora da SEO Marketing, Daniela Fávero é formada em Comunicação Social com habilitação em Publicidade e Propaganda pela PUC-SP.</p><p>Sua trajetória profissional teve início na própria agência, em maio de 2008, como analista de AdWords. Após um curto período nesta área, passou por três novas funções: Gerente de TOP Accounts, Social Media Manager e Gerente de Grandes Projetos.</p>
<p>Em dezembro de 2011, assumiu o posto de primeira sócia da SEO Marketing, tornando-se gestora de Grandes Projetos e responsável pela integração dos diversos serviços oferecidos aos clientes. Algumas das empresas atendidas diretamente por  ela são: Hospital Infantil Sabará, Banco Cruzeiro do Sul/Star Cash VTM, Livraria Cultura e Pagamento Digital.</p>
    <span class="destaque">Daniela Fávero é uma profissional extremamente focada em resultados, conhecendo o mundo das mídias sociais, ou Social Media, como poucos. </span>
    </div>
</div>
<h2>NOSSOS SERVIÇOS	</h2>
<ul>
	<li><a href="<?php echo $dominio;?>links-patrocinados/" class="destaque"> Links Patrocinados</a>: <span>Criação e administração de anúncios.</span></li>
	<li><a href="<?php echo $dominio;?>seo/" class="destaque"> SEO - Otimização</a>: <span>Apareça em destaque nos sites de buscas.</span></li>
	<li><a href="<?php echo $dominio;?>social-media/" class="destaque"> Midias Sociais</a>: <span>A mensagem certa para quem chega ao seu site.</span></li>
	<li><a href="<?php echo $dominio;?>web-analytics/" class="destaque"> Consultoria Analytics</a>: <span>Conheça o seu site a fundo e aumente suas vendas.</span></li>
</ul>
    </div>

<?php
include("../includes/lateral_qs.php");
include("../includes/rodape.php");
?>


</div></body></html>