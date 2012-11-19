<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Tutorial SEO (Search Engine Optimization) | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../includes/header.php");
include("../includes/menu.php");
?>
</head><div id="tutorial_seo_content">
    <div class="tutorial_seo_principal">
    
      <?php include("../includes/tutorial/menu_tutorial.php"); ?>
      
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
        <span itemprop="title">Tutorial SEO</span>
    </div>
</div>
        
   	  <h1><small>Tutorial SEO</small><br/>SEO - Otimização de sites (Search Engine Optimization)</h1>
      <h2>Otimização de sites para motores de busca</h2>
        
      <p class="destaque">Antes de iniciar o <strong>Tutorial SEO</strong> é importante que você saiba o que realmente é esta técnica e qual é o seu significado. Tomamos a liberdade de parafrasear a <a href="http://pt.wikipedia.org/wiki/SEO" target="_blank">Wikipedia</a> em seu artigo sobre <a href="<?php echo $dominio;?>seo/">Otimização de Sites</a>, veja:</p>
        
 		<p class="destaque">"Otimização de Sites é o conjunto de estratégias com o objetivo de potencializar e melhorar o posicionamento de um site nas páginas de <strong>resultados naturais (orgânicos)</strong> nos sites de busca. O termo, para variar, teve origem na língua inglesa e representa <strong>Search Engine Optimization</strong>. Também se refere à indústria de consultoria, que trabalha na otimização de projetos e websites de seus clientes."
</p>

        <h2>O que são os Resultados orgânicos?</h2>
        
      <p>A página de resultados de busca do Google (também chamada de SERP - Search Engine Results Page - pelos profissionais de SEO) é dividida em algumas áreas. Veja na figura a seguir:</p>
        
	  <img src="<?php echo $dominio;?>/imagens/tutorial-seo/links-patrocinados.jpg" alt="Links Patrocinados" title="Links Patrocinados" />
        
      <p>Nessa imagem, os itens destacados representam as campanhas de Links Patrocinados do Google. No caso, os anunciantes pagam ao buscador por clique. Para saber mais sobre esse assunto, confira o nosso Tutorial de Links Patrocinados e Google Adwords.</p>
        
      <p>Dando sequência ao nosso tutorial, a imagem a seguir ilustra os resultados orgânicos do Google:</p>
        
        <img src="<?php echo $dominio;?>/imagens/tutorial-seo/resultados-organicos.jpg" alt="Resultados Orgânicos" title="Resultados Orgânicos" />
        
        <h2>Como funciona o Google?</h2>
        
      <p>Muitos, incontáveis usuários, já devem ter se perguntado: "Mas como funciona o Google?", "Como o Google pesquisa tão rápido?". O processo é relativamente simples, diário e constante.</p>
        
      <p>O Google possui imensos computadores que estão constantemente 'varrendo a internet' em busca de informações. Esse processo é realizado pelo Crawler, programa que rastreia os sites da web, a partir de links entre as páginas. As informações colhidas durante esse método são armazenadas no Servidor de Índice - responsável por classificar as páginas. Todo o conteúdo encontrado fica armazenado em outro servidor, que possui uma espécie de cópia de todo texto localizado na internet.</p>
      
      <img src="<?php echo $dominio;?>/imagens/tutorial-seo/resultados-google.jpg" alt="Resultados Google" title="Resultados Google" />
        
      <p>Quando um usuário faz uma pesquisa no buscador, os Servidores de Internet do Google fazem uma solicitação ao Servidor de Índice que, rapidamente, retorna as informações de quais páginas devem aparecer e onde estão localizadas. Com esses dados em "mãos", os Servidores de Internet do Google recolhem os arquivos armazenados no Servidor de Dados, o qual gera automaticamente a página de resultados (SERP) que será exibida ao usuário.</p>
        
      <p>Todo processo acontece em 0,19 segundos em média. Rápido, não?</p>
        
        <p><a href="http://www.youtube.com/watch?feature=player_embedded&amp;v=BNHR6IQJGZs#!" target="_blank">Veja o vídeo</a> onde Matt Cutts, Head do time de Webspam do Google mostra como funciona o processo de busca.</p>

        <a href="<?php echo $dominio;?>tutorial-seo/o-que-e-seo/" class="tutorial_seo_prox_topico">
        <span class="prox_topico_peq">Próximo Tópico</span>
        <span class="prox_topico_grande">O que é SEO</span>
        </a>
        
<div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
    
<div class="destaque_tut_seo">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_seo">
        <li>O que são os Resultados orgânicos?</li>
        <li>Como funciona o Google?</li>
    </ul>
</div>
    
<?php
include("../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../includes/rodape.php");
?>

</div></div></body></html>