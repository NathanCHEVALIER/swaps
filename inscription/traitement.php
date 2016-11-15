<?php
	
	//vérification, système connexion, système des visites
	$page = 'inscription';
	include('../L2C14/14_09_16_16-24.php');

	
	if($verificateur_etat == 1)
	{
		header('Location: /fil-rouge/');
		exit();
	}
	elseif($verificateur_etat == 2)
	{
		if(!empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['password']) AND !empty($_POST['passwordrepeat']) AND isset($_POST['conf']))
		{
			include('traitement-modele.php');
			$email = htmlspecialchars($_POST['email']);
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$password = htmlspecialchars($_POST['password']);
			$passwordrepeat = htmlspecialchars($_POST['passwordrepeat']);
			$longueurpassword = strlen($password);
	
			if($existpseudo != 0)
			{
				$vue_type = 1;
				include('vue-fr.php');
			}
			elseif ($existemail != 0) 
			{
				$vue_type = 2;
				include('vue-fr.php');
			}
			elseif ($passwordrepeat != $password) 
			{
				$vue_type = 3;
				include('vue-fr.php');
			}
			elseif ($longueurpassword < 6 OR $longueurpassword > 20 ) 
			{
				$vue_type = 4;
				include('vue-fr.php');
			}
			else
			{
				$cle = md5(microtime(TRUE)*100000);
				$mdp = $password;
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
						
				$req3 = $bddL7C13->prepare('INSERT INTO dactyle (decapode, desinence, desopilant, dessication, diaspora, diastole, diatribe, dichotomie, dierese)VALUES(:pseudo, :pass, :email,  :profil, :couverture, 1, :type, :cle, 0)');
				$req3->execute(array('pseudo' => $pseudo,
									'pass' => $passcrypt,
									'email' => $email,
									'profil' => 'base.jpg',
									'couverture' => 'base.jpg',
									'type' => 'membre',
									'cle' => $cle,
									));
				$count = $req3->rowCount();
				$id = $bddL7C13 -> lastInsertId();

				if($count == 1)
				{
					include('sendmail-fr.php');
					include('sendmail-goldmaster.php');
					$vue_type = 5;
					include('vue-fr.php');
				}
				else
				{
					$vue_type = 6;
					include('vue-fr.php');
				}
			}
		}
		else
		{
			$vue_type = 7;
			include('vue-fr.php');
		}
	}
	else
	{
		header('Location: /index.php');
		exit();
	}
?>							