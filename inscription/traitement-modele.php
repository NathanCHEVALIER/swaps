<?php
	
	$reqpseudo = $bddL7C13->prepare("SELECT * FROM dactyle WHERE decapode = :pseudo AND diatribe='membre' AND dierese = 1 ");
	$reqpseudo->execute(array('pseudo' => $_POST['pseudo']));
	$existpseudo = $reqpseudo->rowCount();

	$reqemail = $bddL7C13->prepare("SELECT * FROM dactyle WHERE desopilant = :email AND diatribe='membre' AND dierese = 1");
	$reqemail->execute(array('email' => $_POST['email']));
	$existemail = $reqemail->rowCount();
?>