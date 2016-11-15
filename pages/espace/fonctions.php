<?php

    if($_POST['action'] == 1 ) {
                
                $id = $_POST['id'];
                include('../../L2C14/01_11_16_19-08.php');
                include('../../composants/post/editeur.php');
                include('modele.php');
					
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

					include('../../composants/post/controleur.php');
				}
				$getposts->closeCursor();
    }
    elseif($_POST['action'] == 2 ) {
        echo'indisponible';

    }
    else {

    }

    ?>