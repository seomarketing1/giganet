<?php
$headers = apache_request_headers();
//$real_client_ip = $headers["X-Forwarded-For"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW"/>
<title>Configuração de Campanhas de Search | Agência SEO Marketing</title>
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
   <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"> <span itemprop="title">Configuração de Campanhas de Search</span> </div>
  </div>
  <h1><small>Tutorial Adwords</small><br/>Configuração de Campanhas de Search (Pesquisa no Google)</h1>
  <h2>Otimize suas campanhas de acordo com o produto e os dados da empresa</h2>
  <p>Após se cadastrar no Google Adwords, o segundo passo é começar a criar suas campanhas, no qual será necesário escolher as definições do funcionamento da mesma. Quanto mais segmentada for a sua campanha, maiores serão as oportunidades de você obter sucesso e, ao mesmo tempo, otimizar seus custos com a publicidade.</p>
  <p>No menu Detalhes é possível escolher regiões, horários de interesse, a frequência com que os anúncios serão exibidos, os tipos de dispositivos (computadores, tablets, celulares) entre outras opções importantes. Veja abaixo, alguns dos principais e mais importantes itens a serem configurados:</p>
  <h3>Redes</h3>
  <p>Os anúncios podem ser exibidos nos resultados de busca do Google ou também em site parceiros.</p>
  <p><img src="<?php echo $dominio; ?>imagens/tutorial-adwords/configuracoes-da-campanha.png" alt="redes de anuncios" /></p>
  <h3>Dispositivos</h3>
  <p>Selecione os dispositivos que mais se aproximam do perfil do seu público-alvo. Leve em consideração o seu investimento no Google.</p>
  <p><img src="<?php echo $dominio; ?>imagens/tutorial-adwords/dispositivos.png" alt="dispositivos" /></p>
  <h3>Locais</h3>
  <p>A região de exibição de anúncios pode ser definida por país, estado ou cidade. Se o seu produto/serviço não atinge todo o estado, otimize seus gastos selecionando apenas a exibição de anúncios para a <strong>cidade</strong> desejada.</p>
  <p><img src="<?php echo $dominio; ?>imagens/tutorial-adwords/locais.png" alt="exibição de anuncio por local" /></p>
  <p>As opções avançadas de locais permite que você segmente ou exclua quais serão as pessoas que poderão visualizar seus anúncios, com base no local em que elas estão.</p>
  <p><img src="<?php echo $dominio; ?>imagens/tutorial-adwords/local-segmentar.png" alt="segmentação por local" /></p>
  <h3>Idioma</h3>
  <p>Uma boa opção é deixar todos os idiomas selecionados, logo, independentemente da configuração de idioma do navegador e do computador do usuário, os anúncios serão exibidos.</p>
  <p><img src="<?php echo $dominio; ?>imagens/tutorial-adwords/idiomas.png" alt="segmentação por idiomas" /></p>
  <h3>Programação de anúncios por data e horário</h3>
  <p>A data de início aparece no momento da criação da conta e a de término pode ser definida de acordo com sua preferência. Se nenhuma data de término for selecionada, os anúncios param de ser exibidos somente quando as campanhas forem pausadas manualmente ou quando não houver mais saldo no sistema Adwords.</p>
  <p><img src="<?php echo $dominio; ?>imagens/tutorial-adwords/programacao-data-horario.png" alt="agendamento da campanha" /></p>
  <p>Na programação de anúncios, você define se eles serão exibidos por 24h ou em horário e dias específicos.</p>
  <p><img src="<?php echo $dominio; ?>imagens/tutorial-adwords/programacao-anuncios.png" alt="programação dos anuúncios" /></p>
  <h3>Exibição de anúncios</h3>
  <p>Os anúncios serão exibidos nas buscas de acordo com a rotação selecionada.</p>
  <p>A opção <strong>alternar uniformente</strong> é uma das mais indicadas para campanhas novas.O ideal é ter dois anúncios por grupo. Logo, ao optar por essa rotação, o sistema dará a mesma preferência de exibição para ambos os anúncios ativos dentro do grupo e, somente após 90 dias, fará a exibição com base no desempenho de cliques e conversões que cada um apresentar.</p>
  <p><img src="<?php echo $dominio; ?>imagens/tutorial-adwords/exibicao-anuncios.png" alt="exibição dos anúncios" /></p>
  <div class="tutorial_int_banner_botton">A Seo Marketing é uma agência especializada em marketing de busca.
   Oferecemos um pacote de serviço SEO, links patrocinados, consultoria em Google Analytics e landings pages para tornar o Google na sua ferramenta de negócio mais lucrativa e eficiente.<br/> <span class="destaque">Se interessou?</span></div>
 </div>
 <div class="tutorial_seo_secundario">
  <div class="destaque_tut_adw">
   <h3>Destaques desta página</h3>
   <ul class="ul_destaque_tut_adw">
    <li>Tipos de rede de anúncio</li>
    <li>Segmentação por idioma</li>
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