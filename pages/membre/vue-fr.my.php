<?php include('../composants/entete/controleur.php'); ?>
    <div class="block_page">
		<div class="entete_perso" >
			<div id="couverture" >
				<img id="couverture_img" src="/ressources/images/couverture/<?php echo $datauser['dazibao'];?>/couv_<?php echo $datauser['diaspora'];?>" />
				<div id="bouton_changement_photo_couverture"></div>
			</div>
			<div id="profil">
				<img id="profil_img" src="/ressources/images/profil/<?php echo $datauser['dazibao'];?>/profil_<?php echo $datauser['dessication'];?>" />
				<div id="bouton_changement_photo_profil"></div>
			</div>
			<div id="pseudo" >
				<?php echo $datauser['decapode'];?>
			</div>
			<div id="bandeau_menu_perso" >
				<div id="menu_perso" >
					<!--<div class="cadre_lien_menu_perso" >
						Accueil
					</div>
					<!--<div class="cadre_lien_menu_perso" >
						Publications
					</div>
					<div class="cadre_lien_menu_perso" >
						Abonnements
					</div>
					<div class="cadre_lien_menu_perso" >
						Informations
					</div>-->-
				</div>
			</div>
            <div id="user_toolbox" >
                <div id="user_options">

                </div>
                <div id="user_infos">
                    <div id="user_chiffres">
                        <div class="user_chiffre_part" >
                            <span class="chiffre_user" >
                                <?php echo $nbrepub; ?>
                            </span>
                            publications
                        </div>
                        <div class="user_chiffre_part" >
                            <span class="chiffre_user" >
                                <?php echo $nbreabonne; ?>
                            </span>
                            abonnés
                        </div>
                        <div class="user_chiffre_part" >
                            <span class="chiffre_user" >
                                <?php echo $nbreabonnement; ?>
                            </span>
                            abonnements
                        </div>
                    </div>
                    <div id="user_description" >
                         <p><?php echo $description; ?></p>

                         <!--<a href="" >nathanchevalier.esy.es</a>-->
                    </div>
                </div>
            </div>
		</div>
	    <section>
				
		<?php

		$dir = __DIR__;
		$dir = explode('\pages', $dir);
		$path = $dir[0].'/composants/post/editeur.php';
		$idforpost = $_SESSION['id'];
		include("../composants/post/editeur.php");
					
				while ($donnees = $getposts->fetch())
				{
					$id_auteur = $donnees['dazibao'];
					$pseudo_auteur = $donnees['decapode'];
					$type_auteur = $donnees['diatribe'];
					$profil_auteur = $donnees['dessication'];
					$id_destinataire = $donnees['sujet_dazibao'];
					$type_destinataire = $donnees['sujet_diatribe'];
					$pseudo_destinataire = $donnees['sujet_decapode'];
					$id_post = $donnees['alezan'];
					$texte_post = $donnees['anaerobie'];
					$image_post = $donnees['androstone'];
					$id_post_relai = $donnees['andoran'];
					$type_post = $donnees['angor'];
					$date_post = $donnees['ambre'];

					include('../composants/post/controleur.php');
				}
				$getposts->closeCursor();
				?>

		</section>		
		<?php 
            include('../composants/viewer/vue-fr.php');
        ?>
    </div>
</div>
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script type="text/javascript" >
		    $(function() {

		    	var id = '<?php echo $_GET['id']; ?>'

				$('#bouton_changement_photo_couverture').click(function() {
				    $('#cadre_post_view').fadeIn(400);
				    $('body').css('overflow', 'hidden');
				    $('.zone_de_texte_view').load('/pages/membre/fonctions.php', { action: 3});
				});

				$('#bouton_changement_photo_profil').click(function() {
				    $('#cadre_post_view').fadeIn(400);
				    $('body').css('overflow', 'hidden');
				    $('.zone_de_texte_view').load('/pages/membre/fonctions.php', { action: 4});
				});

				$("#croix_close_post").click(function() {
				    $('#cadre_post_view').fadeOut(600);
				    $('body').css('overflow', 'auto');
				    $('.post_charge').replaceWith("<p id='loader_post'>Chargement du contenu en cours </p><img id='loader_post_img' src='images/fonctionnelles/loader.gif' width='10%' alt='loader' />");
				});

				$('.cadre_lien_menu_perso:eq(0)').click(function(){
					$('section').html("<p id='loader_post'>Chargement du contenu en cours </p><img id='loader_post_img' src='/ressources/images/loader.gif' width='10%' alt='loader' />");
			    	$('section').load('/pages/membre/fonctions.php', { id: id, action: 1});
				});

				$('.cadre_lien_menu_perso:eq(1)').click(function(){
					$('section').html("<p id='loader_post'>Chargement du contenu en cours </p><img id='loader_post_img' src='/ressources/images/loader.gif' width='10%' alt='loader' />");
					$('section').load('/pages/membre/fonctions.php', { id: id, action: 2});
				});

			});
		</script>
	</body>
</html>