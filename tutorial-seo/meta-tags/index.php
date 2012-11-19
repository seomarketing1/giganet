<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Meta Tags SEO | Agência SEO Marketing</title>
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
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Meta Tags e sua importância para SEO</span> </div>
  </div>
  <h1><small>Tutorial SEO</small><br/>Meta Tags e sua importância para SEO</h1>
  <h2>Entenda como elas funcionam e saiba como melhorar a visibilidade do seu site</h2>
  <h2>O que são Meta Tags?</h2>
  <p>As <strong>Meta Tags</strong> são comandos implementados no código das páginas web para passar instruções ao Google e demais sites de busca. É possível dizer aos <a href="<?php echo $dominio;?>tutorial-seo/google-robots/">robôs</a> quais páginas devem ou não ser indexadas, qual a descrição da página a ser exibida nos snippets dos resultados ou simplesmente informar qual a pessoa responsável pelo desenvolvimento da página. Na verdade, é possível criar qualquer tipo de Meta Tag a caráter de documentação, que simplesmente serão ignorados pelos robôs.</p>
  <h2>Como visualizar os Meta Tags</h2>
  <p>As Meta Tags ficam &quot;escondidas&quot; aos olhos quando visualizamos as páginas em nossos browsers. O jeito mais fácil de visualizá-las é pela exibição do código fonte da página. Elas se encontram na área inicial do código da página, dentro da seção &lt;head&gt;.</p>
  <p>Verifique nossa página do tutorial sobre <a href="<?php echo $dominio;?>tutorial-seo/ferramentas-seo/">Ferramentas SEO</a> e escolha aquela que permite a visualização mais fácil das Meta Tags de sites.</p>
  <p>Eis algumas Meta Tags mais utilizadas em otimização de sites:</p>
  <ul>
   <li>meta name=&quot;description&quot;</li>
   <li>meta name=&quot;keywords&quot;</li>
   <li>meta name=&quot;robots&quot;</li>
  </ul>
  <h2>Meta Tags mais importantes para SEOs</h2>
  <p>As Meta Tags devem ser criadas individualmente para cada página, pois permitem que os sites de busca identifiquem claramente qual o assunto dela. Por exemplo: a meta tag="description" é geralmente exibida nos resultados do Google nas 2 linhas de descrição logo abaixo da url da página.</p>
  <h3>Title</h3>
  <p>O campo Title não é uma Meta Tag, mas é o mais importante comando em uma página web. Crie um conteúdo que descreva de forma sucinta o conteúdo da página e utilize, de preferência no começo da frase, a palavra-chave mais importante dela.</p>
  <p><strong>Exemplo:</strong> &lt;title&gt;Climatempo - Previsão do Tempo | Meteorologia e Notícias em Tempo Real&lt;/title&gt;</p>
  <h3>Meta Description (meta name="description")</h3>
  <p>É a Meta Description que define a descrição exibida no snippet do Google. Ela não ajuda no posicionamento do site. Por isso, não é necessário colocar aqui todas as palavras-chave. Descreva o conteúdo da página de uma forma que as pessoas tenham vontade de clicar nela, para aumentar a visitação do seu site.</p>
  <p><strong>Exemplo:</strong> &lt;meta name=&quot;description&quot; content=&quot;Climatempo - A melhor previsão do tempo para o Brasil.&quot;/&gt;</p>
  <h3>Meta Keywords (meta name="keywords")</h3>
  <p>Há muitos anos atrás, os robots dos sites de busca tinham enorme dificuldade em interpretar a relevância de sites para determinadas palavras-chave e utilizavam o conteúdo dessa Meta Tag para ajudá-los a entender o conteúdo das páginas. Rapidamente, os webmasters perceberam que bastava incluir uma infinidade de palavras na tag para aparecer nas buscas, até aquelas que não tinham nada a ver com o conteúdo do site. Por isso, hoje, praticamente nenhum site de busca utiliza a meta keywords como fator de ranqueamento.</p>
  <p><strong>Exemplo:</strong> &lt;meta name=&quot;keywords&quot; content=&quot;climática, previsão climática,desenvolvimento, tempo, clima,&quot;/&gt;</p>
  <h3>Meta Robots (meta name="robots")</h3>
  <p>Essa Meta Tag foi criada para passar orientações aos robots. A sintaxe mais comum é:</p>
  <p><strong>&lt;meta name=&quot;robots&quot; content=&quot;index, follow&quot;&gt;</strong></p>
  <p>Existem diversos parâmetros que podem ser passados aos robôs:</p>
  <ul>
   <li><strong>index</strong>: indexe esta página - exiba-a em seus resultados de busca;</li>
   <li><strong>noindex</strong>: não indexe esta página - não a exiba nos resultados de busca. Útil para páginas de login, intranet;</li>
   <li><strong>follow</strong>: siga os links desta pagina para descobrir novas páginas (reveja <a href="http://seomarketing.com.br/googlebot.html">Googlebot, robots</a>);</li>
   <li><strong>nofollow</strong>: nenhum dos links desta página deve ser seguido;</li>
   <li><strong>nosnippet:</strong> não mostre a descrição da página nos resultados de busca;</li>
   <li><strong>noodp</strong>: orienta o Google não utilizar a descrição do DMOZ em seus resultados (snippet);</li>
   <li><strong>noarchive:</strong> não mostre o link para o cache desta página;</li>
   <li><strong>noimageindex:</strong> não indexe nehuma imagem que estiver nesta página.</li>
  </ul>
  <h2>Leitura recomendada</h2>
  <p><a href="http://www.google.com/support/webmasters/bin/answer.py?answer=79812">http://www.google.com/support/webmasters/bin/answer.py?answer=79812</a></p>
  <a href="<?php echo $dominio;?>tutorial-seo/page-rank" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Próximo Tópico</span> <span class="prox_topico_grande">O que é o Page Rank</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_seo_secundario">
  <div class="destaque_tut_seo">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_seo">
    <li>Exemplos de Meta Tags</li>
    <li>Funcionalidade das Meta Tags</li>
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