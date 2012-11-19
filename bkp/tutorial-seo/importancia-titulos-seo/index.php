<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Importância dos Títulos para SEO | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
</head><div id="tutorial_seo_content">
    <div class="tutorial_seo_principal">
    	<?php
include("../../includes/tutorial/menu_tutorial.php");
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
			    <span itemprop="title">A Importância dos Títulos para SEO</span>
			</div>
		</div>

    	<h1><small>Tutorial SEO</small><br/>A Importância dos Títulos para SEO</h1>
        
        <h2>Saiba os motivos que fazem do título uma peça fundamental para SEO</h2>
        
      <p class="destaque">Para muitos profissionais de SEO, esse é um dos itens que mais influencia o posicionamento. Para os "não tão profissionais assim" este é o único fator que importa.</p>
        
 		<p>Primeiramente, é necessário dizer que estamos falando da tag HTML &lt;title&gt;. Essa tag é utilizada pelos buscadores, sendo o responsável pelo o título do resultado nas buscas. Veja:</p>
        
		<img src="<?php echo $dominio;?>imagens/tutorial-seo/meta-title-example.png" />
        
      <p>Como pode ser observado, essa é a função da <strong>tag Title</strong>, exibir o título da página no resultado do Google. O Title é utilizado tanto pelos buscadores quanto pelo Browser (navegador de internet como Firefox, Chrome ou IE). Observe:</p>
        
        <img src="<?php echo $dominio;?>imagens/tutorial-seo/title-example.png" />
        
        <p>No caso das imagens acima, o código HTML estaria assim:</p>
        
      <p><strong>&lt;title&gt;Tutorial Adwords - Como funcionam os Links Patrocinados no Google&lt;/title&gt;</strong></p>
      
      <h2>Se eu não usar a tag Title, o que acontece?</h2>
        
      <p>Quando os buscadores não encontram esse atributo, eles recorrem ao conteúdo do site, gerando assim um título automático para ser utilizado no resultado da busca. No navegador, ao invés do título, é exibido o nome do arquivo. Justamente por esse motivo, existe programadores e desenvolvedores que não acreditam ou sabem que para SEO é extremamente necessário trabalhar bem o Title.</p>
        
      <p>Utilizar essa tag é muito útil quando se quer exibir um título na página de busca e na aba de navegação. Deve-se ficar atento para que a quantidade de caracteres não seja muito grande e não contenha muitas palavras-chave, pois isso pode facilmente ser considerado Black Hat.</p>
        
    <a href="<?php echo $dominio;?>tutorial-seo/importancia-descricoes-seo" class="tutorial_seo_prox_topico">
        <span class="prox_topico_peq">Próximo Tópico</span>
        <span class="prox_topico_grande">A importância das Descrições para SEO</span>
        </a>
        
      <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
    
<div class="destaque_tut_seo">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_seo">
        <li>Exemplo da tag Title</li>
        <li>E se eu não usar a tag Title?</li>
    </ul>
</div>
    
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>


</div></div></body></html>