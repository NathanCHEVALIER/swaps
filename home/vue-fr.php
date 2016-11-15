<!DOCTYPE html>
<html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="icon" href="/ressources/images/logo_swaps.png">
		<link rel="stylesheet" href="/ressources/css/style_accueil.css" />
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		<title>Bienvenue sur Swaps</title>
	</head>

	<body>

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
			<div id="formulaire">
				<div class="formulaire" >
					<form method="post" action="/connexion/" id="connexion">
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

	<!--Slider-->

		<div class="all_page">
			<div class="block_page">
				<section>
					<div id="slider" >
						<div class="slide">
							<div class="legend_slide">
								<h1>Echanger avec votre réseau</h1>
								<a href="#draw_your_network">En savoir plus</a>
								<hr />
								<h3>Partout autour du monde, avec vos amis ou des inconnus lorem ipsum........</h3>
							</div>
						</div>
					</div>
				</section>		
			</div>
		</div>

	<!--Conteneur -->

	<section>
		<div id="draw_your_network">
			<article>
				<h2>Il faut savoir semer pour récolter<h2><br /><br />
				<p>Un réseau exige des relations de réciprocité. Il est bâti sur l’échange, la confiance, l’estime pour les compétences et les spécificités de chacun.
				Il ne fonctionne que si chaque membre peut donner un jour à autrui autant ou plus que ce qu’il a lui-même reçu.<br /><br />
				Vous aussi, mettez vos compétences et vos connaissances au service des autres utilisateurs. 
				Le temps que vous aurez investi vous sera largement remboursé!
				</p>
			</article>
		</div>

			<article>
				<p>
			Internet est un formidable outil de partage à l’échelle mondiale. Cependant, son utilisation amène trop souvent à la violation de droits fondamentaux tels que votre vie privée.<br />
			Chez Swaps nous voulons que votre vie privée, notamment vos données vous appartiennent. Nous nous engageons à vous donner les pleins pouvoirs sur leur gestion, à ne jamais les analyser
			ou encore à les échanger à d'autres organismes.
			</p>
			</article>
	</section>

	<!--Pied de page -->
		
		<footer>
			<div class="infos_footer">
				<h4>A propos de Swaps</h4>
				<hr />
				<a class="lien_footer" target="blank" href="" >Présentation</a><br />
				<a class="lien_footer" target="blank" href="" >Inscription</a><br />
				<a class="lien_footer" target="blank" href="" >Chifres clés</a><br />
			</div>
			<div class="infos_footer">
				<h4>Mentions légales</h4>
				<hr />
				<a class="lien_footer" target="blank" href="/conditions-generales-d-utilisation" >CGU</a><br />
				<a class="lien_footer" target="blank" href="" >Vie privée / données</a><br />
				<a class="lien_footer" target="blank" href="/regle-de-confidentialitees" >Règles de confidentialitées </a><br />
			</div>
			<div class="infos_footer">
				<h4>Des questions</h4>
				<hr />
				<a class="lien_footer" target="blank" href="" >FAQ</a><br />
				<a class="lien_footer" target="blank" href="" >Forum</a><br />
				<a class="lien_footer" target="blank" href="" >Contact</a><br />
			</div>
			<div class="infos_footer">
				<h4>Partenaires</h4>
				<hr />
				<a class="lien_footer" target="blank" href="" >NC Web Studios</a><br />
				<a class="lien_footer" target="blank" href="" >Devenir Partenaire</a><br />
			</div>
			<div class="fooot">
				© Swaps 2016 - Tous droits réservés aux co-fondateurs B.STOCKER et N.CHEVALIER - Développé par NC Web Studios. - Liste des collaborateurs
			</div>
			<div class="fooot">
				Portail d'authentification des administrateurs et modérateurs
			</div>
		</footer>

	<!--Script jQuery -->
	
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="/ressources/js/plugins/jQuery_Inview.js"></script>
		<script>
			$(function() {

				var etat = 1;
				
				$("#bouton_connexion").click( function(){
					if($("#cadre_formulaire").is(':hidden')){
						if(etat == 1){
							$("#cadre_formulaire").slideToggle(500);
						}
						else{
							$("#formulaire").css('margin-left', '0%');
							$("#cadre_formulaire").slideToggle(500);
						}
					}
					else{
						if(etat == 1){
							$("#cadre_formulaire").slideToggle(500);
						}
						else{
							$("#formulaire").animate({marginLeft: '0%'}, 500);
						}
					}
					etat = 1;
				});

				$("#bouton_inscription").click( function(){
					if($("#cadre_formulaire").is(':hidden')){
						if(etat == 2){
							$("#cadre_formulaire").slideToggle(500);
						}
						else{
							$("#formulaire").css('margin-left', '-100%');
							$("#cadre_formulaire").slideToggle(500);
						}
					}
					else{
						if(etat == 2){
							$("#cadre_formulaire").slideToggle(500);
						}
						else{
							$("#formulaire").animate({marginLeft: '-100%'}, 500);
						}
					}
					etat = 2;
				});

				//Inclure vérification du formulaire

			});
		</script>
	</body>
</html>	