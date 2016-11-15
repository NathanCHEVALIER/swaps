<?php

    //vérification, système connexion, système des visites
	$page = 'fil-rouge';
	include("../L2C14/14_09_16_16-24.php");

	if($verificateur_etat == 1)
	{
		include("modele.php");
		$filfav->execute(array('id' => $_SESSION['id']));
		$fil->execute(array('id' => $_SESSION['id']));
		include("vue-fr.php");
		$filfav->closeCursor();
	}
	elseif($verificateur_etat == 2)
	{
		echo 'Vous n\êtes pas connecté';
	}
	else
	{
		header('Location: /ressources/error/403.php');
		exit();
	}

?>