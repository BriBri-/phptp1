<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Donne la bagnole !! </title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
		<style type="text/css">
			body{
				width: 60%;
				margin-left: 20%;
			}

			.answer{

				font-size: 20px;
			}
			.good{
				color:#78DA5F;
			}
			.bad{
				color: #DD002D;
			}

			form p{
				font-size: 25px;
				color: #3598D4;
			}

			.submit{
				margin-left: 400px;
			}

			.git{
				color: #3598D4;
				display: block;
				margin-top: 50px;
				margin-bottom: 50px;
			}

		</style>
		
		</head>

	<body>
		<div>
		<h1>Allez papa fais pas le batard j'ai besoin de la caisse...</h1>
		
		<form method="get" class="pure-form">
			
				<p>Pour emmener le petit Bryan aux putes.</p> 
				<input type="radio" name="bryan" value="true" id="bryan_true" required="required" <?php echo ($bryan=='true')?'checked':'' ?> >
				<label class="good" for="bryan_true">D'accord</label>
				<input type="radio" name="bryan" value="false" id="bryan_false" required="required" <?php echo ($bryan=='false')?'checked':'' ?>>
				<label class="bad" for="bryan_false">Bof</label>
				
				
				<p>Pour montrer à un platane qui est le patron.</p> 
				<input type="radio" name="platane" value="true" required="required" id="platane_true" <?php echo ($platane=='true')?'checked':'' ?> >
				<label class="good" for="platane_true">Ma foi pourquoi pas</label>
				<input type="radio" name="platane" value="false" required="required" id="platane_false" <?php echo ($platane=='false')?'checked':'' ?> >
				<label class="bad" for="platane_false">Wowowowowo t'es malaaaaaat!</label>
				
				
				<p>Pour y installer des grosses jantes alu et des néons sur les essuie-glaces.</p> 
				<input type="radio" name="tuning" value="true" required="required" id="tuning_true" <?php echo ($tuning=='true')?'checked':'' ?> >
				<label  class="good" for="tuning_true">Blindey!</label>
				<input type="radio" name="tuning" value="false" required="required" id="tuning_false" <?php echo ($tuning=='false')?'checked':'' ?> >
				<label class="bad" for="tuning_false">Jamais!</label>
			
			
			
				<p>Pour aller au concert de Sexion d'Assaut.</p> 
				<input type="radio" name="concert" value="true" required="required" id="concert_true" <?php echo ($concert=='true')?'checked':'' ?> >
				<label class="good" for="concert_true">Ok</label> 
				<input type="radio" name="concert" value="false" required="required" id="concert_false" <?php echo ($concert=='false')?'checked':'' ?> >
				<label class="bad" for="concert_false">Heu ou pas</label>
			
			
				<p>Pour aller sauver la veuve et l'orphelin.</p> 
				<input type="radio" name="sauver" value="true" required="required" id="sauver_true" <?php echo ($sauver=='true')?'checked':'' ?> >
				<label class="good" for="sauver_true">Mais bien sûr</label> 
				<input type="radio" name="sauver" value="false" required="required" id="sauver_false" <?php echo ($sauver=='false')?'checked':'' ?> >
				<label class="bad" for="sauver_false">Hors de question</label>
				
				
				<p>Heu, pour la laver évidemment...</p> 
				<input type="radio" name="laver" value="true" required="required" id="laver_true" <?php echo ($laver=='true')?'checked':'' ?> >
				<label class="good" for="laver_true">Heu oui</label>
				<input type="radio" name="laver" value="false" required="required" id="laver_false" <?php echo ($laver=='false')?'checked':'' ?> >
				<label class="bad" for="laver_false">Heu non</label>
			
			
				<input class="submit" type="submit" value="Zyva dis oui!">
			
		</form>

		<?php
			error_reporting(E_WARNING | E_ERROR);
		
			if ( isset($_GET['bryan']) && isset($_GET['platane']) && isset($_GET['tuning']) && isset($_GET['concert']) && isset($_GET['sauver']) && isset($_GET['laver']) ) {
			
				$bryan = $_GET["bryan"];$platane = $_GET["platane"];$tuning = $_GET["tuning"];$concert = $_GET["concert"];$sauver = $_GET["sauver"];$laver = $_GET["laver"];
				
				if((isset($bryan) && $bryan =="false") && (isset($platane) && $platane =="false") && (isset($tuning) && $tuning =="false") && (isset($concert) && $concert =="false") && (isset($sauver) && $sauver =="false") && (isset($laver) && $laver =="true")){
					echo "<div class='answer bad'> <p>Comment ça ma voiture est sale ??!!??</p> </div>";
				}
				
				else if((isset($bryan) && $bryan =="true") && (isset($platane) && $platane =="false") && (isset($tuning) && $tuning =="true") && (isset($concert) && $concert =="true") && (isset($sauver) && $sauver =="false") && (isset($laver) && $laver =="false")){
					echo "<div class='answer good'> <p>T'es vraiment un bon gamin allez prends les clés.</p> <img src='http://imalbum.aufeminin.com/album/D20070416/284343_63E8BEPPWVGYU5PCJZTDLL4LRPZG2G_22_H203433_L.jpg' width='400' /> </div>";
				}
				else{
					echo "<div class='answer bad'> <p>Jamais de la vie dégage!!! </p></div>";
				}
			}
			
			
		?>

		<a class="git" href="https://github.com/BriBri-/phptp1">Code sur Github</a>

		
		</div>
	</body>
</html>