<?php

    if(!empty($_POST['action'])) {
        $action = htmlspecialchars($_POST['action']);
        if($action == 1) {
            //afficher form nouveau compte
            ?>
            <form method="post" id="formulaire_compte" action="/composants/toolbox/compte.php" >
                <input type="text" name="nom" placeholder="Nom" />
                <?php include('../toolbox/themes.php');?>
                <textarea type="description" name="description" placeholder="Description. Laisser vide si vous ne souhaitez pas renseigner de description." ></textarea>
                <input type="submit" name="submit"  value="Valider" />
            </form>
        <?php
        }
        elseif($action == 2) {

            include('../../L2C14/01_11_16_19-08.php');

            $keyword = htmlspecialchars($_POST['keyword']).'%';
    
            $req = $bddL7C13->prepare("SELECT * FROM dactyle WHERE decapode LIKE :pseudo AND dierese = 1");
			$req->execute(array('pseudo' => $keyword));
            while($donnees = $req->fetch()) {
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
        elseif($action == 3) {
            
            $dir = __DIR__;
            $dir = explode('\composants', $dir);
            $path = $dir[0].'/L2C14/05_11_16_17-01.php';
            include($path);

            session_start();

			$navigateur = $_SERVER['HTTP_USER_AGENT'];
			$ipclient = $_SERVER['REMOTE_ADDR'];
			$req = $bdd->prepare('INSERT INTO vasiere(venaison, vantose, vibrisse) VALUES(:page, :id_user, NOW())');
			$req->execute(array(
				'page' => 'vue_notification',
				'id_user' => $_SESSION['id']
				));
        }
        else {

        }
    }
    else {
        $req = $bddL7C13->prepare("SELECT * FROM dactyle WHERE desopilant = :id AND diatribe = 'espace' AND dierese = 1");
        $req->execute(array('id' => $_SESSION['ID']));
        $nbcomptes = $req->rowCount();
    }