<?php
	
	$page = 'activation';
	include('../L2C14/14_09_16_16-24.php');

	
	if($verificateur_etat == 1)
	{
		header('Location: /fil-rouge/');
		exit();
	}
	elseif($verificateur_etat == 2)
	{
		$req = $bddL7C13->prepare('SELECT * FROM dactyle WHERE dazibao = :id AND dichotomie = :cle');
		$req->execute(array('id' => $_GET['id'], 'cle' => $_GET['cle'],));
		$donnees = $req->fetch();

		if($donnees['dierese'] == '1')
		{
			$vue_type = 1;
			include('vue-fr-activation.php');
		}
		elseif($_GET['cle'] == $donnees['dichotomie'])
		{
			$req2 = $bddL7C13->prepare('UPDATE dactyle SET dierese = 1, diglossie = NOW() WHERE dazibao = :id AND dichotomie = :cle');
			$req2->execute(array('id' => $donnees['dazibao'], 'cle' => $_GET['cle'],));

			/*$req3 = $bddL7C13->prepare('INSERT INTO dactyle (decapode, desinence, desopilant, dessication, diaspora, diastole, diatribe, dichotomie, dierese)VALUES(:pseudo, :pass, :email,  :profil, :couverture, 1, :type, :cle, 0)');
			$req3->execute(array('pseudo' => $pseudo,
									'pass' => $passcrypt,
									'email' => $email,
									'profil' => 'base.jpg',
									'couverture' => 'base.jpg',
									'type' => 'profil',
									'cle' => $cle,
									));*/
								
			mkdir('../ressources/images/profil/'.$donnees['dazibao'].'', 0777, true);
			mkdir('../ressources/images/posts/'.$donnees['dazibao'].'', 0777, true);
			mkdir('../ressources/images/couverture/'.$donnees['dazibao'].'', 0777, true);
			$source = "../ressources/images/profil_base.jpg";
			$destination = "../ressources/images/profil/".$donnees['dazibao']."/profil_base.jpg";
			copy($source, $destination) ;
			$source2 = "../ressources/images/couv_base.jpg";
			$destination2 = "../ressources/images/couverture/".$donnees['dazibao']."/couv_base.jpg";
			copy($source2, $destination2) ;
								
			$_SESSION['ID'] = $donnees['dazibao'];
			$_SESSION['id'] = $donnees['dazibao'];
			$_SESSION['pseudo'] = $donnees['decapode'];
			$_SESSION['nom'] = $donnees['decati'];
			$_SESSION['prenom'] = $donnees['depressurier'];
			$_SESSION['email'] = $donnees['desopilant'];
			$_SESSION['profil'] = $donnees['dessication'];
			$_SESSION['niv'] = $donnees['diastole'];
			$_SESSION['type'] = $donnees['diatribe'];

			$partie1 = substr(str_shuffle('123456789987654321'), 0, 8);
			$partie2 = bin2hex(openssl_random_pseudo_bytes(15));
			$partie1crypt = $partie1 * 5;
			$partie2crypt = substr(hash('sha512', $partie2), 0, 20);
			$ticket1 = "".$partie1."".$partie2."";
			$ticket2 = "".$partie1crypt."".$partie2crypt."";
			$_SESSION['version'] = $ticket1;
			setcookie("lang", $ticket2, time()+86400, "/", "", false, true);
			$verificateur_etat = 1;
				
			header('Location: /actu');
			exit();
		}
		else
		{
			$vue_type = 2;
			include('/inscription/vue-fr-activation.php');
		}
	}
	else
	{
		header('Location: /index.php');
		exit();
	}
?>