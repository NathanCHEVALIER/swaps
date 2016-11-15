<?php

	/////////////Fonction d'affichage de l'entête d'une publication

    function aff_deb_post($id_auteur, $pseudo_auteur, $type_auteur, $profil_auteur, $id_destinataire, $type_destinataire, $pseudo_destinataire, $id_post, $type_post, $date_post, $cas){
    ?>

<div id="<?php echo $id_post;?>" >
<?php
if($cas == 2) {
}
else {
	echo'<div class="zone_de_texte">';
}
?>
		<div class="infos_post" >
			<div class="mini_profil">
				<img class="mini_profil_img" src="/ressources/images/profil/<?php echo $id_auteur.'/profil_'.$profil_auteur;?>" />
			</div>
			<div class="auteur_et_date" >
				<div class="auteur">
				<?php
				if($id_auteur === $id_destinataire )
				{
					if($type_post == 3)
					{
						echo '<a class="lien_nom_post" href="/'.$type_auteur.'/'.$pseudo_auteur.'-'.$id_auteur.'/">'.$pseudo_auteur.'</a> à partagé sa publication';
					}
					elseif($type_post == 4)
					{
						echo '<a class="lien_nom_post" href="/'.$type_auteur.'/'.$pseudo_auteur.'-'.$id_auteur.'/">'.$pseudo_auteur.'</a> à changé sa photo de profil';
					}
					elseif($type_post == 5)
					{
						echo '<a class="lien_nom_post" href="/'.$type_auteur.'/'.$pseudo_auteur.'-'.$id_auteur.'/">'.$pseudo_auteur.'</a> à changé sa photo de couverture';
					}
					else
					{
						echo '<a class="lien_nom_post" href="/'.$type_auteur.'/'.$pseudo_auteur.'-'.$id_auteur.'/">'.$pseudo_auteur.'</a> à publié';
					}
				}
				elseif($type_post == 3 )
				{
					echo '<a class="lien_nom_post" href="/'.$type_auteur.'/'.$pseudo_auteur.'-'.$id_auteur.'/">'.$pseudo_auteur.'</a> à partagé la publication de <a class="lien_nom_post" href="/'.$type_destinataire.'/'.$pseudo_destinataire.'-'.$id_destinataire.'/">'.$pseudo_destinataire.'</a>';
				}
				else
				{
					echo '<a class="lien_nom_post" href="/'.$type_auteur.'/'.$pseudo_auteur.'-'.$id_auteur.'/">'.$pseudo_auteur.'</a> à publié sur <a class="lien_nom_post" href="/'.$type_destinataire.'/'.$pseudo_destinataire.'-'.$id_destinataire.'/">'.$pseudo_destinataire.'</a>';
				}
				?>
				</div>
				<div class="date_post" datetime="<?php echo $date_post;?>" ></div>
			</div>
			<hr />
		</div>
    <?php
    }

    /////////////Fonction d'affichage du contenu d'une publication

    function aff_cont_post($id_post, $texte_post, $image_post, $id_post_relai, $id_auteur, $cas){
    ?>
        <div class="contenu_post_<?php echo $id_post; ?>">
        <?php
		if($cas == 2) {
			if(strlen($texte_post) > 600) {
				$texte_post = substr($texte_post, 0, 600).' ...';
			}
		}
		echo $texte_post;
			
		if( !empty($image_post)) {
		?>
			<div class="cadre_image_post" >
				<img class="image_posts" width="100%" src="/ressources/images/posts/<?php echo $id_auteur.'/'.$image_post; ?>" />
			</div>
		<?php
		}
		else {
		}
		?>
		</div>
        <?php 
		if(!empty($id_post_relai))
		{
			//$include('controleur-relai.php');
		}
		else
		{
		}
    }

    /////////////Fonction d'affichage des statistiques d'une publication

    function aff_stat_post($id_post, $action){
		
		if(!empty($action)) {
		}
		else {
        echo '<div class="stats_posts_'.$id_post.'">';
		}

		$reqstats = $GLOBALS['bdd']->prepare('SELECT * FROM badin WHERE balsamine = :id');
		$reqstats->execute(array('id' => $id_post));
		$nbre1 = 0;
		$nbre2 = 0;
		$nbre3 = 0;
		$nbre4 = 0;
		$nbre5 = 0;
		$nbre_vote = 0;
		$etat_vote = 0;
		$nbre_comment = 0;
		$nbre_relai = 0;
										
		while ($datastats = $reqstats->fetch()) {
            if($datastats['bouquetin'] == 2) {
				$nbre_comment = $nbre_comment +1;
			}
			elseif($datastats['bouquetin'] == 3) {
				$nbre_relai = $nbre_relai +1;
			}
			elseif($datastats['bouquetin'] == 5) {
				if($datastats['bigarade'] == $_SESSION['id']) {
					$etat_vote = 1;
					$nbre1 = $nbre1 +1;
					$nbre_vote = $nbre_vote +1;
				}
				else {
					$nbre1 = $nbre1 +1;
					$nbre_vote = $nbre_vote +1;
				}
			}
			elseif($datastats['bouquetin'] == 6) {
				if($datastats['bigarade'] == $_SESSION['id']) {
					$etat_vote = 2;
					$nbre2 = $nbre2 +1;
					$nbre_vote = $nbre_vote +1;
				}
				else {
					$nbre2 = $nbre2 +1;
					$nbre_vote = $nbre_vote +1;
				}
			}
			elseif($datastats['bouquetin'] == 7) {
				if($datastats['bigarade'] == $_SESSION['id']) {
					$etat_vote = 3;
					$nbre3 = $nbre3 +1;
					$nbre_vote = $nbre_vote +1;
				}
				else {
					$nbre3 = $nbre3 +1;
					$nbre_vote = $nbre_vote +1;
				}
			}
			elseif($datastats['bouquetin'] == 8) {
				if($datastats['bigarade'] == $_SESSION['id']) {
					$etat_vote = 4;
					$nbre4 = $nbre4 +1;
					$nbre_vote = $nbre_vote +1;
				}
				else {
					$nbre4 = $nbre4 +1;
					$nbre_vote = $nbre_vote +1;
				}
			}
			elseif($datastats['bouquetin'] == 9) {
				if($datastats['bigarade'] == $_SESSION['id']) {
					$etat_vote = 5;
					$nbre5 = $nbre5 +1;
					$nbre_vote = $nbre_vote +1;
				}
				else {
					$nbre5 = $nbre5 +1;
					$nbre_vote = $nbre_vote +1;
				}
			}
            else {

            }
        }

		$reqstats->closeCursor();
		?>
		<p class="compteur_stat">
        <?php 
		if($nbre_vote === 0) {
			echo'Aucun vote, ';
		}
		else {
            $moyenne = ((1*$nbre1)+(2*$nbre2)+(3*$nbre3)+(4*$nbre4)+(5*$nbre5))/$nbre_vote;
			echo round($moyenne, 2, PHP_ROUND_HALF_UP)." pour ".$nbre_vote." votes, ";
		}
		echo $nbre_comment." commentaires,  ".$nbre_relai." relais";
		?>
        </p>
		<hr />

        <div class="bouton_stats_<?php echo ''.$etat_vote.'_'.$id_post; ?>">
			<div class="action_stats" id="action_stats_<?php echo $id_post; ?>">
                <div class="bouton_stats" >
					<div class="bouton_stats_vote_<?php echo $id_post;?>">
						<?php
						if ($etat_vote >= 1) {
							echo'<div class="star star_one star_light">';
							if ($etat_vote >= 2) {
								echo'<div class="star star_two star_light">';
								if ($etat_vote >= 3) {
									echo'<div class="star star_three star_light">';
									if ($etat_vote >= 4) {
										echo'<div class="star star_four star_light">';
										if ($etat_vote >= 5) {
											echo'<div class="star star_five star_light">';
										}
										else {
											echo'<div class="star star_five">';
										}
									}
									else {
										echo'<div class="star star_four">';
										echo'<div class="star star_five">';
									}
								}
								else {
									echo'<div class="star star_three">';
									echo'<div class="star star_four">';
									echo'<div class="star star_five">';
								}
							}
							else {
								echo'<div class="star star_two">';
								echo'<div class="star star_three">';
								echo'<div class="star star_four">';
								echo'<div class="star star_five">';
							}
						}
						else {
							echo'<div class="star star_one">';
							echo'<div class="star star_two">';
							echo'<div class="star star_three">';
							echo'<div class="star star_four">';
							echo'<div class="star star_five">';
						}
						?>
						</div>
						</div>
						</div>
						</div>
						</div>
					</div>
				</div>
                <div class="bouton_stats" >
					<div class="bouton_stats_comment_<?php echo $id_post;?>">
						<div class="bouton_stats_comment"></div>
					</div>
				</div>
				<div class="bouton_stats" >
					<div class="bouton_stats_relai_<?php echo $id_post;?>">
						<div class="bouton_stats_relai"></div>
					</div>
				</div>
			</div>
			<div class="cadre_comment_<?php echo $id_post;?>">
				<div class="mini_profil_comment">
					<img class="mini_profil_img" src="/ressources/images/profil/<?php echo $_SESSION['id'].'/profil_'.$_SESSION['profil'];?>" />
				</div>
				<form class="post_comment_cadre" method="post" action="trait_comment_post.php">
					<textarea name="commentarea" id="commentarea" spellcheck class="commentarea_<?php echo $id_post;?>"></textarea>
					<div class="bouton_comment" id="bouton_comment_<?php echo $id_post;?>">Commenter</div>
				</form>
                <!--<div class="cadre_lien_view_comment_<?php echo $id_post;?>" >
                <h3 class="lien_view_comment">Voir tous les commentaires</h3>
                </div>-->
            </div>
        </div>

    <?php
	$GLOBALS['etat_vote'] = $etat_vote;
    }

    /////////////Fonction d'affichage de la fin d'une publication

    function aff_fin_post($id_post, $etat_vote, $cas) {
    ?>

	</div>
    <script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="/ressources/js/plugins/jQuery_relativeDate.js"></script>
    <script>
	$(function() {

		var etat_vote = '<?php echo $etat_vote; ?>';
		var id_post = '<?php echo $id_post;?>';
		$(".date_post").relativeDate();
		$(".cadre_comment_" + id_post + "").hide();

	//Vote
	var clicked = 0
	$(".bouton_stats_vote_" + id_post + " div:eq(4)").click(function(){
		clicked++;
	});
	$(".bouton_stats_vote_" + id_post + " div:eq(3)").click(function(){
		clicked++;
	});
	$(".bouton_stats_vote_" + id_post + " div:eq(2)").click(function(){
		clicked++;
	});
	$(".bouton_stats_vote_" + id_post + " div:eq(1)").click(function(){
		clicked++;
	});
	$(".bouton_stats_vote_" + id_post + " div:first").click(function(){
		clicked++;
		clicked++;
		clicked++;
		clicked++;
		clicked++;
		$(".stats_posts_" + id_post + "").load('/composants/post/controleur.php', { post_id: id_post, type: clicked, action: 1});
		clicked = 0;
	});


		//Affichage du post
		$(".contenu_post_" + id_post + "").click(function() {
	    	$('#cadre_post_view').fadeIn(300);
	    	$('body').css('overflow', 'hidden');
	    	$('.zone_de_texte_view').load('/composants/post/controleur.php', { post_id: id_post, action: 2});
		});

		//Commentaires
		$(".bouton_stats_comment_" + id_post + "").click(function() {
	    	$(".cadre_comment_" + id_post + "").slideToggle(500);
		});
		$("#bouton_comment_" + id_post + "").click(function(){
			$(".stats_posts_" + id_post + "").load('/composants/post/controleur.php', { post_id: id_post, action: '3', comment: $(".commentarea_" + id_post + "").val()});
		});

		//Relai des posts*/
		$(".bouton_stats_relai_" + id_post + "").click(function() {
	    	$('#cadre_post_view').fadeIn(300);
	    	$('body').css('overflow', 'hidden');
	    	$('.zone_de_texte_view').load('/composants/post/controleur.php', { post_id: id_post, action: '4'});
		});

		//croix close view post
		$("#croix_close_post").click(function() {
	    	$('#cadre_post_view').fadeOut(300);
	    	$('body').css('overflow', 'auto');
	    	$('.post_charge').replaceWith("<p id='loader_post'>Chargement du contenu en cours </p><img id='loader_post_img' src='/ressources/images/loader.gif' width='10%' alt='loader' />");
		});

	});
	</script>
	<?php
	if($cas == 2) {
	}
	else {
		echo'</div>';
	}
	?>	
</div>
	<?php 
	}

	/////////////Fonction d'affichage de la fin d'une publication

    function vote($id_post, $vote) {

		$condition = 0;
		$compteur = 0;
		
		$requete = $GLOBALS['bdd']->prepare('SELECT * FROM badin WHERE balsamine = :id_post AND bigarade = :id_auteur AND bouquetin IN(5, 6, 7, 8, 9)');
		$requete->execute(array('id_post' => $id_post,
								'id_auteur' => $_SESSION['id'],
								));
		$condition = $requete->rowCount();

		if($condition == 1) {
			$req = $GLOBALS['bdd']->prepare('UPDATE badin SET bouquetin = :type WHERE balsamine = :id_posts AND bigarade = :auteur AND bouquetin IN(5, 6, 7, 8, 9)');
			$req->execute(array(
				'type' => $vote,
				'id_posts' => $id_post,
				'auteur' => $_SESSION['id'],
				));
			$compteur = $req->rowCount();
		}
		elseif($condition == 0) {
			$req = $GLOBALS['bdd']->prepare('INSERT INTO badin(balsamine, bigarade, bouquetin, brimade) VALUES(:id_posts, :id_auteur, :type, NOW())');
			$req->execute(array('id_posts' => $id_post,
								'id_auteur' => $_SESSION['id'],
								'type' => $vote,
								));
			$compteur = $req->rowCount();
		}
		else {

		}
	}

	/////////////Fonction d'affichage de la fin d'une publication

    function aff_post($id_post) {

		$req = $GLOBALS['bdd']->prepare('SELECT a.*, d.*, da.dazibao as sujet_dazibao, da.decapode as sujet_decapode, da.dessication as sujet_dessication, da.diatribe as sujet_diatribe
									FROM adenoide a
									INNER JOIN dactyle d
									ON a.alcade = d.dazibao
									INNER JOIN dactyle da
									ON a.ammonite = da.dazibao
									WHERE a.alezan = :id');
		$req->execute(array('id' =>$id_post));
		$GLOBALS['donnees'] = $req->fetch();

	}

	/////////////Fonction d'affichage de la fin d'une publication

    function comment($id_post, $comment) {

		if(!empty($comment))
		{
			$req = $GLOBALS['bdd']->prepare('INSERT INTO badin(balsamine, bigarade, bouquetin, brimade, bryophite) VALUES(:id_posts, :id_auteur, 2, NOW(), :comment)');
			$req->execute(array('id_posts' => $id_post,
								'id_auteur' => $_SESSION['id'],
								'comment' => $comment,
			));
		}
		else {
		}
	}

	/////////////Fonction d'affichage de la fin d'une publication

    function aff_comm_post($id_post) {

		$req = $GLOBALS['bdd']->prepare('SELECT b.*, d.*
								FROM badin b
								INNER JOIN dactyle d
								ON b.bigarade = d.dazibao
								WHERE b.balsamine = ? 
								AND b.bouquetin = 2
								ORDER BY b.brimade DESC');
		$req->execute(array($_POST['post_id']));
									
		while ($donnees = $req->fetch())
		{
		?>
			<div id="<?php echo $donnees['baliverne'];?>" >
				<div class="zone_comment" id="zone_comment">
					<div class="mini_profil_comment">
						<img class="mini_profil_img" src="/ressources/images/profil/<?php echo $donnees['dazibao'];?>/profil_<?php echo $donnees['dessication'];?>" />
					</div>
					<div class="auteur_et_date_comment" >
						<a class="lien_nom_comment" href="/<?php echo $donnees['diatribe'].'/'.$donnees['decapode'].'-'.$donnees['dazibao'].'/';?>">
							<?php echo $donnees['decapode'];?>
						</a>
						<div class="date_post" >
							Le <?php echo $donnees['brimade'];?>
						</div>
					</div>
					<div class="contenu_comment">
						<?php echo $donnees['bryophite']; ?>
					</div>
				</div>
			</div>
		<?php
		}
		$req->closeCursor();

	}

	/////////////Fonction d'affichage de la fin d'une publication

    function aff_form_relai($id_post) {
	?>
		
		<div class="post_charge" >
			<textarea spellcheck id="textarea_relai" placeholder="Votre message" ></textarea>
			<div id="zone_reload_relai">
			</div>
			<button id="bouton_relai_post" class="bouton" >Relayer</button>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script>
		$(function() {
			$("#bouton_relai_post").click(function() {
				$("#zone_reload_relai").load('controleur.php', { post_id: '<?php echo $id_post; ?>', action: 5, relai: $("#textarea_relai").val()});
				/*$("#cadre_post_view").fadeOut(800);
				$("body").css('overflow', 'auto');
				$(".post_charge").replaceWith("<p id='loader_post'>Chargement du contenu en cours </p><img id='loader_post_img' src='/ressources/images/loader.gif' width='10%' alt='loader' />");
			*/});
		});
		</script>

	<?php
	}

	/////////////Fonction d'affichage de la fin d'une publication

    function enr_relai($id_post, $relai) {

		var_dump($relai);
				var_dump($id_post);
				
	
		$req = $bddL7C13->prepare('INSERT INTO badin(balsamine, bigarade, bouquetin, brimade) VALUES(:id_posts, :id_auteur, 3, NOW())');
		$req->execute(array('id_posts' => $id_post,
							'id_auteur' => $_SESSION['id'],
							));
				
		$req2 = $bddL7C13->prepare('INSERT INTO adenoide(alcade, ammonite, ambre, anaerobie, andoran, angor, anoxie) VALUES(:id_auteur, :id_sujet, NOW(), :texte, :relai, 3, 1)');
		$req2->execute(array('id_auteur' => $_SESSION['id'],
							'id_sujet' => $_SESSION['id'],
							'texte' => $relai,
							'relai' => $id_post,
							));
	}
?>