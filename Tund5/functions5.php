<?php
	require("../../../config.php");
	$database = "if18_roland_gr_1";
	
	function savecats($msg){
		$notice = "";
		//serveri ühendus (server, kasutaja, parool, andmebaas)
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		//valmistan ette SQL käsu
		$stmt = $mysqli->prepare("INSERT INTO cass (nimi, v2rv, saba) VALUES (?, ?, ?)");
		echo $mysqli->error;
		//asendame SQL käsus küsimärgi päris infoga (andmetüüp,andmed ise)
		//s - string; i- integer; d -decimal e murdarv;
		$stmt->bind_param("ssi", $cname, $ccolor, $ctail);
		if ($stmt->execute()){
			$notice = 'andmed: "' .$msg .'" on salvestatud."';
		}	else {
				$notice = "Andmete salvestamisel on tekkinud viga: " .$stmt->error;
			}
		$stmt->close();
		$mysqli->close();
		return $notice;
	}	
	
	function listcats() {
		$msgHTML = "";
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"],$GLOBALS["database"]);
		$stmt = $mysqli->prepare("SELECT nimi, v2rv, saba FROM cass");
		echo $mysqli->error;
		$stmt->bind_result($readcname, $readccolor, $readctail);
		$stmt->execute();
		while($stmt->fetch()){
		$msgHTML .="<p>" .$msg ."</p>\n";	
		}
		$stmt->close();
		$mysqli->close();
		return $msgHTML;
	
	}
	
	//tekstsisestuse kontroll
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


?>