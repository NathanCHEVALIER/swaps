 <!DOCTYPE html>
<html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="/ressources/images/logo_swaps.png">
		<link rel="stylesheet" href="/ressources/css/style_secondaire.css" />
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		<title>Validation</title>
	</head>

	<body>

	<?php
	if($vue_type == 2)
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
			Votre compte n'a pas été activé<br />
		    La clé de validation ne correspond pas<br />
			<a href="/" >Page d'accueil</a>
		</p>
			

	<?php	
	}
	elseif($vue_type == 1)
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
			<div id="formulaire" style="margin-left: 0%" >
				<div class="formulaire" >
					<form method="post" action="/connexion/" id="connexion">
                    	<p>
                            Votre compte est déjà actif !<br />
                            Vous pouvez vous connecter:
                        </p>
						<input type="text" name="email" placeholder=" Veuillez saisir votre e-mail" class="champ"></input>
						<input type="password" name="password" placeholder=" Veuillez saisir votre mot de passe" class="champ"></input>
						<input type="submit" name="bouton" value="Se connecter" class="bouton_form"></input>
					</form>
				</div>
				<div class="formulaire" >
					<form action="/inscription/" method="post" id="inscription"  >
						<label for="pseudo" id="label_pseudo"></label>			
						<input class="champ" size="50px" required placeholder="Pseudo" type="text" name="pseudo" />
						<label for="email" id="label_email"></label>			
						<input class="champ" size="50px" required placeholder="E-mail" type="email" name="email" />
						<label for="password" id="label_password"></label>
						<input class="champ" size="50px" required placeholder="Mot de passe" type="password" name="password" pattern=".{6,}" />
						<label for="passwordrepeat" id="label_passwordrepeat"></label>
						<input class="champ" size="50px" required placeholder="Répétition du mot de passe" type="password" name="passwordrepeat"  /> 
						<p>
							<input type="checkbox" checked name="conf" id="checkbox_conf"/>En m'inscrivant j'accepte les <a target="blank" href="/conditions-generales-d-utilisation">CGU</a> et certifie avoir lu les <a target="blank" href="/regle-de-confidentialitees">règles de confidentialité</a>
						</p>
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