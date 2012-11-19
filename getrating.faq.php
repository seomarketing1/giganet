<?php
$score = "";
$vote = "";

$page = "";

if(!empty($_POST['name-page'])){$page = $_POST['name-page'];}


$userdb = "root";
	$pass = "zumbi011187";
	$host = "localhost";

	
	$con = mysql_connect($host, $userdb, $pass);
	mysql_select_db("site_seo", $con);
	
	$query = "Select*From score_page WHERE page_name='".$page."'";

$resultado = mysql_query($query) or die(mysql_error());;

$num = mysql_fetch_assoc($resultado) or die("noresult");

$score = $num["score"];
$vote = $num["vote"];

$resul = $score/$vote;

//echo $vote."|".$score;
?>

			<input type="hidden" id="score" name="score" value="<?php echo $score;?>" />
			<input type="hidden" id="vote" name="vote" value="<?php echo $vote;?>" />
			<input type="hidden" id="url" name="url"/>
			<input type="hidden" id="name-page" name="name-page" />
			<input name="star1" id="v1" <?php if($resul <2){echo "checked";}?>  type="radio" class="star"/>
			<input name="star1" id="v2" <?php if($resul >1 && $resul <3){echo "checked";}?> type="radio" class="star"/>
			<input name="star1" id="v3" <?php if($resul >2 && $resul <4){echo "checked";}?> type="radio" class="star"/>
			<input name="star1" id="v4" <?php if($resul >3 && $resul <5){echo "checked";}?> type="radio" class="star"/>
			<input name="star1" id="v5" <?php if($resul >4){echo "checked";}?> type="radio" class="star"/>
