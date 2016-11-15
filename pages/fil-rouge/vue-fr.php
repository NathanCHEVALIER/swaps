<?php include('../composants/entete/controleur.php'); ?>
<div class="block_page">
	<section>
		
		<?php

		$dir = __DIR__;
		$dir = explode('\pages', $dir);
		$path = $dir[0].'/composants/post/editeur.php';
		$idforpost = $_SESSION['id'];
		include($path);

		while ($donnees = $filfav->fetch()) {
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

		while ($donnees = $fil->fetch()) {
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
		?>
	</section>
	<?php 
	include('../composants/viewer/vue-fr.php');
	?>
</div>