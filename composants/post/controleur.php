<?php

	require_once("fonctions.php");

	if(!empty($_POST['action'])) {
		$page = 'post';
		require_once("../../L2C14/14_09_16_16-24.php");
		$GLOBALS['bdd'] = $bddL7C13;
		$action = htmlspecialchars($_POST['action']);
		$id_post = htmlspecialchars($_POST['post_id']);
		switch($action) {
			case 1:
				// vote
				$vote = htmlspecialchars($_POST['type']);
				$cas = 1;
				vote($id_post, $vote);
				aff_stat_post($id_post, $action);
				aff_fin_post($id_post, $GLOBALS['etat_vote'], $cas);
				break;
			case 2:
				//afficher
				$cas = 2;
				aff_post($id_post);
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
				aff_deb_post($id_auteur, $pseudo_auteur, $type_auteur, $profil_auteur, $id_destinataire, $type_destinataire, $pseudo_destinataire, $id_post, $type_post, $date_post, $cas);
				aff_cont_post($id_post, $texte_post, $image_post, $id_post_relai, $id_auteur, $cas);
				aff_stat_post($id_post, $action);
				aff_comm_post($id_post);
				aff_fin_post($id_post, $GLOBALS['etat_vote'], $cas);
				break;
			case 3:
				//comment
				$comment = htmlspecialchars($_POST['comment']);
				$cas = 1;
				comment($id_post, $comment);
				aff_stat_post($id_post, $action);
				aff_fin_post($id_post, $GLOBALS['etat_vote'], $cas);
				break;
			case 4:
				//formulaire relai
				aff_form_relai($id_post);
				break;
			case 5:
				//enregistrement relai
				$relai = htmlspecialchars($_POST['relai']);
				$cas = 1;
				enr_relai($id_post, $relai);
				//aff_stat_post($id_post, $action);
				//aff_fin_post($id_post, $GLOBALS['etat_vote'], $cas);
				break;
			default:
				echo'erreur';
				break;
		}
	}
	else {
		$GLOBALS['bdd'] = $bddL7C13;
		$action = null;
		$cas = 1;
	 	aff_deb_post($id_auteur, $pseudo_auteur, $type_auteur, $profil_auteur, $id_destinataire, $type_destinataire, $pseudo_destinataire, $id_post, $type_post, $date_post, $cas);
		aff_cont_post($id_post, $texte_post, $image_post, $id_post_relai, $id_auteur, $cas);
		aff_stat_post($id_post, $action);
		aff_fin_post($id_post, $GLOBALS['etat_vote'], $cas);
	}
?>