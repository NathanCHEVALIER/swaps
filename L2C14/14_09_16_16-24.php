<?php 

	session_start();
	if(!empty($_SESSION['version']) AND !empty($_COOKIE['lang']))
	{
		//Si les variables ont une valeur, on les protèges de diverses injections de codes
		$SESSION_ticket = htmlspecialchars($_SESSION['version']);//ticket de vérification de L'identité (anti failles)
		$SESSION_accueil = htmlspecialchars($_SESSION['accueil']);//Page d'accueil en redirection après connexion
		$SESSION_id = htmlspecialchars($_SESSION['id']);//id de l'utilisateur
		$COOKIE_ticket = htmlspecialchars($_COOKIE['lang']);//ticket de vérification de L'identité (anti failles)

		//on desencrypte le ticket de la SESSION
		$partie1 = substr($SESSION_ticket, 0, 8);
		$partie2 = substr($SESSION_ticket, 8);
		$partie1decrypt = $partie1 * 5;
		$partie2decrypt = substr(hash('sha512', $partie2), 0, 20);
		$decrypt = "".$partie1decrypt."".$partie2decrypt."";

		if($decrypt == $COOKIE_ticket)
		{
			
			//Si les ticket cryptés ont la même valeur, on en réencrypte pour la page suivante
			$partie1 = substr(str_shuffle('123456789987654321'), 0, 8);
			$partie2 = bin2hex(openssl_random_pseudo_bytes(15));
			$partie1crypt = $partie1 * 5;
			$partie2crypt = substr(hash('sha512', $partie2), 0, 20);
			$ticket1 = "".$partie1."".$partie2."";
			$ticket2 = "".$partie1crypt."".$partie2crypt."";
			$_SESSION['version'] = $ticket1;
			setcookie("lang", $ticket2, time()+86400, "/", "", false, true);
			$verificateur_etat = 1;
			//Enregistrement de la visite
			try
			{
				$bddL7C13 = new PDO('mysql:host=mysql.hostinger.fr;dbname=u631603650_87845;charset=utf8', 'u631603650_19691', 'P5+xnMYZx)5x9:6');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}

			try
			{
				$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u631603650_swap;charset=utf8', 'u631603650_swap', '719HGJJGH917');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}

			$navigateur = $_SERVER['HTTP_USER_AGENT'];
			$ipclient = $_SERVER['REMOTE_ADDR'];
			$req = $bdd->prepare('INSERT INTO vasiere(venaison, vantose, verbiage, vespassienne, vibrisse) VALUES(:page, :id_user, :ip, :navigateur, NOW())');
			$req->execute(array(
				'page' => $page,
				'id_user' => $_SESSION['id'],
				'navigateur' => $navigateur,
				'ip' => $ipclient,
				));
		}
		else
		{
			//Sinon on supprime les variables de stockage des tickets
			unset($_SESSION['version']);
			setcookie("lang", 'eng', time()-15);
			$verificateur_etat = 2;
			//Enregistrement de la visite
			try
			{
				$bddL7C13 = new PDO('mysql:host=mysql.hostinger.fr;dbname=u631603650_87845;charset=utf8', 'u631603650_19691', 'P5+xnMYZx)5x9:6');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}

			try
			{
				$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u631603650_swap;charset=utf8', 'u631603650_swap', '719HGJJGH917');
			}
			catch(Exception $e)
			{
				die('Erreur : '.$e->getMessage());
			}

			$navigateur = $_SERVER['HTTP_USER_AGENT'];
			$ipclient = $_SERVER['REMOTE_ADDR'];
			$req = $bdd->prepare('INSERT INTO vasiere(venaison, vantose, verbiage, vespassienne, vibrisse) VALUES(:page, :id_user, :ip, :navigateur, NOW())');
			$req->execute(array(
				'page' => $page,
				'id_user' => '0',
				'navigateur' => $navigateur,
				'ip' => $ipclient,
				));
		}
	}
	elseif(!empty($_COOKIE['version']))
	{
		$verificateur_etat = 1;
	}
	else
	{
		//Le visiteur n'est donc pas connecté
		$verificateur_etat = 2;
		//Enregistrement de la visite
		try
		{
			$bddL7C13 = new PDO('mysql:host=mysql.hostinger.fr;dbname=u631603650_87845;charset=utf8', 'u631603650_19691', 'P5+xnMYZx)5x9:6');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}

		try
		{
			$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u631603650_swap;charset=utf8', 'u631603650_swap', '719HGJJGH917');
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}

		$navigateur = $_SERVER['HTTP_USER_AGENT'];
		$ipclient = $_SERVER['REMOTE_ADDR'];
		$req = $bdd->prepare('INSERT INTO vasiere(venaison, vantose, verbiage, vespassienne, vibrisse) VALUES(:page, :id_user, :ip, :navigateur, NOW())');
		$req->execute(array(
			'page' => $page,
			'id_user' => '0',
			'navigateur' => $navigateur,
			'ip' => $ipclient,
			));
	}
?>