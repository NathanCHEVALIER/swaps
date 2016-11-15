		<?php

		if(!empty($_POST['text_post']) AND !empty($_POST['id_sujet'])) {
			$retourpost = 2;
		}
		else {
			$retourpost = null;
		}

		if(empty($retourpost)) {
		?>

		<div class="zone_de_texte">
			<div class="infos_post" >
				<div class="mini_profil">
					<img class="mini_profil_img" src="/ressources/images/profil/<?php echo $_SESSION['id'];?>/profil_<?php echo $_SESSION['profil'];?>" />
				</div>
				<div class="auteur_et_date" >
					<div class="auteur">Ecrivez un message</div>
					<!--<div class="date_post" datetime="" >Exprimez-vous librement</div>-->
				</div>
			</div>
			<div class="contenu_post">
				<textarea name="text_post" id="text_post" ></textarea>
				<input type="hidden" name="id_sujet" value="<?php echo $idforpost; ?>" />
				<!--<input type="file" name="image" class="bouton_photo" value="Ajouter une image" placeholder="Ajoutez une image"/>-->
				<input type="submit" class="bouton" value="Poster" id="boutonforreloadafterpost" />
			</div>
			<script src="http://code.jquery.com/jquery.min.js"></script>
            <script>
	            $(function() {
                    $("#boutonforreloadafterpost").click(function(){
						var id_sujet = <?php echo $idforpost; ?>;
						var text_post = $("#text_post").val();
                        $("#reloadafterpost").load('/composants/post/editeur.php', {id_sujet: id_sujet, text_post: text_post});
                    });
                });
            </script>
		</div>
        <div id="reloadafterpost" >
		</div>
	    <?php 
		}
		elseif($retourpost = 2) {

			/*
			if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

			$date = "{$annee}{$mois}{$jour}{$heure}{$minute}";
			$nom_image =" ";

			$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
			$extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
			if ( in_array($extension_upload,$extensions_valides) )
			{	
			$nom = "images/posts/{$_SESSION['id']}/{$date}.{$extension_upload}";
			$nom_image = "<img class'image_posts' src='images/posts/{$_SESSION['id']}/{$date}.{$extension_upload}' />";
			$resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nom);
			if (!$resultat) echo "Transfert échoué";

			*/

		include('../../L2C14/01_11_16_19-08.php');

		$insertpost = $bddL7C13->prepare('INSERT INTO adenoide (alcade, ammonite, ambre, anaerobie, angor, anoxie) VALUES(:auteur, :sujet, NOW(), :texte, 1, 1)');
		$insertpost->execute(array(
		'auteur' => $_SESSION['id'],
		'sujet' => $_POST['id_sujet'],
		'texte' => $_POST['text_post'],
		));
		?>
		<div class="zone_de_texte">
			<div class="infos_post" >
				<div class="mini_profil">
					<img class="mini_profil_img" src="/ressources/images/profil/<?php echo $_SESSION['id'];?>/profil_<?php echo $_SESSION['profil'];?>" />
				</div>
				<div class="auteur_et_date" >
					<div class="auteur"><?php echo $_SESSION['pseudo'];?></div>
					<div class="date_post" datetime="" >Il y a quelques instants</div>
				</div>
			</div>
			<div class="contenu_post">
				Vient de publier...
			</div>
		</div>
		<?php
        }
		else {

		}
		?>        