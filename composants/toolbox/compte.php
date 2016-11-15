<?php

    //vérification, système connexion, système des visites
	$page = 'inscription';
	include('../../L2C14/14_09_16_16-24.php');

	if($verificateur_etat == 1)
	{
		if(!empty($_POST['nom']) AND isset($_POST['description']) AND !empty($_POST['select_1_form_choix']) AND !empty($_POST['select_2_form_choix']) AND isset($_POST['select_3_form_choix']))
		{
			$nom = htmlspecialchars($_POST['nom']);
			$description = htmlspecialchars($_POST['descriptiono']);
			$select1 = htmlspecialchars($_POST['select_1_form_choix']);
			$select2 = htmlspecialchars($_POST['select_2_form_choix']);
			$select3 = htmlspecialchars($_POST['select_3_form_choix']);

			$req = $bddL7C13->prepare("SELECT * FROM dactyle WHERE decapode = :nom AND diatribe= 'zone' AND dierese = 1");
			$req->execute(array('nom' => $nom));
			$existname = $req->rowCount();
	
			if($existname != 0)
			{
				header('Location: /'.$_SESSION['type'].'/'.$_SESSION['pseudo'].'-'.$_SESSION['id'].'/');
				exit();
			}
			else
			{
				$req3 = $bddL7C13->prepare("INSERT INTO dactyle (decapode, decati, depressurier, desinence, desopilant, dessication, diaspora, diastole, diatribe, dierese)VALUES(:nom, :categorie, :souscategorie, :theme, :proprio,  'base.jpg', 'base.jpg', 1, 'espace', 1)");
				$req3->execute(array('nom' => $nom,
									'categorie' => $select1,
									'souscategorie' => $select2,
									'theme' => $select3,
									'proprio' => $_SESSION['ID'],
									));
				$id = $bddL7C13 -> lastInsertId();

				mkdir('../../ressources/images/profil/'.$id.'', 0777, true);
				mkdir('../../ressources/images/posts/'.$id.'', 0777, true);
				mkdir('../../ressources/images/couverture/'.$id.'', 0777, true);
				$source = "../../ressources/images/profil_spacebase.jpg";
				$destination = "../../ressources/images/profil/".$id."/profil_base.jpg";
				copy($source, $destination) ;
				$source2 = "../../ressources/images/couv_base.jpg";
				$destination2 = "../../ressources/images/couverture/".$id."/couv_base.jpg";
				copy($source2, $destination2) ;

				$_SESSION['id'] = $id;
				$_SESSION['pseudo'] = $nom;
				$_SESSION['profil'] = 'base.jpg';
				$_SESSION['couverture'] = 'base.jpg';
				$_SESSION['type'] = 'zone';

				header('Location: /'.$_SESSION['type'].'/'.$_SESSION['pseudo'].'-'.$_SESSION['id'].'/');
				exit();
			}
        }
		else
		{
			echo'erreur';
		}
	}
	elseif($verificateur_etat == 2)
	{
		header('Location: /');
		exit();
	}
	else
	{
		header('Location: /');
		exit();
	}
?>