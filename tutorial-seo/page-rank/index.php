<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>PageRank | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
</head><div id="tutorial_seo_content">
    <div class="tutorial_seo_principal">
    	<?php
include("../../includes/tutorial/menu_tutorial_seo.php");
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
			  <a href="<?php echo $dominio;?>tutorial-seo/" itemprop="url">
			    <span itemprop="title">Tutorial SEO</span>
			  </a> ›
			</div>
			<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			    <span itemprop="title">PageRank</span>
			</div>
		</div>

      <h1><small>Tutorial SEO</small><br/>PageRank</h1>
   	  <h2>O algoritmo que permite a classificação por relevância das páginas do seu site</h2>
        
   	  <p>Desenvolvido inicialmente por Larry Page com a posterior colaboração de Sergey Brin, fundadores do Google, o <strong>PageRank</strong> (representado por PR) foi a base para o surgimento do algoritmo do Google. Esse nome faz uma alusão ao criador (Larry Page) e ao fato de ser uma nota dada pelo Google às páginas indexadas em seus servidores. PR é uma das centenas de variáveis utilizadas pelo Google para definir quem aparece primeiro nos <a href="<?php echo $dominio;?>tutorial-seo/resultados-naturais-organicos/">resultados naturais</a>.</p>
        
   	  <p>O PageRank de um site varia de 0 a 10. Poucos sites possuem PR=10, como o <a href="http://www.google.com.br/" target="_blank">Google</a> e a <a href="http://www.whitehouse.gov/" target="_blank">Casa Branca</a>. No Brasil, para se ter um exemplo, a página inicial do UOL e do Terra alternam entre PR=6 e PR=8. Quanto mais alto for o PageRank, maior a possibilidade de um site aparecer bem posicionado na tela de resultados do Google.</p>
        
   	  <p>O PageRank foi a grande sacada do Google para se tornar o site de busca preferido pela esmagadora maioria dos internautas. Inicialmente, os sites de busca se baseavam no seu algoritmo, principalmente, em elementos do próprio site. As Meta Tags e a densidade de uma determinada palavra na página e no site eram os fatores mais importantes para determinar o posicionamento do site. Esses elementos eram, porém, facilmente manipulados por webmasters que buscavam melhorar o posicionamento de seus sites no Google.</p>
        
        <p>O Google criou então o PageRank, um mecanismo de "votos". Cada link de uma página apontada para outra é considerada um "voto", uma recomendação daquela página à página para onde o link se direciona. Quanto mais importante, isto é, quanto mais alto for o PageRank da página de onde sai o link, mais importante é o "voto" dado à página de destino.</p>
        
   	  <p>Uma página que daremos o nome de <strong>A</strong>, que recebe vários links apontados para ela de outras páginas do próprio site ou de sites externos, acumula parte do PageRank oriundo dessas páginas. Com isso, essa página se torna mais importante a cada novo link recebido, pois o PageRank dos links que apontam para ela é somado. Quanto maior o PageRank de uma página, maior a quantidade de PageRank passado para as páginas para as quais ela aponta. Tente conseguir um link da página inicial de um grande portal e você verá o que acontecerá com o posicionamento de seu site.</p>
        
   	  <p>Por consequência, as páginas para as quais nossa página <strong>A</strong> apontar, internas ou para outros sites, receberão mais PageRank e, com isso, se tornarão mais "importantes" para o Google.
</p>
        
   	  <p>Vale notar que a quantidade de PageRank que uma página pode passar é dividida pelo total de links que saem da página (que apontam para outras páginas). Se a página <strong>A</strong> tiver 100 links que apontam para outras páginas internas e de outros sites, cada página de destino desses links receberá apenas 1/100 do total de PageRank que a página <strong>A</strong> pode passar. Faça essa análise ao escolher sites para posicionar links para seu site.</p>
        
   	  <h2>Como visualizar o PageRank</h2>
        
   	  <p>Existem diversas ferramentas para se visualizar o PageRank. A mais comum, que a maior parte das pessoas inclusive já têm instalado, é o <a href="http://toolbar.google.com/">Google Toolbar</a>.</p>
        
    	<img src="<?php echo $dominio;?>imagens/tutorial-seo/pagerank-toolbar-2.jpg" alt="pagerank toolbar" />
        
   	  <p>Alguns sites permitem visualizar o PageRank diretamente entrando-se a URL da página, como o do <a href="http://www.iwebtool.com/pagerank_checker">iwebtool</a>.</p>
        
   	  <p>É importante notar que o PageRank exibido por estas ferramentas é atualizado poucas vezes ao ano. Por isso, o PageRank que você vê não necessariamente reflete o PageRank atual daquela página. Algumas sites possuem ferramentas que procuram prever qual o PageRank atual da página, <a href="http://www.pagerankprediction.com/">com esta</a>. Essas estimativas são porém longe de ser confiáveis.</p>
        
   	  <h2>Toolbar PageRank x Real PageRank</h2>
        
    	<p>Apesar de só atualizar o <strong>PageRank visível</strong> poucas vezes ao ano, o Google calcula constantemente o PageRank de uma página para efeito de posicionamento. Por isso, o PageRank visível (chamado também de <em>Toolbar PageRank</em>) não deve ser levado muito a sério. Se o seu site deu um pulo no posicionamento com as principais palavras-chave, provavelmente, você ganhou links importantes de sites com um PR alto, mas não necessariamente esse salto de PageRank aparece no Toolbar PageRank de seu site.</p>
        
   	  <p>O <em>Toolbar PageRank</em> varia de 0 a 10 e é apenas uma representação do PageRank real. O gráfico abaixo, dá um exemplo de como poderia ser o PageRank real. É importante notar que, quanto mais alto for o <em>Toolbar PageRank</em>, mais difícil será alcançar o próximo valor. Pular de PageRank 1 para 2 é muito mais fácil do que pular de PageRank 5 para 6.</p>
        
   	  <p align="center"><img src="<?php echo $dominio;?>imagens/tutorial-seo/pagerank-escala.jpg" alt="escala pagerank" /></p>
        
<a href="<?php echo $dominio;?>tutorial-seo/google-robots" class="tutorial_seo_prox_topico">
    <span class="prox_topico_peq">Próximo Tópico</span>
    <span class="prox_topico_grande">Google Robots</span>
    </a>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
    
<div class="destaque_tut_seo">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_seo">
        <li>Como funciona o PageRank</li>
        <li>Como saber o PageRank do meu site?</li>
    </ul>
</div>
    
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>


</div></div></body></html>