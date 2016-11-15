<?php

    //vérification, système connexion, système des visites
	$page = 'recherche';
	include("../L2C14/14_09_16_16-24.php");

	if($verificateur_etat == 1)
	{
		if(!empty($_POST['keywords'])) {
            $keywords = htmlspecialchars($_POST['keywords']);
            include("modele.php");
            
        include("vue-fr.php");
        }
        else {
            echo'veuillez entrer une valeur';
        }
        
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