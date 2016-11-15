<?php
    $keyword = '%'.$keywords.'%';
	$reqsearch = $bddL7C13->prepare("SELECT * FROM dactyle WHERE decapode LIKE :pseudo AND dierese = 1");
	$reqsearch->execute(array('pseudo' => $keyword));
    $countsearch = $reqsearch->rowCount();