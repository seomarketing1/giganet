<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Como criar um Sitemap.xml | Agência SEO Marketing</title>
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
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Sitemap e o arquivo sitemap.xml</span> </div>
  </div>
  <h1><small>Tutorial SEO</small><br/>Sitemap e o arquivo sitemap.xml</h1>
  <h2>Saiba como criar um arquivo sitemap.xml sem segredos</h2>
  <h2>Introdução ao sitemap.xml</h2>
  <p>Os mecanismos de busca fazem um bom trabalho com seus robôs em varrer o conteúdo da internet. Mesmo assim, oferecem a webmasters a possibilidade de informarem quais as páginas existentes em seus sites, diminuindo a possibilidade dos robôs do Google e Yahoo &quot;esquecerem&quot; de indexar determinadas páginas. Isto é feito através de um arquivo XML, geralmente chamado de <strong>SITEMAP.XML</strong>. O arquivo pode ser criado manualmente ou através de programas como o <a href="http://johannesmueller.com/gs" rel="nofollow">GsiteCrawler</a> e ferramentas online, como a disponibilizada em <a href="http://www.xml-sitemaps.com/" rel="nofollow">www.xml-sitemaps.com</a>. Uma vez gerado o arquivo, este deve ser colocado no diretório principal do site. Em seguida, deve ser informado ao mecanismo a localização do arquivo. No caso do Google, isso é feito através de sua <a href="http://www.google.com.br/webmasters/">interface para webmasters</a>.</p>
  <p>No antigo modelo para submissão de <strong>Sitemap</strong> do Google, executar essa tarefa era uma perda de tempo, pois o Google localizava links e descobria novas páginas por contra própria, sem levar em consideração os links existentes no arquivo sitemap submetido. O novo protocolo disponibiliza grandes recursos para um maior controle do robô do Google.</p>
  <h2>Vantagens do novo modelo</h2>
  <p>As vantagens do novo padrão são resultados de pesquisa mais atualizados e rastreamento mais eficiente, pois você passa a fornecer informações específicas sobre todos os detalhes das páginas de seu site, como frequência de atualização e relevância de determinada URL.</p>
  <p>O novo modelo de sitemap faz com que, informar ao Google sobre páginas novas ou atualizadas, seja tão simples quanto entregar uma lista completa e formatada diretamente para um representante deles. Você ainda tem a possibilidade de priorizar as páginas com a especificação conhecida como hint.</p>
  <h2>Utilizando os recursos</h2>
  <p>Para explorar todas as novas funcionalidades, o arquivo deve ser criado no formato XML, embora exista também o formato TXT. O arquivo TXT será uma simples lista de URLs. O sitemap baseado em XML, por outro lado, permite que além de submeter as URLs, seja informada a prioridade de cada página, frequência de atualização e última modificação executada.</p>
  <p>Para usar os recursos do novo modelo de Sitemap, siga as regras do formato XML e adicione as tags específicas:</p>
  <ul>
   <li><strong>&lt;xml&gt;</strong> segue as especificações requeridas para submissão no Google;</li>
   <li><strong>&lt;urlset&gt;</strong> indica o início e fim do conjunto de URLs a serem rastreadas;</li>
   <li><strong>&lt;url&gt;</strong> indica o início e fim de uma URL individual;</li>
   <li><strong>&lt;loc&gt;</strong> onde será inserida a URL completa da página;</li>
   <li><strong>&lt;lastmod&gt;</strong>, uma tag opcional com a data da última modificação;</li>
   <li><strong>&lt;changefreq&gt;</strong>, uma tag opcional com a freqüência que o robô deve executar o rastreamento;</li>
   <li><strong>&lt;priority&gt;</strong>, uma tag opcional com a relação prioritária da URL especificada em relação às demais contidas no arquivo.</li>
  </ul>
  <h2>Exemplos</h2>
  <p>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot; ?&gt;<br /> &lt;urlset xmlns=&quot;http://www.sitemaps.org/schemas/sitemap/0.9&quot;&gt;<br /> &lt;url&gt;<br /> &lt;loc&gt;http://www.seomarketing.com.br/&lt;/loc&gt;<br /> &lt;changefreq&gt;weekly&lt;/changefreq&gt;<br /> &lt;priority&gt;0.9&lt;/priority&gt;<br /> &lt;/url&gt;<br /> &lt;/urlset&gt;</p>
  <p>Quer um exemplo real? Veja <a href="http://www.google.com.br/sitemap.xml">aqui</a> o sitemap do Google</p>
  <p>Tome cuidado ao carregar o sitemap original do Google - por ter mais de 4MB, pode travar o seu navegador. Use um editor XML para visualizar corretamente as tags XML ou mesmo o Wordpad do Windows.</p>
  <a href="<?php echo $dominio;?>tutorial-seo/ferramentas-seo" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Próximo Tópico</span> <span class="prox_topico_grande">Ferramentas SEO</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_seo_secundario">
  <div class="destaque_tut_seo">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_seo">
    <li>Introdução do Sitemap.xml</li>
    <li>Utilizando o sitemap</li>
    <li>Exemplos de Sitemap.xml</li>
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