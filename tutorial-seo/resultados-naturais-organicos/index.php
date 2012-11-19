<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Resultados Naturais ou Orgânicos | Agência SEO Marketing</title>
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
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Resultados Naturais ou Orgânicos</span> </div>
  </div>
  <h1><small>Tutorial SEO</small><br/>Resultados Naturais ou Orgânicos</h1>
  <h2>Entenda como um site pode aparecer nos resultados de busca do Google</h2>
  <p align="center"><img src="<?php echo $dominio;?>imagens/tutorial-seo/resultados-organicos.jpg" alt="SERP" /></p>
  <p>A área central da tela de resultados do Google mostra os resultados naturais, também conhecidos como resultados orgânicos, relacionados à palavra-chave digitada pelo usuário. O Google mostra 10 resultados naturais a cada busca efetuada (este número pode ser alterado nas opções de preferência de pesquisa).</p>
  <p>No final da página, é possível continuar à procura de mais resultados, até atingir o número estimado de resultados para aquele termo. Vale lembrar que 75% dos usuários não passam da primeira página e essa tendência tende a se acentuar à medida que o Google aprimore seus algoritmos.</p>
  <h2>Quem aparece nos resultados</h2>
  <p>A cada conjunto de palavras-chave digitado no Google, ele pesquisa em seu <a href="<?php echo $dominio;?>tutorial-seo/">índice</a> as páginas de sites relacionadas ao termo informado. Por meio de um algoritmo que envolve aproximadamente 200 variáveis, disponibiliza-se em uma fração de segundos os resultados classificados por relevância. O algoritmo do Google é atualizado e evolui constantemente para oferecer resultados cada vez mais relevantes aos usuários. O segredo por trás do algoritmo do Google pode ser comparado ao segredo da fórmula da Coca-Cola, tal a importância que ele adquiriu na última década.</p>
  <h2>Quem <em>não</em> aparece nos resultados</h2>
  <p>O Google classifica e exibe nos resultados sites que foram rastreados pelo Googlebot, indexados e armazenados em seus servidores. O fato de um site não aparecer para determinada busca, não significa que ele não está indexado. Essas são algumas das causas para que sites não apareçam nos resultados:</p>
  <ul>
   <li>O site foi criado há pouco tempo, e ainda não foi indexado pelo Google;</li>
   <li>O site não possui nenhum link externo apontado para ele, e o Google não tem como descobrí-lo;</li>
   <li>O site está indexado pelo Google, mas aparece mal classificado, por ter baixa relevância em relação aos termos digitados;</li>
   <li>O site foi escrito em flash, java ou alguma linguagem que dificulte a indexação de seu conteúdo;</li>
   <li>O <a href="<?php echo $dominio;?>tutorial-seo/penalidades-google">site foi penalizado pelo Google,</a> removido do índice ou aparece apenas em posições inferiores.</li>
  </ul>
  <p>Para checar se um site está indexado, digite no campo de busca do Google:</p>
  <p><strong>"site:www.o-seu-site.com.br"</strong>, substituindo "o seu site", pelo domínio a ser pesquisado. Assim, você verá as páginas que o Google armazenou em seu índice. Se a resposta for a mensagem: "Sua pesquisa - site:www.o-seu-site.com.br - não encontrou nenhum documento correspondente", significa que, de fato, ele não foi indexado pelo Google e não aparecerá para qualquer busca.</p>
  <p>Para um site aparecer na busca de determinada palavra-chave, é importante que o Google tenha essa palavra no seu índice. Por exemplo, se quiser saber se um site está elegível para aparecer para a palavra "sapatos azuis", digite site:www.o-seu-site.com.br "sapatos azuis" na busca do Google e veja se algum resultado é encontrado.</p>
  <h2>Quais sites aparecem na primeira página?</h2>
  <p>Já sabemos quem aparece e quem não aparece nos resultados. Em uma pesquisa com 281.000 resultados, aproximadamente, para a palavra-chave informada, são 281.000 páginas na internet que competem para aparecer na primeira página do Google para tal busca.</p>
  <p>Como o Google define o posicionamento desses 281.000 resultados? Quem está elegível a aparecer na primeira página? Com a combinação de 200 variáveis, o algoritmo do Google elege as páginas mais relevantes à busca realizada. É esse o assunto de nosso próximo tópico.</p>
  <a href="<?php echo $dominio;?>tutorial-seo" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Voltar ao Primeiro Tópico</span> <span class="prox_topico_grande">Início do Tutotial SEO</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_seo_secundario">
  <div class="destaque_tut_seo">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_seo">
    <li>Quem aparece ou não nos resultados de busca?</li>
    <li>Quem aparece na primeira página?</li>
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