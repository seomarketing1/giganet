<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Glossário SEO | Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../../includes/header.php");
?>
<script type="text/javascript" src="../../js/jquery.listnav.min-2.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#glossario_seo_container').listnav({ 
    initLetter: 'a', 
    includeAll: true, 
    includeOther: false, 
    flagDisabled: false, 
    noMatchText: '', 
    showCounts: false, 
    cookieName: 'seo-glossario-list'
  });
});
</script>
<?php
include("../../includes/menu.php");
?>
<div id="tutorial_seo_glossario_content">
<div class="tutorial_seo_glossario_principal">
    	<?php
include("../../includes/tutorial/menu_tutorial_seo.php");
?>
    	<h1>GLOSSÁRIO DE<br/>A a Z</h1>
        <div id="glossario_seo_container-nav"></div>
        <div id="glossario_seo_container">
        	<div class="glossario_content">
                <span class="glossario_content_title">Black Hat SEO</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de pesquisa, Black Hat se refere a um conjunto de técnicas que têm o objetivo de manipularas principais variáveis para enganar os mecanismos de busca, oferecendo-lhes geralmente conteúdo diferente do oferecido a pessoas navegando pelo site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Bots</span>
                <span class="glossario_content_descritivo">Abreviação para robots, os robôs dos sites de busca que varrem a internet atrás de novo conteúdo para disponibilizá-los em seus resultados de pesquisa.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Breadcrumbs</span>
                <span class="glossario_content_descritivo">Breadcrumbs são auxiliares de navegação que aparecem geralmente no topo da página, indicando o nível hierárquico do site em que se encontra o internauta, permitindo que este facilmente retorne às páginas navegadas anteriormente. Ex: Home > Produtos > Tênis > Adidas > Barricade V Ltd Men</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Busca Personalizada</span>
                <span class="glossario_content_descritivo">Conceito introduzido pelo Google aonde o histórico de pesquisas do usuário é levado em conta na hora de apresentar os resultados de busca natural, dando maior peso aos tópicos de seu interesse. Se um usuário costuma acessar constantemente um determinado site de carros, a busca por "carros" por esse usuário no Google provavelmente trará esse determinado site em uma posição destacada nos resultados.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Buscadores</span>
                <span class="glossario_content_descritivo">Veja mecanismos de pesquisa.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Cadastros de Sites</span>
                <span class="glossario_content_descritivo">Existem diversos sites de diretórios, (ex.: DMOZ) e sites de busca (ex. Google), que oferecem a webmasters a opção de cadastro de seus sites para terem o seu conteúdo exibido. Diversas empresas e softwares oferecem serviços de cadastro neste tipo de sites.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Cloaking</span>
                <span class="glossario_content_descritivo">Método Black Hat aonde o conteúdo exibido por um site para os robôs dos sites de busca é diferente do conteúdo exibido para pessoas.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Compra de Links</span>
                <span class="glossario_content_descritivo">Compra de links se refere à prática de comprar links em outros sites. Prática comum no mundo da propaganda, a compra de links se tornou uma ferramenta muito usada por webmasters (mas reprovada pelos mecanismos de pesquisa) para aumentar rapidamente o PageRank de páginas na internet.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Conteúdo Duplicado</span>
                <span class="glossario_content_descritivo">Os mecanismos de busca valorizam conteúdo único, diferente, exclusivo. Conteúdo duplicado tanto dentro de seu mas principalmente fora dele - sites diferentes com conteúdo repetido - devem ser ao máximo evitados.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Doorway pages</span>
                <span class="glossario_content_descritivo">Páginas de um site geralmente em grande quantidade com conteúdo praticamente repetido, modificando-se apenas a principal keyword. O objetivo é rankear para o maior número possível de palavras-chave. Por exemplo, um site pode criar páginas de visto de viagem para cada um dos países do mundo, alterando apenas o país de uma página para outra. O Google considera Doorway Pages como Spam, sendo passível de punição.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Googlebot</span>
                <span class="glossario_content_descritivo">"Robô" do Google. Na verdade, Googlebot são os computadores do Google varrendo a internet, seguindo os links de uma página para identificar novas páginas, seguindo os links dessas novas páginas para encontrar mais páginas, e assim por diante.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Inside Search</span>
                <span class="glossario_content_descritivo">Em alguns casos e alguns países, o Google exibe uma caixa de busca dentro de seus resultados, permitindo aos usuários realizarem buscas dentro do site sem ter de entrar nele. A esse recurso chamamos insite search.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Keyword Stuffing</span>
                <span class="glossario_content_descritivo">Consiste em criar diversas repetições da mesma palavra, não necessariamente com um sentido para quem está lendo, com o objetivo de fazer com que a página seja mais importante para aquelas palavras-chave.O Google consdera keyword stuffing como search engine spam, sendo passível de punição.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Landing Page</span>
                <span class="glossario_content_descritivo">Também conhecida como página de destino ou página de aterrisagem, é a primeira página visitada por um internauta ao chegar a um site.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Link Farm</span>
                <span class="glossario_content_descritivo">Termo em inglês para "fazenda de links". São sites que existem com o propósito de vender espaços em suas páginas para aumentar o PageRank das páginas de quem está comprando o link.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Marketing</span>
                <span class="glossario_content_descritivo">Conjunto de operações que envolvem a vida do produto, desde a planificação de sua produção até o momento em que é adquirido pelo consumidor -def. Michaelis</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Marketing de Busca</span>
                <span class="glossario_content_descritivo">Iniciativas de marketing focadas em torno dos sites de busca como o Google, Yahoo, MSN, Altavista. O início de um trabalho de marketing de busca é a seleção de palavras-chave que uma vez digitadas no campo de busca desses sites representem clientes em potencial. A partir dessa palavra-chave digitada é traçada toda a estatégia de marketing de busca.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Mecanismos de Busca</span>
                <span class="glossario_content_descritivo">Veja mecanismos de pesquisa.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Mecanismos de Pesquisa</span>
                <span class="glossario_content_descritivo">Mecanismos de pesquisa são aplicativos desenvolvidos para facilitar a busca de informações na internet. Os mais conhecidos são o Google, Yahoo e Bing.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Motores de Busca</span>
                <span class="glossario_content_descritivo">Veja mecanismos de pesquisa.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Msnbot</span>
                <span class="glossario_content_descritivo">Nome dado ao Robô de rastreamento do msn.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Nofollow</span>
                <span class="glossario_content_descritivo">Mecanismo utilizado para que links em uma página não sejam considerados pelos mecanismos de pesquisa. Pode ser útil em comentários de blog suscetíveis a SPAM ou para criar links para sites que sejam penalizados pelo Google. Também é utilizado para controlar o fluxo de PageRank. Sintaxe de exemplo: <a href="www.bad-site.com/index.html" rel="nofollow">Troca de links </a>.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Overture</span>
                <span class="glossario_content_descritivo">Empresa comprada pelo Yahoo, que teve recentemente o nome do serviço mudado para Yahoo Search Marketing.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Pagerank</span>
                <span class="glossario_content_descritivo">O nome PageRank ou PR é uma uma nota dada pelo Google às páginas indexadas em seus servidores, baseada na quantidade e qualidade de "votos" - links - que cada página recebe. O PageRank é constantemente atualizado e varia de 0 a 10 , sendo PR=10 o Google, PR=9 a Casa Branca e a NASA, e algumas poucas páginas na internet. No Brasil, para se ter um exemplo, a página inicial do Terra e do UOL têm PR=8 (em 19/10/08).. Quanto mais alto for o PageRank, maior a possibilidade de um site aparecer bem posicionado na tela de resultados do Google.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Palavra-chave</span>
                <span class="glossario_content_descritivo">Conjunto de palavras digitadas por usuários no campo de busca de mecanismos de pesquisa como o Google e o Cadê.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Penalidade</span>
                <span class="glossario_content_descritivo">Sites que infrinjam as diretrizes dos buscadores correm o risco de serem penalizados com a perda de posições na tela de resultados ou com a total exclusão de seu site do índice dos buscadores.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Personalized Search</span>
                <span class="glossario_content_descritivo">Veja Busca Personalizada.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Redirecionamento</span>
                <span class="glossario_content_descritivo">Existem diversas formas de "redirecionar" o visitante de uma página a outra. Esse redirecionamento afeta também o índice de um site no Google. O Google recomenda o redirecionamento permanente (301) para que as páginas em seu índice assumam o endereço da nova página sem perda de PageRank e posicionamento.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Relevância</span>
                <span class="glossario_content_descritivo">Mecanismos de busca classificam os resultados das buscas efetuadas baseado na relevância dos sites em seu índice em relação à palavra buscada.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Resultados Naturais</span>
                <span class="glossario_content_descritivo">Os resultados naturais são a área de resultados principal dos mecanismos de busca, e não são influenciados por pagamento aos mesmos mecanismos de busca. O trabalho de SEO busca melhorar a classificação de sites nesta área de pesquisa.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Resultados Orgânicos</span>
                <span class="glossario_content_descritivo">Veja resultados naturais.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Robô</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de busca, Robô é o termo utilizado para descrever os sistemas dos sites de busca que varrem a internet indexando o conteúdo que encontram em seus servidores. Eles seguem automaticamente os links das páginas de uma forma automatizada, daí o nome robô. Os robôs mais conhecidos são o Googlebot (google), msnbot (MSN), Yahoo! Slurp (Yahoo!).</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Redirecionamento</span>
                <span class="glossario_content_descritivo">Existem diversas formas de "redirecionar" o visitante de uma página a outra. Esse redirecionamento afeta também o índice de um site no Google. O Google recomenda o redirecionamento permanente (301) para que as páginas em seu índice assumam o endereço da nova página sem perda de PageRank e posicionamento.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Relevância</span>
                <span class="glossario_content_descritivo">Mecanismos de busca classificam os resultados das buscas efetuadas baseado na relevância dos sites em seu índice em relação à palavra buscada.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Resultados Naturais</span>
                <span class="glossario_content_descritivo">Os resultados naturais são a área de resultados principal dos mecanismos de busca, e não são influenciados por pagamento aos mesmos mecanismos de busca. O trabalho de SEO busca melhorar a classificação de sites nesta área de pesquisa.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Resultados Orgânicos</span>
                <span class="glossario_content_descritivo">Veja resultados naturais.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Robô</span>
                <span class="glossario_content_descritivo">No mundo dos mecanismos de busca, Robô é o termo utilizado para descrever os sistemas dos sites de busca que varrem a internet indexando o conteúdo que encontram em seus servidores. Eles seguem automaticamente os links das páginas de uma forma automatizada, daí o nome robô. Os robôs mais conhecidos são o Googlebot (google), msnbot (MSN), Yahoo! Slurp (Yahoo!).</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Scraping</span>
                <span class="glossario_content_descritivo">Técnica utilizada por black hats, aonde conteúdo da internet vindo de blogs e sites é copiado e utilizado para montar novas páginas no site (aos milhares), muitas vezes com o conteúdo misturado para que os sites de busca não identifiquem a cópia.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Search Engine</span>
                <span class="glossario_content_descritivo">Palavra em inglês para "Mecanismo de Pesquisa".</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">SEM</span>
                <span class="glossario_content_descritivo">Sigla em inglês para Search Engine Marketing. Enquanto SEO foca em melhorar os resultados naturais, SEM engloba também a parte relacionada a links patrocinados, isto é, resultados pagos. SEM também é o nome dadopelo Google e Yahoo às agências de marketing que lidam com marketing de busca.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">SEO</span>
                <span class="glossario_content_descritivo">Termo em inglês para otimização de sites para mecanismos de pesquisa, também comumente referido como SEO.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">SEO</span>
                <span class="glossario_content_descritivo">Search Engine Optimization é o processo de melhorar o posicionamento de um site na tela de resultados naturais dos sites e busca.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">SERP</span>
                <span class="glossario_content_descritivo">A tela de resultados é támbem chamada de SERP (Search Engine Results Page) e é onde o Google e demais sites de busca disponibiliza seus resultados naturais.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">Site de Busca</span>
                <span class="glossario_content_descritivo">Sites que têm coom principal busca oferecer respostas às pesquisas de usuários. Sites de busca indexam conteúdo da internet em seus servidores para poder oferecer respostas às pesquisas em frações de segundo. Os principais sites de busca são o Google, Yahoo, MSN Live Search.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">Sitelink</span>
                <span class="glossario_content_descritivo">O Google exibe os resultados de alguns sites com uma série de links internos para esse mesmo site. Digite por exemplo TERRA no Google e você terá, além da descrição do site, 8 links apontados para áreas internas do terra.com.br. Esses links são chamados de sitelinks.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">Slurp</span>
                <span class="glossario_content_descritivo">Veja Yahoo! Slurp.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">Snippet</span>
                <span class="glossario_content_descritivo">Snippet é um trecho de texto geralmente de 2 linhas que aparece logo abaixo do título do site na tela de resultados do Google e que descreve o conteúdo da página.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">Spam, Search Engine</span>
                <span class="glossario_content_descritivo">Search Engine Spam é o conteúdo gerado por técnicas black hat com o intuito de melhorar o posicionamento de um site. Geralmente Search Engine Spam é conteúdo exibido apenas aos bots dos sites de busca, mas pode também ficar visível a usuários, geralmente oriundo de conteúdo copiado de outros blogs, rss feeds, sites. Sites com spam podem ter milhares de páginas com conteúdo copiado, caracterizando o Spam.</span>
            </div>


