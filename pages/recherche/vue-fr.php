<?php include('../composants/entete/controleur.php'); ?>
<div class="block_page">
	<section>
		<?php
        if($countsearch > 0) {
            echo $countsearch.' résultat';
            while($donnees = $reqsearch->fetch()) {
            ?>
                    <a href="/<?php echo $donnees['diatribe'].'/'.$donnees['decapode'].'-'.$donnees['dazibao'].'/';?>" >
                    <span id="search_result_1" >
                        <span class="mini_profil_search_result">
                            <img class="mini_profil_img_entete" src="/ressources/images/profil/<?php echo $donnees['dazibao'];?>/profil_<?php echo $donnees['dessication'];?>" />
                        </span>
                        <?php echo $donnees['decapode']; ?>
                    </span>
                    </a>
            <?php
            }
        }
        else {
            echo 'aucun résultats';
        }
		?>
	</section>
	<?php 
	include('../composants/viewer/vue-fr.php');
	?>
</div>