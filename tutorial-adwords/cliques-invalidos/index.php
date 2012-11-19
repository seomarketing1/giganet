<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Cliques inválidos (Click Fraud) | Agência SEO Marketing</title>
<meta name="description" content="" />
<?php
include("../../includes/header.php");
include("../../includes/menu.php");
?>
</head>

<div id="tutorial_seo_content">
 <div class="tutorial_seo_principal">
  <?php
include("../../includes/tutorial/menu_tutorial_adwords.php");
?>
  <div class="breadcrumb">
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>" itemprop="url"> <span itemprop="title">Página Inicial</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>tutorial/" itemprop="url"> <span itemprop="title">Tutorial</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <a href="<?php echo $dominio;?>tutorial-adwords/" itemprop="url"> <span itemprop="title">Tutorial Adwords</span> </a> › </div>
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Cliques inválidos (Click Fraud)</span> </div>
  </div>
  <h1><small>Tutorial Adwords</small><br/>Cliques inválidos (Click Fraud)</h1>
  <h2>Mesmo que afetem a taxa de cliques, os concorrentes podem trazer benefícios ao seu site por meio deles</h2>
  <p>É costumeiro que anunciantes que fazem uso de links patrocinados se queixem de receberem cliques de "procedência duvidosa", ou seja, aqueles que não seguem o padrão esperado de uma campanha. Por exemplo, um anunciante hipotético costuma ter uma média de 1.000 cliques por dia. Em um determinado dia ou semana, percebe-se que, em poucas horas, são atingidos esses mesmos 1.000 cliques.</p>
  <p>Em um outro exemplo, o anunciante possui uma conversão de meta de 10%. Os usuários que entram no site costumam preencher um formulário para solicitar mais informações de um produto. De repente, essa caixa cai para 0,5%. Um terceiro anunciante tinha uma taxa de rejeição (número de usuários que saem de seu site já na primeira página) de 20% e, de repente, passa a ter uma taxa de rejeição de 80%.</p>
  <h2>Causas não voluntárias de alterações no comportamento de cliques</h2>
  <p>Existem diversas causas naturais possíveis para esse comportamento atípico. Algumas delas podem ser:</p>
  <ul>
   <li><strong>Sazonalidade</strong>. Um site de ovos de páscoa possui um aumento signifcativo de tráfego na época da páscoa;</li>
   <li>Um erro no site pode fazer com que os usuários não cheguem até a sua página de formulário;</li>
   <li>Uma nova versão de navegador pode ser incompatível com o seu site;</li>
   <li>O seu provedor está com problemas de lentidão no servidor.</li>
  </ul>
  <p>Uma das formas de se identificar as origens dos cliques é por meio da análise dos logs onde está hospedado o servidor. Geralmente, é possível analisar os endereços IP dos visitantes e identificar a sua origem geográfica.</p>
  <h2>Click Fraud ou Cliques Inválidos</h2>
  <p>Vários anunciantes costumam queimar a cota diária de propaganda de seus concorrentes ao clicarem inúmeras vezes nos links patrocinados deles. Com isso, esperam aparecer em destaque, sem a presença da concorrência. O próprio anunciante que segue a lógica acima visa o aumento da taxa de cliques de seus anúncios. Com isso, espera-se pagar menos por cliques e ter um melhor posicionamento em um futuro próximo. Vários proprietários de sites que são remunerados pelas propagandas das suas páginas (veja o tópico <a href="<?php echo $dominio ?>tutorial-adwords/rede-de-conteudo/">Rede de Conteúdo</a>) clicam em anúncios que aparecem em seu site para aumentarem a sua receita. Ao mesmo tempo, incentivam amigos a fazerem o mesmo.</p>
  <p>Vários destes anunciantes e donos de sites desenvolvem robôs (clickbots) ou ferramentas de automação de cliques para que isso aconteça automaticamente nos anúncios e assim conseguir com isso o aumento da receita ou prejudicar os concorrentes. Existem "associações" cujos membros recebem listas de sites para clicar e gerar receita a seus proprietários, em troca de um percentual da receita gerada. Um artigo da <a href="http://www.businessweek.com/magazine/content/06_40/b4003001.htm" target="_blank">Business Week americana que aborda o tema Click Fraud</a> estima em US$ 1 bilhão o valor de cliques inválidos gerados em um ano, ou seja, entre 10 e 15% do total de receita gerada com cliques em 2005.</p>
  <p>Esse mesmo artigo informa ainda que o FBI começava na época a investigar se essas práticas violam de alguma forma as leis federais americanas. Até aquele ponto, violavam apenas as diretrizes do Google, Yahoo, MSN e demais provedores de soluções de links patrocinados.</p>
  <p><strong>Nota:</strong> cliques inválidos acontecem na grande maioria das vezes na rede de conteúdo, com indivíduos que capitalizam em cima de sites próprios com anúncios. Existe uma porcentagem bem menor de cliques inválidos gerados de links patrocinados na SERP (Search Engine Results Page).</p>
  <h2>O que fazer quando forem identificados cliques inválidos?</h2>
  <p>O Google procura identificar cliques gerados com o intuito de fraudar o seu sistema. Segundo sua definição, cliques inválidos são aqueles gerados por meio de métodos proibidos. Pelos cookies, endereços IP ou outros mecanismos, o Google ressarce os gastos obtidos por meio dos cliques inválidos. Para anunciantes, é possível verificar a taxa de cliques inválidos que os seus anúncios receberam com o relatório na interface do Adwords.</p>
  <p>Para fazer isso, escolha a opção Desempenho da Campanha e, na opção Adicionar/Remover colunas, selecione Cliques Inválidos. O relatório mostrará o número de cliques identificados como inválidos pelo Google e o seu percentual em relação ao total de cliques.</p>
  <p>Caso acredite que o seu anúncio tenha recebido cliques inválidos não identificados pelo Google, entre em contato com o <a href="https://adwords.google.com/support/bin/request.py?hlrm=pt">suporte do Adwords</a>.</p>
  <p>Mesmo com todos esses impasses, os cliques inválidos em seu anúncio podem ajudá-lo a melhorar a sua taxa de cliques. Se eles foram originados pelos concorrentes, a médio prazo, eles lhe ajudarão.</p>
  <a href="<?php echo $dominio;?>tutorial-adwords/configuracao-campanhas-search" class="tutorial_seo_prox_topico"> <span class="prox_topico_peq">Próximo Tópico</span> <span class="prox_topico_grande">Configuração de campanhas de search</span> </a>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_seo_secundario">
  <div class="destaque_tut_adw">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_adw">
    <li>Alterações no comportamento dos cliques</li>
    <li>Como identificar cliques inválidos</li>
   </ul>
  </div>
  <?php
include("../../includes/tutorial/lateral_tutorial_adw.php");
echo "</div>";
include("../../includes/rodape.php");
?>
 </div>
</div>
</body></html>