<?php include('../composants/entete/controleur.php'); ?>
    <div class="block_page">
		<div class="entete_perso" >
			<div id="couverture" >
				<img id="couverture_img" src="/ressources/images/couverture/<?php echo $datauser['dazibao'];?>/couv_<?php echo $datauser['diaspora'];?>" />
			</div>
			<div id="profil">
				<img id="profil_img" src="/ressources/images/profil/<?php echo $datauser['dazibao'];?>/profil_<?php echo $datauser['dessication'];?>" />
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
					<?php 
					$id = $_GET['id'];
					include("../composants/abonnement/controleur.php");
					?>
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
	</body>
</html>