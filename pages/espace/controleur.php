<?php

    //vérification, système connexion, système des visites
	$page = 'membre';
	include("../L2C14/14_09_16_16-24.php");

	if($verificateur_etat == 1)
	{
		$verif = $bddL7C13->prepare("SELECT d.*, e.* FROM dactyle d INNER JOIN ebalacon e ON d.dazibao = e.ebeyliere WHERE d.dazibao = :id AND d.decapode = :pseudo AND d.diatribe = 'espace' AND d.dierese = 1");
        $verif->execute(array('id' => $_GET['id'], 'pseudo' => $_GET['pseudo']));
        $datauser = $verif->fetch();
        $verifs = $verif->rowCount();
        
        if($verifs == 1) {
            if(strlen($datauser['ecaude']) >= 500) {
                $description = substr($datauser['ecaude'], 0, 500).' ...';
            }
			else {
				$description = 'Aucune description';
			}
			$id = $_GET['id'];
            include("modele.php");
            include("vue-fr.php");
        }
		else {
			echo'erreur';
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