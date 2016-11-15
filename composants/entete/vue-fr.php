<?php include('fonctions.php');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="/ressources/css/style_entete.css" />
		<link rel="stylesheet" href="/ressources/css/style_entete_supp.css" />
		<link rel="stylesheet" href="/ressources/css/style-general.css" />
		<link rel="icon" href="/ressources/images/logo_swaps.png">
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:400' rel='stylesheet' type='text/css'>
		<title>Swaps</title>
	</head>

	<body>

	<!-- Entête -->
			
		<div class="sous_entete">
			<div id="entete">
				<div id="cadre1">
					<div id="cadre2">
                        <!--Logo-->
					</div>
					<div id="cadre3">
						<form id="form_recherche" method="post" action="/recherche/" >
							<input id="barre_recherche" placeholder="Lancer une recherche" size="60px" type="search" name="keywords" autocomplete="off" />
							<input type="submit" name="bouton_recherche" class="bouton_recherche" value="" />
						</form>
                        <span id="search_result_cadre">
                            Résultats instantannés
                        </span>
			        </div>
				</div>
				<div id="cadre4">
                    <div id="cadre_mini_profil_entete" >
						<div id="mini_profil_entete">
							<img class="mini_profil_img_entete" src="/ressources/images/profil/<?php echo $_SESSION['id'];?>/profil_<?php echo $_SESSION['profil'];?>" />
						</div>
						<div id="menu_entete_voyant_general"></div>
					</div>
				</div>
			</div>
		</div>

	<!-- Menu -->

	<div id="sous_menu_entete">
		<a href="/actu/">Actu</a>
		<a href="/fil-rouge/" >Fil rouge</a>
		<a href="/tendances/" >Tendances</a>
		<a href="/abonnements/">Abonnements</a>
	</div>

	<!-- Menu entete -->

        <div id="menu_entete">
				<div id="triangle_entete">
				<div id="triangle1_entete">
				</div>
				<div id="triangle2_entete">
				</div>
			</div>
			<div id="contenu_menu_entete">
				<div id="entete_menu_entete">
					<div id="info_menu_entete">
						<div class="mini_profil_menu_entete">
							<img class="mini_profil_img_entete" src="/ressources/images/profil/<?php echo $_SESSION['id'];?>/profil_<?php echo $_SESSION['profil'];?>" />
						</div>
						<div id="infos_menu_entete">
							<div class="lien_nom_entete" >
								<a href="/<?php echo $_SESSION['type'].'/'.$_SESSION['pseudo'].'-'.$_SESSION['id'].'/';?>">
									<?php echo $_SESSION['pseudo'] ?>
								</a>
							</div>
							<div class="date_entete">
								Vendredi 13 Août
							</div>
						</div>
						<div id="button_gest_comptes" >
						</div>
					</div>
					<div id="gest_comptes" >
						<div>
							<div><?php echo $nbcomptes;?> espaces associés à ce compte</div>
							<div></div>
						</div>
						<div>
							<?php
								while($dataespace = $req->fetch()) {
								?>
									<div class="gest_espaces">
										<div>
											<img src="/ressources/images/profil/<?php echo $dataespace['dazibao'];?>/profil_<?php echo $dataespace['dessication'];?>" />
										</div>
										<div >
											<a href="/<?php echo $dataespace['diatribe'].'/'.$dataespace['decapode'].'-'.$dataespace['dazibao'].'/';?>">
												<?php echo $dataespace['decapode'];?>
											</a>
										</div>
									</div>
								<?php
								}
							?>
						</div>						
					</div>
					<div id="commande_menu_entete">
						<div id="menu_entete_button_notifications">
							<div id="menu_entete_voyant_notifications" ></div>
						</div>
						<div id="menu_entete_button_messages">
							<!--<div id="menu_entete_voyant_messages" >!</div>-->
						</div>
						<div id="menu_entete_button_reglages">
							<!--<div id="menu_entete_voyant_reglages" ></div>-->
						</div>
						<div id="menu_entete_button_plus">
							<!--<div id="menu_entete_voyant_plus" ></div>-->
						</div>
						<div id="menu_entete_marge_commande"></div>
					</div>
				</div>
				<div class="menu_entete_slider">
					<div id="menu_entete_contener">
						<div class="frame" >
							<span id="refreshforvuenotif" ></span>
							<div id="menu_entete_contenu_notifications" >
								<div class="notification_entete">
									
								</div>
							</div>
						</div>
						<div class="frame" >
							<div id="menu_entete_contenu_messages" >
								La messagerie Swaps est indisponible!
							</div>
						</div>
						<div class="frame" >
							<div id="menu_entete_contenu_reglages" >
								<div id="menu_entete_reglages_opt1">
									<div id="menu_entete_reglages_texte" >Mode nuit</div>
										<div class="onoffswitch1">
										    <input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1">
										    <label class="onoffswitch1-label" for="myonoffswitch1">
										        <span class="onoffswitch1-inner"></span>
										        <span class="onoffswitch1-switch"></span>
										    </label>
										</div>
									</div>
									<!--<div id="menu_entete_reglages_opt2">
										<div id="menu_entete_reglages_texte" >Mode éco</div>
										<div class="onoffswitch2">
										    <input type="checkbox" name="onoffswitch2" class="onoffswitch2-checkbox" id="myonoffswitch2">
										    <label class="onoffswitch2-label" for="myonoffswitch2">
										        <span class="onoffswitch2-inner"></span>
										        <span class="onoffswitch2-switch"></span>
										    </label>
										</div>
									</div>-->
									<div id="menu_entete_reglages_opt3">
										<div id="menu_entete_reglages_texte" >Rechargement auto. notifs.</div>
										<div class="onoffswitch3">
										    <input type="checkbox" checked name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3">
										    <label class="onoffswitch3-label" for="myonoffswitch3">
										        <span class="onoffswitch3-inner"></span>
										        <span class="onoffswitch3-switch"></span>
										    </label>
										</div>
									</div>
									<a href="/parametres/" style="margin-top: 50px;" >Paramètres</a><br/>
								</div>
							</div>
							<div class="frame" >
								<div id="menu_entete_contenu_plus">
									<a href="/manager/contacts.php" target="blank" class="lien_menu_entete" >Contacter SWAPS</a>
									<a href="/manager/contacts.php?motif=erreur" target="blank" class="lien_menu_entete" >Signaler une erreur</a>
									<a href="/manager/contacts.php?motif=abus" target="blank" class="lien_menu_entete" >Signaler un abus</a>
									<a href="/manager/contacts.php?motif=aider" target="blank" class="lien_menu_entete" >Aider au dévelopement</a>
									<a href="/manager/contacts.php?motif=idee" target="blank" class="lien_menu_entete" >Proposer des idées</a>
									<hr />
									<a href="/deco/" class="lien_menu_entete" >Déconnexion</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
			include("../composants/viewer/vue-fr.php");
			?>
	<script src="https://code.jquery.com/jquery.min.js"></script>
    <script>
		$(function(){
			$("#menu_entete").hide();
			//$("#sous_menu_entete").hide();

			//Menu de gestion

			$("#mini_profil_entete").click(function() {
				$("#menu_entete").slideToggle(550);
				$("#sous_menu_entete").animate({marginLeft: '-23%'}, 500);
			});

			//Gestion des comptes

			$("#button_gest_comptes").click( function(){
				$("#gest_comptes").slideToggle(300);
			});

			//Menu Swaps
			
			var visibilite_menu = 1;
			$("#cadre2").click( function(){
				if( visibilite_menu == 1 ) {
					visibilite_menu++;
					$("#sous_menu_entete").animate({marginLeft: '0%'}, 500);
					$("#menu_entete").slideUp(550);
				}
				else {
					visibilite_menu--;
					$("#sous_menu_entete").animate({marginLeft: '-23%'}, 500);
				}
			});

			//Recherche instantannée

			$("#barre_recherche").focusin( function(){
				$("#barre_recherche").animate({width: '89%'}, 300);
				$("#search_result_cadre").delay(300).slideDown(400);
				$("#menu_entete").slideUp(550);
				$("#sous_menu_entete").animate({marginLeft: '-23%'}, 500);
			});

			$("#barre_recherche").focusout( function(){
				$("#search_result_cadre").delay(400).slideUp(400);
				$("#barre_recherche").delay(800).animate({width: '50%'}, 300);
			});

			$("#barre_recherche").on('change keyup paste', function(){
				$("#search_result_cadre").load('/composants/entete/fonctions.php', {action: 2, keyword: $("#barre_recherche").val()});
			});


			//Gestion des Comptes et espaces rouges

			$("#gest_comptes div:first-child div:nth-child(2)").click(function() {
				$('#cadre_post_view').fadeIn(300);
				$("#gest_comptes").slideUp(300);
				$("#menu_entete").slideUp(300);
				$('body').css('overflow', 'hidden');
				$('.zone_de_texte_view').load('/composants/entete/fonctions.php', {action: 1});
			});

			$("#croix_close_post").click(function() {
				$('#cadre_post_view').fadeOut(300);
				$('body').css('overflow', 'auto');
				$('.post_charge').replaceWith("<p id='loader_post'>Chargement du contenu en cours </p><img id='loader_post_img' src='/ressources/images/loader.gif' width='10%' alt='loader' />");
			});

			//Menu entete
			
			$("#menu_entete_button_notifications").click( function(){
				$("#menu_entete_contener").animate({marginLeft: '0%'}, 300);
				$("#menu_entete_marge_commande").animate({marginLeft: '0%'}, 200);
			});
			$("#menu_entete_button_messages").click( function(){
				$("#menu_entete_contener").animate({marginLeft: '-100%'}, 300);
				$("#menu_entete_marge_commande").animate({marginLeft: '25%'}, 200);
			});
			$("#menu_entete_button_reglages").click( function(){
				$("#menu_entete_contener").animate({marginLeft: '-200%'}, 300);
				$("#menu_entete_marge_commande").animate({marginLeft: '50%'}, 200);
			});
			$("#menu_entete_button_plus").click( function(){
				$("#menu_entete_contener").animate({marginLeft: '-300%'}, 300);
				$("#menu_entete_marge_commande").animate({marginLeft: '75%'}, 200);
			});

			//Mise à jour notifications

			var nbre_notifications_menu_entete = $("#nbre_notifications_menu_entete").text();
			$("#menu_entete_voyant_notifications").text(nbre_notifications_menu_entete);
			var nbre_messages_menu_entete = 13;
			var nbre_total_notifs_menu_entete = nbre_notifications_menu_entete + nbre_messages_menu_entete;
            $("#menu_entete_voyant_general").text(nbre_total_notifs_menu_entete);
			
			function MAJnotifs(){
				if($("#menu_entete_contenu_notifications").is(':hidden'))
				{
					if($("#myonoffswitch3").is(':checked')){
						$( "#menu_entete_contenu_notifications" ).load( "/composants/entete/getnotifs.php", function() {
							var nbre_notifications_menu_entete = $("#nbre_notifications_menu_entete").text();
							$("#menu_entete_voyant_notifications").text(nbre_notifications_menu_entete);
						});
					}
				}

				var nbre = $("#menu_entete_voyant_messages").text();
				var nbre_total_notifs_menu_entete = $("#menu_entete_voyant_notifications").text() + $("#menu_entete_voyant_messages").text();
                $("#menu_entete_voyant_general").text(nbre_total_notifs_menu_entete);
			};

			MAJnotifs();
			setInterval(MAJnotifs, 2000);

			$("#menu_entete_button_notifications").click( function(){
				$('#refreshforvuenotif').load('/composants/entete/fonctions.php', {action: 3});
			});

			//Réglages

			$("#myonoffswitch1").change( function(){
				if($("#myonoffswitch1").is(':checked')){
					$("body").css('filter', 'sepia(0.3)').css('-webkit-filter', 'sepia(0.3)');
				}
				else{
					$("body").css('filter', 'sepia(0)').css('-webkit-filter', 'sepia(0)');
				}
			});


		});

	</script>
	</body>
</html>