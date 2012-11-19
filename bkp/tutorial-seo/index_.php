<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Tutorial SEO| Agência SEO Marketing</title>
<meta name="description" content="" />

<?php
include("../includes/header.php");
include("../includes/menu.php");
?>
</head><div id="tutorial_seo_content">
    <div class="tutorial_seo_principal">
    	<?php
include("../includes/tutorial/menu_tutorial.php");
?>
<h1>Tutorial SEO - como o Google exibe seus resultados</h1>

<p>Já pensou como os sites de busca conseguem (na maioria das vezes) mostrar com rapidez e eficiência o que você procura? Parece que lêem o nosso pensamento. Este tutorial SEO mostra o que acontece "nos bastidores", quando são digitadas palavras-chave nestes sistemas. Os principais sites de busca do mercado são o Google, Yahoo / Cadê e MSN. Por ser o mecanismo de busca mais utilizado, este tutorial está baseado no Google. Aprenda como ele funciona e adquira valiosas dicas para posicionar melhor o seu site nestes sites de busca.</p>

<p>Navegue facilmente pelo tutorial através do menu do lado direito, pulando para os tópicos de maior interesse. Se quiser tirar aprender mais sobre o Google Adwords ou Google Analytics, nevegue pelo menu superior horizontal. E boa diversão!</p>

<h2>SITE DE BUSCA, MOTOR DE BUSCA...</h2>

<strong>Figura 1: Tela de resultados do Google (SERP)</strong>

<p>Imagine como seria a internet sem o Google, Yahoo, MSN ou outros sites similares. Chamados de sites de busca, mecanismos de busca, sistemas de busca, motores de busca, buscadores ou mecanismos de pesquisa, são ferramentas online que auxiliam usuários a buscar informações na internet. Ao contrário de diretórios controlados por editores humanos, sendo o DMOZ o mais importante, os principais sites de busca utilizam-se de algoritmos próprios para indexar a informação e disponibilizá-la aos usuários.</p>

TELA DE RESULTADOS DE BUSCA (SERP)

<p>Para pesquisar algum assunto na internet, o usuário deve digitar o termo procurado no campo de busca apropriado. Quanto mais específico for o termo digitado, maior a possibilidade de se achar o que se quer. Procurar por PIZZA pode trazer receitas de pizza ou pizzarias no mundo todo. Procurar por PIZZA DELIVERY MOEMA exibirá ao usuário uma relação de pizzarias que realizam entregas nesse bairro. Quanto mais termos forem digitados na busca, maior a possibilidade de se encontrar extamente o que se procura.</p>

<p>A cada conjunto de palavras-chave digitados, o Google realiza uma busca em seu índice e oferece uma relação de resultados (Figura 1) divididos em resultados naturais (1) e links patrocinados (2). A tela de resultados (Figura 1) é comumente chamada pela comunidade SEO de SERP - Search Engine Results Page, que pode ser traduzida para o português como tela de resultados dos sites de busca.</p>

ÍNDICE GOOGLE (GOOGLE INDEX)

<p>Seria muito lento se, a cada vez que uma busca fosse realizada nos sites de busca, estes tivessem de:</p>

<ul>
<li>Procurar na internet todas as páginas relacionadas ao ser termo buscado</li>
<li>Classificá-las por relevância</li>
<li>Disponibilizá-las na sua tela</li>
</ul>

<p>Para conseguir exibir a resposta em décimos de segundo, os sites de busca varrem a internet através de robots - o do Google é chamado de Googlebot, armazenam em seus servidores as paginas que consideram relevantes e geram arquivos de meta-dados com informações sobre as páginas rastreadas. O índice do Google, do inglês Google Index, é exatamente essa "cópia da internet" feita pelo Google em seus servidores e indexada de forma organizada. Duplicada inúmeras vezes entre seus diversos datacenters, permite calcular o posicionamento e exibir resultados para buscas em frações de segundos.</p>


Figura 2: Tempo de resposta de uma busca

<p>O resultado exibido pelo Google, então, é baseado em dados armazenados em seus servidores, e não no que de fato está na internet naquele momento. É possível que o conteúdo exibido nos resultados do Google seja diferente do que se encontra atualmente no site, pois este conteúdo pode ter sido alterado ou mesmo removido. Para diminuir esse problema, os sites de busca constantemente aprimoram os seus algoritmos, atualizando o seu índice com uma freqüência cada vez maior.</p>

<p>Para checar a informação armazenada nos servidores o Google, clique em EM CACHE na tela de resultados do Google.</p>


Figura 3: Como verificar a informação armazenada no índice do Google

<p>Vá até à seção Cache Google para obter mais informações sobre o cache em sites de busca.</p>

<p>Resumindo, o índice de sites de busca representa conteúdo da internet armazenado em seus servidores e indexado de forma a oferecer respostas precisas e extremamente velozes a consultas realizadas.</p>

        <a href="<?php echo $dominio;?>tutorial-seo/como-google-exibe-resultados/" class="tutorial_seo_prox_topico">
        <span class="prox_topico_peq">Próximo Tópico</span>
        <span class="prox_topico_grande">Como o Google exibe seus resultados</span>
        </a>
        <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/>
<span class="destaque">Se interessou?</span></div>
    </div>
    <div class="tutorial_seo_secundario">
<?php
include("../includes/tutorial/lateral_tutorial_seo.php");
echo "</div>";
include("../includes/rodape.php");
?>


</div></div></body></html>