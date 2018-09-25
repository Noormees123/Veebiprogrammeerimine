<?php
	//kutsume välja funkstsioonide faili
	require("functions.php");
	
	$notice = listallmessages();
	
	if (isset($_POST["submitMessage"])){
		if($_POST["message"] != "Siia sisesta oma sõnum..." and !empty($_POST["message"])){
			$message = test_input($_POST["message"]);
			$notice = saveamsg($message);
		} else {
			$notice = "Palun kirjuta sõnum.";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Anonüümsete sõnumite lugemine</title>
</head>
<body>
  <h1>Sõnumid</h1>
  <p>See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames, ei pruugi parim välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p>
  
  <?php
  $mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"],$GLOBALS["database"]);
	echo $notice;
  ?>
  
  
  <hr>
   
</body>
</html>