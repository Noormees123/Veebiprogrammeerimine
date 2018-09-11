<?php
	echo "See on minu esimene php";
	$firstName = "Roland";
	$lastName = "Greebe";
	$dateToday = date("d.m.Y");
	echo $dateToday;
	$hourNow = date("G");
	$partOfDay = "";
		if ($hourNow < 8) {
		$partOfDay = "varane hommik";
	}
	if ($hourNow >= 8 and $hourNow < 16) {
		$partOfDay = "koolipäev";
	}
	if ($hourNow >= 16) {
		$partOfDay = "ilmselt vabaaeg";
	}
	?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $firstName; echo " "; echo $lastName; ?>, õpib</title>
</head>
<body>
  <h1><?php echo $firstName . " " . $lastName; ?>, IF18</h1>
  <p>See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames, ei pruugi parim välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p>
  <?php echo "<p>Tänane kuupäev on: " . $dateToday .".</p>";
		echo "<p>Lehe avamsie hetkel oli kell: " . date("H:i:s") .". Käes oli " . $partOfDay .".</p> \n";
  
  ?>
      <!--img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoome">-->
	<img src="../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoome">
	<p>Mul on ka sõber, kes teeb oma <a href="../../~mariaru/">veebi.</a></p>
	</body>
	</html>