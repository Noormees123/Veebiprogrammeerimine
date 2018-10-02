<?php
require ("functions5.php");
$notice = listcats();


	if (isset($_POST["cname"]));{
		if (!empty($_POST["cname"])){
			$cats = test_input($_POST["cname"]);
			$notice = savecats($msg);
		}	else {
				$notice = "Sisesta kassi nimi.";
		}
	}
	if (isset($_POST["ccolor"]));{	
		if (!empty($_POST["ccolor"])){
			$cats = test_input($_POST["ccolor"]);
			$notice = savecats($msg);
		}	else {
				$notice = "Sisesta kassi värv.";
		}
	}
	if (isset($_POST["ctail"]));{	
		if (!empty($_POST["ctail"])){
			$cats = test_input($_POST["ctail"]);
			$notice = savecats($msg);
		}	else {
				$notice = "Sisesta kassi saba pikkus.";
		
		}
	}	
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kasside lisamine</title>
</head>
<body>
	<h1>Kassid plus</h1>
	<p>See leht on loodud <a href="http://www.tlu.ee" target="_blank">TLÜ</a> õppetöö raames, ei pruugi parim välja näha ning kindlasti ei sisalda tõsiseltvõetavat sisu!</p>
		<hr>
		<form method= "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label>Kasssi nimi:</label>
		<input type = "text" name = "cname">
		<label>Kassi värv:</label>
		<input type = "text" name = "ccolor">
		<label>Kasssi saba:</label>
		<input type = "text" name = "ctail">
		<br>
		<input type = "submit" name="submitdata" value="Salvesta">
	</form>
	<hr>
	<?php echo $notice; ?>
</body>
</html>
?>