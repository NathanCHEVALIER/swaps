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
	elseif($_POST['action'] == 3 ) {
	?>
        <body>
			<div class="post_charge" >
				<form id="form_new_photo" method="post" action="/pages/membre/fonctions.php" enctype="multipart/form-data">
					<textarea spellcheck name="text" id="post_photo" placeholder="Exprimez-vous"> </textarea>						
					<input type="file" name="image" id="bouton_photo" value="image"/><br /><br /><br />
					<input type="hidden" name="type" value="2" />
					<input type="hidden" name="action" value="5" />
					<input type="submit" class="bouton" value="Valider" />
				</form>
			</div>
		</body>
	<?php
    }
	elseif($_POST['action'] == 4 ) {
    ?>
        <body>
			<div class="post_charge" >
				<form id="form_new_photo" method="post" action="/pages/membre/fonctions.php" enctype="multipart/form-data">
					<textarea spellcheck name="text" id="post_photo" placeholder="Exprimez-vous"> </textarea>						
					<input type="file" name="image" id="bouton_photo" value="image"/><br /><br /><br />
					<input type="hidden" name="type" value="1" />
					<input type="hidden" name="action" value="5" />
					<input type="submit" class="bouton" value="Valider" />
				</form>
			</div>
		</body>
	<?php
    }
	elseif($_POST['action'] == 5 ) {

		$dir = __DIR__;
		$dir = explode('\pages', $dir);
		$path = $dir[0].'/L2C14/01_11_16_19-08.php';
		include("../../L2C14/01_11_16_19-08.php");
		session_start();

		$jour = date('d');
		$mois = date('m');
		$annee = date('Y');
		$heure = date('H')+1 ;
		$minute = date('i');
		$secondes = date('U');

		$date = "{$annee}{$mois}{$jour}{$heure}{$minute}{$secondes}";

		$nom_image = "";
			
		if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

		$extensions_valides = array('jpg', 'jpeg', 'png');
		$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
		if ( in_array($extension_upload,$extensions_valides) )
		{	
			if($_POST['type'] == 1)
				{
					$nom = "../../ressources/images/profil/{$_SESSION['id']}/profil_{$date}.{$extension_upload}";
					$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
					if (!$resultat) echo "Transfert échoué";
				
					$req = $bddL7C13->prepare('INSERT INTO adenoide (alcade, ammonite, ambre, anaerobie, androstone, angor, anoxie) VALUES(:auteur, :sujet, :date, :text, :image, 4, 1)');
					$req->execute(array(
						'auteur' => $_SESSION['id'],
						'sujet' => $_SESSION['id'],
						'date' => $date,
						'text' => $_POST['text'],
						'image' => $nom,
						));
						
					$imgenterbdd = "{$date}.{$extension_upload}";
						
					$req2 = $bddL7C13->prepare('UPDATE dactyle SET dessication = :img  WHERE dazibao = :id');
					$req2->execute(array(
						'img' => $imgenterbdd,
						'id' => $_SESSION['id'],
						));
				}
				elseif($_POST['type'] == 2)
				{
					$nom = "../../ressources/images/couverture/{$_SESSION['id']}/couv_{$date}.{$extension_upload}";
					$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
					if (!$resultat) echo "Transfert échoué";

					$req = $bddL7C13->prepare('INSERT INTO adenoide (alcade, ammonite, ambre, anaerobie, androstone, angor, anoxie) VALUES(:auteur, :sujet, :date, :text, :image, 5, 1)');
					$req->execute(array(
						'auteur' => $_SESSION['id'],
						'sujet' => $_SESSION['id'],
						'date' => $date,
						'text' => $_POST['text'],
						'image' => $nom,
						));
						
					$imgenterbdd = "{$date}.{$extension_upload}";
						
					$req2 = $bddL7C13->prepare('UPDATE dactyle SET diaspora = :img  WHERE dazibao = :id');
					$req2->execute(array(
						'img' => $imgenterbdd,
						'id' => $_SESSION['id'],
						));
				}
				else{

				}

				header('Location: /'.$_SESSION['type'].'/'.$_SESSION['pseudo'].'-'.$_SESSION['id'].'/');
				exit();
		}
		else{

		}
	}
	else{

	}

    ?>