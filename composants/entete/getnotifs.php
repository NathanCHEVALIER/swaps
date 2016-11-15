<?php

			$dir = __DIR__;
			$dir = explode('\composants', $dir);
			$path2 = $dir[0].'/L2C14/01_11_16_19-08.php';
			include("../../L2C14/01_11_16_19-08.php");

			/*$reqlast = $bdd->prepare('SELECT * FROM vasiere WHERE venaison = "vue_notification" AND vantose = :id ORDER BY vibrisse DESC LIMIT 0,1');
			$reqlast->execute(array('id' => $_SESSION['id']));
			$donneeslast = $reqlast->fetch();
			$countlast = $reqlast->rowCount();

			if($countlast > 0)
			{
				$last_date = $donneeslast['vibrisse'];
			}
			else
			{*/
				$last_date = 0;

				$tableau = array();
                $req = $bddL7C13->prepare('SELECT d.*, c.*
									FROM dactyle d
									INNER JOIN clayette c
									ON c.cnidaire = d.dazibao
									WHERE c.cocasse = :id 
									AND c.collutoire >= :last_date');
				$req->execute(array('id' => $_SESSION['id'],
									'last_date' => $last_date));
                while ($donnees = $req->fetch())
				{
				    if($donnees['coenzine'] == 2)
				    {
				    	$tableau[] = array("id" => $donnees['dazibao'],
				                        "type" => $donnees['diatribe'],
				                        "pseudo" => $donnees['decapode'],
				                        "profil" => $donnees['dessication'],
				                        "date" => $donnees['collutoire'],
				                        "texte" => "1",
				                    );
				    }
				    elseif($donnees['coenzine'] == 1)
				    {
				    	$tableau[] = array("id" => $donnees['dazibao'],
				                        "type" => $donnees['diatribe'],
				                        "pseudo" => $donnees['decapode'],
				                        "profil" => $donnees['dessication'],
				                        "date" => $donnees['collutoire'],
				                        "texte" => "2",
				                    );
				    }
				    else
				    {
				    }
				    
				}

				$req = $bddL7C13->prepare('SELECT d.*, c.*
									FROM dactyle d
									INNER JOIN clayette c
									ON c.cocasse = d.dazibao
									WHERE c.cnidaire = :id
									AND cephalopode = 2
									AND c.collutoire >= :last_date');
				$req->execute(array('id' => $_SESSION['id'],
									'last_date' => $last_date));

				while ($donnees = $req->fetch())
				{
					if($donnees['coenzine'] == 1)
					{
				   		$tableau[] = array("id" => $donnees['dazibao'],
				                        "type" => $donnees['diatribe'],
				                        "pseudo" => $donnees['decapode'],
				                        "profil" => $donnees['dessication'],
				                        "date" => $donnees['collutoire'],
				                        "texte" => "3",
				                    );
					}
					elseif($donnees['coenzine'] == 3)
					{
						$tableau[] = array("id" => $donnees['dazibao'],
				                        "type" => $donnees['diatribe'],
				                        "pseudo" => $donnees['decapode'],
				                        "profil" => $donnees['dessication'],
				                        "date" => $donnees['collutoire'],
				                        "texte" => "4",
				                    );
					}
					else
					{

					}
				}
				$req->closeCursor();

				$req = $bddL7C13->prepare('SELECT d.*, a.*
									FROM dactyle d
									INNER JOIN adenoide a
									ON a.alcade = d.dazibao
									WHERE a.ammonite = :id 
									AND a.ambre >= :last_date');
				$req->execute(array('id' => $_SESSION['id'],
									'last_date' => $last_date));

				while ($donnees = $req->fetch())
				{
				    $tableau[] = array("id" => $donnees['dazibao'],
				                        "type" => $donnees['diatribe'],
				                        "pseudo" => $donnees['decapode'],
				                        "profil" => $donnees['dessication'],
				                        "date" => $donnees['ambre'],
				                        "texte" => "5",
				                    );
				}
				$req->closeCursor();

				$req = $bddL7C13->prepare('SELECT b.*, d.*, a.*
									FROM badin b 
									INNER JOIN dactyle d
									ON d.dazibao = b.bigarade
									INNER JOIN adenoide a
									ON a.alezan = b.balsamine
									WHERE a.alcade = :id
									AND a.anoxie = 1
									AND b.brimade >= :last_date');
				$req->execute(array('id' => $_SESSION['id'],
									'last_date' => $last_date));

				while ($donnees = $req->fetch())
				{
				    if($donnees['bouquetin'] == 5 OR $donnees['bouquetin'] == 6 OR $donnees['bouquetin'] == 7 OR $donnees['bouquetin'] == 8 OR $donnees['bouquetin'] == 9)
				    {
				    	$tableau[] = array("id" => $donnees['dazibao'],
				                        "type" => $donnees['diatribe'],
				                        "pseudo" => $donnees['decapode'],
				                        "profil" => $donnees['dessication'],
				                        "date" => $donnees['brimade'],
				                        "texte" => "6",
				                    	);
				    }
				    elseif($donnees['bouquetin'] == 2)
				    {
				    	$tableau[] = array("id" => $donnees['dazibao'],
				                        "type" => $donnees['diatribe'],
				                        "pseudo" => $donnees['decapode'],
				                        "profil" => $donnees['dessication'],
				                        "date" => $donnees['brimade'],
				                        "texte" => "7",
				                    	);
				    }
				    elseif($donnees['bouquetin'] == 3)
				    {
				    	$tableau[] = array("id" => $donnees['dazibao'],
				                        "type" => $donnees['diatribe'],
				                        "pseudo" => $donnees['decapode'],
				                        "profil" => $donnees['dessication'],
				                        "date" => $donnees['brimade'],
				                        "texte" => "8",
				                    	);
				    }
				    else
				    {
				    }
				}
				$req->closeCursor();

				usort($tableau, function ($a, $b) 
				{
					return date_create($b['date']) <=> date_create($a['date']);
				});

				$nbre_notifications_menu_entete = count($tableau);
				?>
					<div id="nbre_notifications_menu_entete" >
						<?php echo $nbre_notifications_menu_entete; ?>
					</div>
				<?php		
				
				foreach($tableau as $value)
				{
				?>
					<div class="notification_entete">
						<div class="mini_profil_notifications_entete">
							<img class="mini_profil_notifications_entete_img" src="/ressources/images/profil/<?php echo $value['id'];?>/profil_<?php echo $value['profil'];?>" />
						</div>
						<div class="contenu_notification_entete" >
							<div class="texte_notification_entete" >
								<?php echo $value['pseudo'];
									if($value['texte'] == 1) {
									echo " à demandé à vous suivre
										<div class='formulaire_abonnement_".$donnees['dazibao']."'>
											<button class='ok_abo'></button>
											<button class='no_abo'></button>
										</div>
										<script src='http://code.jquery.com/jquery.min.js'></script>
										<script>
											$(function() {
												$('.formulaire_abonnement_".$donnees['dazibao']." > .ok_abo').click( function(){
													$('.formulaire_abonnement_".$donnees['dazibao']."').load('trait_accept_abo.php', {id_sujet: ".$donnees['dazibao'].", value: 1});
												});
												$('.formulaire_abonnement_".$donnees['dazibao']." > .no_abo').click( function(){
													$('.formulaire_abonnement_".$donnees['dazibao']."').load('trait_accept_abo.php', {id_sujet: ".$donnees['dazibao'].", value: 3});
												});
											});
										</script>";
									}
									elseif($value['texte'] == 2) {
									echo " à commencé à vous suivre";
									}
									elseif($value['texte'] == 3) {
									echo " à accepté votre demande d'abonnement";
									}
									elseif($value['texte'] == 4) {
									echo " à refusé votre demande d'abonnement";
									}
									elseif($value['texte'] == 5) {
									echo " à écrit sur vous";
									}
									elseif($value['texte'] == 6) {
									echo " à attribué une note à votre post";
									}
									elseif($value['texte'] == 7) {
									echo " à commenté votre post";
									}
									elseif($value['texte'] == 8) {
									echo " à relayé votre post";
									}
									?>
							</div>
							<time class="date_notification_entete" datetime="<?php echo $value['date'];?>" ></time>
						</div>
					</div>
				<?php
				}
				?>