<div class="glossario_content">
                <span class="glossario_content_title">Stemming</span>
                <span class="glossario_content_descritivo">Variações de palavras, trazendo a palavra à sua "raíz". Uma busca no Google por "flor" pode trazer resultados de sites com as palavras "flor", "flores", ou mesmo "florida".</span>
            </div>
<div class="glossario_content">
                <span class="glossario_content_title">Submeter URL</span>
                <span class="glossario_content_descritivo">Veja cadastro de sites.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Troca de Links</span>
                <span class="glossario_content_descritivo">Troca de Links são trocas de links entre diferentes sites, algo como "eu aponto para o seu site e você aponta para o meu". Troca de links é usado com frequência para aumentar o PageRank de uma página, e quando utilizado com esse propósito, fere as diretrizes dos mecanismos de pesquisa.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">URL</span>
                <span class="glossario_content_descritivo">Universal Resource Locator, ou o endereço de uma página na internet. Possui geralmente a sintaxe http://www.site.com.br.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">White Hat SEO</span>
                <span class="glossario_content_descritivo">White Hat SEO é uma vertente SEO que segue por via de regra as diretrizes dos mecanismos de busca em seu trabalho de melhorar o posicionamento de um site nos resultados naturais.</span>
            </div>
            <div class="glossario_content">
                <span class="glossario_content_title">Yahoo</span>
                <span class="glossario_content_descritivo">Site de busca e conteúdo. É o segundo buscador mais utilizado no mundo depois do Google.</span>
            </div>

