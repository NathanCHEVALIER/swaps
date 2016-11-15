<?php
	
	//vérification, système connexion, système des visites
	$page = 'home';
	include('L2C14/14_09_16_16-24.php');

	if($verificateur_etat == 1)
	{
		header('Location: /fil-rouge/');
		exit();
	}
	elseif($verificateur_etat == 2)
	{
		include('vue-fr.php');
	}
	else
	{
		header('Location: /ressources/error/403.php');
		exit();
	}
?>