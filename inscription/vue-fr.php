<!DOCTYPE html>
<html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="/ressources/images/logo_swaps.png">
		<link rel="stylesheet" href="/ressources/css/style_secondaire.css" />
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		<title>Inscription</title>
	</head>

	<body>

	<?php
	if($vue_type == 5)
	{
	?>
		<!--Entete>-->

		<header>
			<div id="swaps_entete" >
				<div id="swaps_logo" >
					<!--Logo-->
				</div>
				<div id="swaps_titre" >
					waps
				</div>
			</div>
		</header>
		
		<p>
			Un mail de confirmation vient de vous être envoyé<br />
			Veuillez consulter votre messagerie mail<br />
			Penser à regarder également les boîtes "Spam" ou "Publicité"<br /><br />
			<a href="/" >Page d'accueil</a>
		</p>
			

	<?php	
	}
	elseif($vue_type == 1 OR $vue_type == 2 OR $vue_type == 3 OR $vue_type == 4 OR $vue_type == 6 OR $vue_type == 7)
	{
	?>

	<!--Entete>-->

		<header>
			<div id="swaps_infos" >
				<div id="swaps_logo" >
					<!--Logo-->
				</div>
				<div id="swaps_titre" >
					waps
				</div>
			</div>
			<div id="swaps_action" >
				<div id="bouton_connexion">
					Connexion
				</div>
				<br />
				<div id="bouton_inscription">
					Inscription
				</div>
			</div>
		</header>

	<!--Formulaires-->

		<div id="cadre_formulaire">
			<div id="formulaire" style="margin-left: -100%" >
				<div class="formulaire" >
					<form method="post" action="/connexion/" id="connexion">
						<input type="text" name="email" placeholder=" Veuillez saisir votre e-mail" class="champ"></input>
						<input type="password" name="password" placeholder=" Veuillez saisir votre mot de passe" class="champ"></input>
						<input type="submit" name="bouton" value="Se connecter" class="bouton_form"></input>
					</form>
				</div>
				<div class="formulaire" >
					<form action="/inscription/" method="post" id="inscription"  >
						<?php
						if($vue_type == 1)
						{?>
							<input class="champ" size="50px" required placeholder="Ce pseudo est déjà utilisé" type="text" name="pseudo" />
						<?php
						}
						else
						{?>
							<input class="champ" size="50px" required placeholder="Pseudo" type="text" name="pseudo" />
						<?php
						}
						if($vue_type == 2)
						{?>
							<input class="champ" size="50px" required placeholder="Cet email est déjà utilisé" type="email" name="email" />
						<?php
						}
						else
						{?>
							<input class="champ" size="50px" required placeholder="Email"  type="email" name="email" />
						<?php
						}
						if($vue_type == 4)
						{?>
							<input class="champ" size="50px" required placeholder="Le mot de passe doit mesurer 6 à 20 caractères" type="password" name="password" />
						<?php
						}
						else
						{?>
							<input class="champ" size="50px" required placeholder="Mot de passe" type="password" name="password" />
						<?php
						}
						if($vue_type == 3)
						{?>
							<input class="champ" size="50px" required placeholder="Mot de passe différent" type="password" name="passwordrepeat" />
						<?php
						}
						else
						{?>
							<input class="champ" size="50px" required placeholder="Répétition du mot de passe" type="password" name="passwordrepeat" />
						<?php
						}
						?>
						<p>
							<input type="checkbox" checked name="conf" id="checkbox_conf"/>En m'inscrivant j'accepte les <a target="blank" href="/conditions-generales-d-utilisation">CGU</a> et certifie avoir lu les <a target="blank" href="/regle-de-confidentialitees">règles de confidentialité</a>
						</p>
						<?php
						if($vue_type == 6 OR $vue_type == 7)
						{?>
							<p>
								Une erreur est survenue! <br />
								Votre inscription n'as pas été prise en compte<br />
								Nous nous excusons pour la gêne occasionnée.<br /><br />
								<a href="/" >Page d'accueil</a>
							</p>
						<?php
						}
						else
						{?>
							<p>
								Veuillez corriger les erreurs<br />
								Déjà inscrit? Changez de formulaire.<br /><br />
								<a href="/" >Page d'accueil</a>
							</p>
						<?php
						}?>
						<input class="bouton_form" type="submit" value="Inscription" />
					</form>
				</div>
			</div>
		</div>
		
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script>
			$(function() {
				
				$("#bouton_connexion").click( function(){
					$("#formulaire").animate({marginLeft: '0%'}, 500);
				});

				$("#bouton_inscription").click( function(){
					$("#formulaire").animate({marginLeft: '-100%'}, 500);
				});

			});
		</script>
		<?php
		}
		else
		{

		}
		?>
	</body>
</html>