<div class="glossario_content">
                <span class="glossario_content_title">Yahoo! Slurp</span>
                <span class="glossario_content_descritivo">Nome dado ao Robô de rastreamento do Yahoo!.</span>
            </div>
            
        </div>
        <h2>Não encontrou a palavra<br/>que procurava?</h2>
        <form id="add_glossario"  action="#" method="post" class="form_faq">
        	<input type="hidden" name="categoria" value="seo"/>
            <input type="text" name="nome"  class="form_faq_input" value="Nome:" onblur="if (this.value == '') {this.value = 'Nome:';}"
 onfocus="if (this.value == 'Nome:') {this.value = '';}" />
            <input type="text" class="form_faq_input" name="email" value="E-Mail:" onblur="if (this.value == '') {this.value = 'E-Mail:';}"
 onfocus="if (this.value == 'E-Mail:') {this.value = '';}"  />
            <input type="text"  class="form_faq_input" name="termo" value="Termo:" onblur="if (this.value == '') {this.value = 'Termo:';}"
 onfocus="if (this.value == 'Termo:') {this.value = '';}" /><br/>
 			<div class="form-msg"></div>
            <input type="submit" value="Enviar"  class="form_faq_submit" />
            </form>
        </form>
        <script type="text/javascript">
	$(function(){
		$('#add_glossario').submit(function(){
			if($('input[name="nome"]').val() == '' || $('input[name="nome"]').val() == null || $('input[name="nome"]').val() == 'Nome:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>Nome</strong>.');
				$('input[name="nome"]').focus();
			}
			else if($('input[name="email"]').val() == '' || $('input[name="email"]').val() == null || $('input[name="email"]').val() == 'E-Mail:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>E-mail</strong>.');
				$('input[name="email"]').focus();
			}
			else if($('input[name="termo"]').val() == '' || $('input[name="termo"]').val() == null || $('input[name="termo"]').val() == 'Termo:')
			{
				$('.form-msg').html('Por favor, preencha o campo <strong>E-mail</strong>.');
				$('input[name="termo"]').focus();
			}
			else
			{
				$.ajax({
					type:'post',
					url:'contato.envio.php',
					data:$('#add_glossario').serialize(),
					beforeSend:function(){
						$('.form-msg').hide().html('Enviando e-mail. Entraremos em contato assim que possível.').fadeIn(400);
					},
					success:function(e){
						$('#form_contato').fadeOut(400);
						$('.form-msg').hide().html('E-mail enviado com sucesso.').fadeIn(400);
					}
				});
			}
			return false;
		});
	});
	</script>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_glossario_secundario">
<?php
include("../../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../../includes/rodape.php");
?>
</body>
</body>
</html>