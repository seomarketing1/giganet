<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Como o Google exibe os resultados | Agência SEO Marketing</title>
<meta name="description" content="" />
<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
</head>
<div id="tutorial_seo_content">
 <div class="tutorial_seo_principal">
  <?php
include("../../includes/tutorial/menu_tutorial_seo.php");
?>
  <div class="breadcrumb">
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>" itemprop="url"> <span itemprop="title">Página Inicial</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>tutorial/" itemprop="url"> <span itemprop="title">Tutorial</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>tutorial-seo/" itemprop="url"> <span itemprop="title">Tutorial SEO</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Como o Google exibe seus resultados?</span> </div>
  </div>
  <h1><small>Tutorial SEO</small><br/>Como o Google exibe seus resultados?</h1>
  <h2>Entenda como o gigante das buscas exibe seus resultados</h2>
  <p>Já pensou como os sites de busca conseguem (na maioria das vezes) mostrar com rapidez e eficiência o que você procura? Parece que leem o nosso pensamento. Aqui no nosso <strong>tutorial SEO</strong>, mostraremos o que acontece "nos bastidores", quando são digitadas palavras-chave nesses sistemas. Os principais sites de busca do mercado são o <strong>Google</strong>, <strong>Yahoo</strong> e <strong>Bing</strong>. Por ser o mecanismo de busca mais utilizado, esse tutorial é baseado no Google.</p>
  <p>Aprenda como ele funciona e adquira dicas valiosas para posicionar melhor o seu site na busca. Caso queira aprender sobre o Google Adwords ou Google Analytics, navegue pelo menu superior horizontal. Boa diversão!</p>
  <h2>Site de busca, motor de busca, buscador...</h2>
  <img src="<?php echo $dominio;?>/imagens/tutorial-seo/serp-do-google.jpg" alt="serp do google" title="Página de resultados do Google (SERP)" />
  <p><em>Figura 1: Tela de resultados do Google (SERP)</em></p>
  <p>Imagine como seria a internet sem o Google, Yahoo, Bing ou outros sites similares. Chamados de <strong>sites de busca</strong>, <strong>mecanismos de busca</strong>, <strong>sistemas de busca</strong>, <strong>motores de busca</strong>, <strong>buscadores</strong> ou <strong>mecanismos de pesquisa</strong>, trata-se de ferramentas online que auxiliam usuários a buscar informações na internet. Ao contrário de diretórios controlados por editores humanos, sendo o <a href="http://www.dmoz.org/" target="_blank">DMOZ</a> o mais importante, os principais sites de busca utilizam-se de algoritmos próprios para indexar à informação e disponibilizá-la aos usuários.</p>
  <h2>Página dos resultados de busca (SERP)</h2>
  <p>Para pesquisar algum assunto na internet, o usuário deve digitar o termo procurado no campo de busca apropriado. Quanto mais específico for o termo digitado, maior a possibilidade de se achar o que se quer. Procurar por "Paraquedismo" pode trazer empresas de paraquedismo
   ou paraquedistas do mundo todo. Procurar por "<a href="http://www.paraquedismoskycompany.com.br/" target="_blank">Salto de paraquedas em Boituva</a>" exibirá ao usuário uma relação de empresas que realizam esse tipo de serviço no local indicado. Quanto mais termos forem digitados na busca, maior a possibilidade de se encontrar exatamente o que se procura.</p>
  <p>A cada conjunto de palavras-chave digitado, o Google realiza uma busca em seu índice e oferece uma relação de resultados (Figura 1) divididos em resultados orgânicos (1) e links patrocinados (2). A tela de resultados (Figura 1) é comumente chamada pela comunidade SEO de <strong>SERP (Search Engine Results Page)</strong>, que pode ser traduzida para o português como <strong>página de resultado do mecanismo de busca</strong>.</p>
  <h2>Índice do Google (Google Index)</h2>
  <p>Seria muito lento se, a cada vez que uma busca fosse realizada nos sites de busca, estes tivessem de:</p>
  <ul>
   <li>Procurar na internet todas as páginas relacionadas ao ser termo buscado</li>
   <li>Classificá-las por relevância</li>
   <li>Disponibilizá-las na sua tela</li>
  </ul>
  <p>Para conseguir exibir a resposta em décimos de segundo, os sites de busca varrem a internet por meio de "robôs" - o do Google é chamado de <a href="<?php echo $dominio;?>tutorial-seo/google-robots/">Googlebot</a>, armazenam em seus servidores as páginas que consideram relevantes e geram arquivos de meta-dados com informações sobre as páginas rastreadas. O <strong>índice do Google</strong>, do inglês Google Index, é exatamente essa "cópia da internet" feita pelo Google em seus servidores e indexada de forma organizada. Duplicada inúmeras vezes entre seus diversos datacenters, permite calcular o posicionamento e exibir resultados para buscas em frações de segundos.</p>
  <img src="<?php echo $dominio;?>/imagens/tutorial-seo/serp-tempo.jpg" alt="tempo de resposta de uma busca" title="Tempo de resposta de uma busca" />
  <p><em>Figura 2: Tempo de resposta de uma busca</em></p>
  <p>O resultado exibido pelo Google, então, é baseado em dados armazenados em seus servidores, e não no que de fato está na internet naquele momento. É possível que o conteúdo exibido nos resultados do Google seja diferente do que se encontra atualmente no site, pois esse conteúdo pode ter sido alterado ou mesmo removido. Para diminuir esse problema, os sites de busca constantemente aprimoram os seus algoritmos e atualizam o seu índice com uma frequência cada vez maior.</p>
  <p>Para checar a informação armazenada nos servidores o Google, clique em EM CACHE na tela de resultados do Google.</p>
  <img src="<?php echo $dominio;?>/imagens/tutorial-seo/serp-bug.jpg" alt="serp do google" title="Página de resultados do Google (SERP)" />
  <p><strong>Figura 3: Como verificar a informação armazenada no índice do Google</strong></p>
  <p>Indo até a seção <a href="<?php echo $dominio;?>tutorial-seo/cache-google/">Cache Google</a>, você obterá mais informações sobre o cache em sites de busca.</p>
  <p>Resumindo, o <strong>índice de sites de busca</strong> representa conteúdo da internet armazenado em seus servidores e indexado de forma a oferecer respostas precisas e extremamente velozes às consultas realizadas.</p>
  <a href="<?php echo $dominio;?>tutorial-seo/importancia-titulos-seo/" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Próximo Tópico</span> <span class="prox_topico_grande">A Importância dos Títulos para SEO</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_seo_secundario">
  <div class="destaque_tut_seo">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_seo">
    <li>Página dos resultados de busca</li>
    <li>Índice do Google</li>
   </ul>
  </div>
  <?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>
 </div>
</div>
</body></html>