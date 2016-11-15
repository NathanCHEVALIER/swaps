<?php

    //vérification, système connexion, système des visites
	$page = 'tendances';
	include("../L2C14/14_09_16_16-24.php");

	if($verificateur_etat == 1)
	{
		include("modele.php");
		include("vue-fr.php");
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