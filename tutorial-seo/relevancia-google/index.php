<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Conteúdo Relevante | Agência SEO Marketing</title>
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
			    <span itemprop="title">Conteúdo relevante</span>
			</div>
		</div>


    	<h1><small>Tutorial SEO</small>Conteúdo relevante</h1>
   	  <h2>O que você publica também propicia melhores posições nos resultados na busca por palavras-chave</h2>
        
        
        <h2>Quem aparece primeiro nos resultados?</h2>
   	  <p>Um cliente satisfeito é um usuário que retorna. Da mesma forma, um usuário do Google que encontra rapidamente o que procura é um usuário que tende a voltar ao mesmo lugar para fazer novas buscas. O Google procura oferecer aos usuários resultados mais <strong>relevantes</strong> à busca realizada. Quanto maior for a <strong>relevância</strong> da busca com os resultados exibidos, maior a probabilidade do resultado ser a resposta que eles procuram.</p>
        
   	  <h2>A relevância do ponto de vista do Google</h2>
        
   	  <p>O Google classifica os sites nos resultados de busca com base no seu algoritmo. Há 200 variáveis, aproximadamente, segundo fontes do Google, que são utilizadas no cálculo da relevância. A cada busca realizada por um internauta para uma determinada palavra-chave, o Google calcula quais os sites de seu índice a serem exibidos para aquela que foi determinada. Assim, ele apresenta quais os sites mais relevantes à pesquisa efetuada pelo usuário. Podemos citar como fatores importantes para definir a relevância de seu site para a busca de determinadas palavras-chave, os seguinte itens:</p>
        
   	  <h3>Fatores externos de relevância:</h3>
        
<ul>
    	  <li><strong>Quantidade de sites relacionados à palavra-chave contendo links para o seu site:</strong> Sites cujo principal tema é &quot;cachorros&quot; apontando para a sua página que fala de cachorros ajuda a melhorar o posicionamento dessa página para buscas relacionadas a cães</li>
    	  <li><strong>Qualidade e peso desses sites:</strong> Um link de um site importantíssimo de cães apontado para a sua página e cães conta muito mais do que uma grande quantidade de links e sites sem importância.</li>
    	  <li>Texto contido no link (anchor text)</li>
      </ul>
      
   	  <h3>Fatores internos de relevância:</h3>
        
<ul>
    	  <li>Quantidade de páginas falando da palavra-chave</li>
    	  <li>Pelo menos uma página focada nessa palavra-chave - título, texto, imagens...</li>
    	  <li>TITLE dessa página claro e direto mencionando a palavra-chave</li>
      </ul>
      
   	  <p>Com base nesses e outros fatores, o Google consegue definir a relevância de seu site em relação às palavras-chave buscadas por usuários.</p>
        
   	  <p>O Google aprimora constantemente o seu algoritmo, tornando-o cada vez menos vulnerável a técnicas manipuladoras. Para ter um bom posicionamento nos resultados, dê relevância às palavras-chave, pois isso fará com que seu site apareça bem ranqueado. Crie um site rico em conteúdo, que seja único, interessante e consiga links de sites relacionados ao seu tema.</p>
        
   	  <h2>PageRank ajuda na relevância?</h2>
        
    	<p>PageRank (veja nosso <a href="<?php echo $dominio;?>tutorial-seo/page-rank/">tutorial sobre PageRank</a>) é um indicador do peso de sites. Um site com um PageRank alto, não necessariamente aparecerá na frente de outro com PageRank baixo, se o Google não considerar que o primeiro seja mais relevante que o segundo para a palavra buscada pelo usuário. Assim, técnicas indiscriminadas de <a href="<?php echo $dominio;?>tutorial-seo/link-building/">Link Building</a> com o mero propósito de aumentar o PageRank deixaram de ter a importância que tinham alguns anos atrás.</p>
        
<a href="<?php echo $dominio;?>tutorial-seo/resultados-naturais-organicos/" class="tutorial_seo_prox_topico">
    <span class="prox_topico_peq">Próximo Tópico</span>
    <span class="prox_topico_grande">Resultados Naturais ou Orgânicos</span>
    </a>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
    
<div class="destaque_tut_seo">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_seo">
        <li>Fatores de relevância</li>
        <li>O que é conteúdo relevante para o Google</li>
    </ul>
</div>
    
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>


</div></div></body></html>