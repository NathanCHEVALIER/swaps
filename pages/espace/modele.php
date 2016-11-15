 <?php
    $getnbrepub = $bddL7C13->prepare("SELECT * FROM adenoide WHERE alcade = :id AND anoxie = 1");
    $getnbrepub->execute(array('id' => $id));
    $nbrepub = $getnbrepub->rowCount();

    $getnbreabo = $bddL7C13->prepare("SELECT * FROM clayette WHERE cocasse = :id AND coenzine = 1");
    $getnbreabo->execute(array('id' => $id));
    $nbreabonne = $getnbreabo->rowCount();

    $getnbreabo = $bddL7C13->prepare("SELECT * FROM clayette WHERE cnidaire = :id AND coenzine = 1");
    $getnbreabo->execute(array('id' => $id));
    $nbreabonnement = $getnbreabo->rowCount();

    $getposts = $bddL7C13->prepare('SELECT a.*, d.*, da.dazibao as sujet_dazibao, da.decapode as sujet_decapode, da.diatribe as sujet_diatribe
						            FROM adenoide a
						            INNER JOIN dactyle d
                                    ON a.alcade = d.dazibao
                                    INNER JOIN dactyle da
                                    ON a.ammonite = da.dazibao
                                    WHERE a.ammonite = :id
                                    AND a.anoxie = 1
                                    ORDER BY a.ambre DESC');
	$getposts->execute(array('id' => $id));