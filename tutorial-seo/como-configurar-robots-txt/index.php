<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Como configurar o Robots.txt  | Agência SEO Marketing</title>
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
			    <span itemprop="title">Como configurar o robots.txt</span>
			</div>
		</div>

    	<h1><small>Tutorial SEO</small><br/>Como configurar o robots.txt</h1>
   	  <h2>Saiba como evitar que determinadas páginas do site apareçam no Google</h2>
        
   	  <p>Como já vimos na página sobre o <a href="<?php echo $dominio;?>tutorial-seo/google-robots">Googlebot</a>, robots ou robôs são aplicativos que percorrem a internet em busca de conteúdo com o objetivo de indexá-lo ou verificar alterações ocorridas desde a última visita. Porém, nem todo o conteúdo de um site deve ser indexado pelos robots.</p>
        
      <p>Páginas de login, páginas repetidas, páginas de impressão são alguns desses exemplos. <strong>O que é robots.txt</strong>, então? Como o próprio nome já diz, é um arquivo no formato .txt que funciona como um filtro para os <strong>Crawlers</strong> e faz com que os webmasters controlem permissões de acesso a determinadas páginas ou pastas dos sites. O robots.txt controla qual informação de um site deve ou não deve ser indexada pelos sites de busca. A sintaxe do arquivo é bem simples, e deve ser colocada pelo webmaster responsável pelo site na raiz da hospedagem.</p>
        
   	  <h2>Sintaxe do Robots.txt</h2>
        
   	  <p>O arquivo robots.txt tem o papel de criar uma política de acesso para os Robots. Para a execução dessas tarefas, há palavras reservadas, ou seja, palavras com a função de comandos que permitirão ou não o acesso a determinados diretórios ou páginas de um site:</p>
        
   	  <h3>User-agent</h3>
        
   	  <p>A função desse comando é apenas dizer quais Robots devem seguir as regras indicadas no Robots.txt. Supondo que você deseje somente que o mecanismo de busca do Google siga as definições constantes no arquivo robots.txt, esse deve ser indicado como "User-agent: Googlebot". Eis as principais opções:</p>
        
<ul>
    	  <li>Google: <em>User-agent: Googlebot</em></li>
    	  <li>Yahoo:<em> User-agent: Slurp</em></li>
    	  <li>Bing: <em>User-agent: Bingbot</em>.</li>
    	  <li>Todos os mecanismos: <em>User-agent: *</em>.</li>
      </ul>
      
   	  <h3>Disallow</h3>
        
   	  <p>Esse comando diz aos mecanismos qual diretório ou página deve ser impedida de ter o conteúdo verificado. Exemplos:</p>
        
<ul>
    	  <li><em>Disallow: /images (diz aos robots para que não seja indexado o conteúdo do diretório /images)</em></li>
    	  <li><em>Disallow: print1.html (instrui os robots a não indexarem a página print1.html)</em></li>
      </ul>
        
   	  <h3>Allow</h3>
        
   	  <p>Esse comando diz aos <em>robots</em> qual diretório ou página deve ter o conteúdo verificado. Mas qual seria a necessidade dele, sendo que diretórios e páginas são por definição sempre permitidos? Nesse caso, a utilização acontecel em situações em que o webmaster bloqueou o acesso a um diretório por meio do comando Disallow, mas gostaria de ter indexado um arquivo ou sub-diretório dentro do diretório bloqueado.</p>
        
   	  <h2>Exemplos de Robots.txt</h2>
        
    	<p><strong>Exemplo 1</strong>: o webmaster não deseja que o conteúdo do diretório/docs seja indexado pelos robots, então, bloqueou o acesso ao diretório /docs com o comando <em>"Disallow: /docs"</em> no arquivo robots.txt. Dentro desse diretório, porém, existe um sub-diretório chamado "public", que deve ter seu conteúdo indexado. Para que isso aconteça, basta usar no arquivo robots.txt a instrução <em>"Allow: /docs/public/"</em>.</p>
        
    	<p><strong>Exemplo 2</strong>: Considere a	 seguinte estrutura de um determinado site:</p>
        <p>
    	/<br/>
		Index.html<br/>
		Contato.html<br/>
		/Interno<br/>
		Ambiente.html<br/>
		/News<br/>
		Novidades.html<br/>
		/Admin<br/>
		Restrito.html<br/>
		Seguranca.html<br/>
		robots.txt
        </p>
          
		<p>Como pode ser observado, há na raíz 2 diretórios e 2 páginas. No diretório "Interno", há 1 página e 1 diretório, cujo nome é "News", onde existe 1 página. No diretório "Admin", podemos observar outras 2 páginas. Ainda na raiz, está o arquivo robots.txt.</p>
  
    	<p>O webmaster responsável pelo site definiu que o diretório "Interno" terá seu conteúdo bloqueado aos robots, isto é, não deverá ser indexado pelo Google e outros sites de busca, mas o diretório "News" deverá será indexado. Já o diretório "Admin" deve ser completamente bloqueado. As instruções, segundo o webmaster, devem ser seguidas por qualquer mecanismo de busca. O conteúdo do arquivo Robots.txt deve ser o seguinte:</p>
        
    	<p>
        User-agent: *<br />
    	Disallow: /Interno<br />
    	Allow: /Interno/News<br />
    	Disallow: /Admin
        </p>
        
    	<p>Com as regras acima, os mecanismos irão indexar o conteúdo apenas da raíz e do diretório &quot;News&quot;.</p>
        
    	<h2>Exemplos reais de Robots.txt</h2>
        
    	<p>Google: <a href="http://www.google.com.br/robots.txt" rel="NOFOLLOW" target="_blank">www.google.com.br/robots.txt</a></p>
        
        <p>Registro.br: <a href="http://registro.br/robots.txt">http://registro.br/robots.txt</a></p>
          
<a href="<?php echo $dominio;?>tutorial-seo/como-criar-sitemap-xml/" class="tutorial_seo_prox_topico">
    <span class="prox_topico_peq">Próximo Tópico</span>
    <span class="prox_topico_grande">Como criar um Sitemap.xml</span>
    </a>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
    
    <div class="destaque_tut_seo">
    <h3>Destaques desta página</h3>
    <ul class="ul_destaque_tut_seo">
        <li>Sintaxe do Robots.txt</li>
        <li>Allow e Disallow</li>
        <li>Exemplos de Robots.txt</li>
    </ul>
</div>
    
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>


</div></div></body></html>