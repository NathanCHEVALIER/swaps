<?php
	
	$page ='connexion';
	include('../L2C14/14_09_16_16-24.php');

	
	if($verificateur_etat == 1)
	{
		header('Location: /fil-rouge/');
		exit();
	}
	elseif($verificateur_etat == 2)
	{
		if(!empty($_POST['email']) AND !empty($_POST['password']))
		{
			$email = htmlspecialchars($_POST['email']);
			$mdp = htmlspecialchars($_POST['password']);
			$var1 = strlen($mdp);
			$var2 = $var1*21;
			$var3 = $var1*$var1;
			$var4 = $var2 -$var3;
			$var5 = strtoupper($mdp);
			$var6 = sha1($var5);
			$var7 = md5($mdp);
			$var8 = $mdp.$var4;
			$var9 = substr($var8, 3, 7);
			$var10 = sha1($var9);
			$var11 = $var6.$var7.$var10;
			$var12 = substr($var11, 0, $var4);
			$passcrypt = $var12.$var11;

			include('modele.php');
			
			if($count == 1)
			{
				$_SESSION['ID'] = $donnees['dazibao'];
				$_SESSION['id'] = $donnees['dazibao'];
				$_SESSION['pseudo'] = $donnees['decapode'];
				$_SESSION['nom'] = $donnees['decati'];
				$_SESSION['prenom'] = $donnees['depressurier'];
				$_SESSION['email'] = $donnees['desopilant'];
				$_SESSION['profil'] = $donnees['dessication'];
				$_SESSION['niv'] = $donnees['diastole'];
				$_SESSION['type'] = $donnees['diatribe'];
				$_SESSION['accueil'] = $donnees['enferges'];

				$partie1 = substr(str_shuffle('123456789987654321'), 0, 8);
				$partie2 = bin2hex(openssl_random_pseudo_bytes(15));
				$partie1crypt = $partie1 * 5;
				$partie2crypt = substr(hash('sha512', $partie2), 0, 20);
				$ticket1 = "".$partie1."".$partie2."";
				$ticket2 = "".$partie1crypt."".$partie2crypt."";
				$_SESSION['version'] = $ticket1;
				setcookie("lang", $ticket2, time()+3600, "/", "", false, true);
				$verificateur_etat = 1;
				
				if($donnees['enferges'] == 2)
				{
					header('Location: /fil-rouge/');
					exit();
				}
				elseif($donnees['enferges'] == 3)
				{
					header('Location: /tendances/');
					exit();
				}
				/*elseif($donnees['enferges'] == 4)
				{
					header('Location: profil.php?id='.$_SESSION["id"].'');
					exit();
				}*/
				else
				{
					header('Location: /actu/');
					exit();
				}
			} 
			else
			{	
				$vue_type = 1;
				include('vue-fr.php');
			}
		}
		else
		{
			$vue_type = 1;
			include('vue-fr.php');	
		}
	}
	else
	{
		header('Location: ../index.php');
		exit();
	}
?>