<?php
    
    $filfav = $bddL7C13->prepare('SELECT a.*, d.*, da.dazibao as sujet_dazibao, da.decapode as sujet_decapode, da.dessication as sujet_dessication, da.diatribe as sujet_diatribe
								FROM adenoide a
								INNER JOIN clayette c
								ON a.alcade = c.cocasse
								INNER JOIN dactyle d
								ON a.alcade = d.dazibao
								INNER JOIN dactyle da
								ON a.ammonite = da.dazibao
								WHERE (c.cnidaire = :id
								AND c.coenzine = 1 
								AND c.cocufier = 2)
								AND a.anoxie = 1
								ORDER BY a.ambre DESC');

	 $fil = $bddL7C13->prepare('SELECT a.*, d.*, da.dazibao as sujet_dazibao, da.decapode as sujet_decapode, da.dessication as sujet_dessication, da.diatribe as sujet_diatribe
								FROM adenoide a
								INNER JOIN clayette c
								ON a.alcade = c.cocasse
								INNER JOIN dactyle d
								ON a.alcade = d.dazibao
								INNER JOIN dactyle da
								ON a.ammonite = da.dazibao
								WHERE (c.cnidaire = :id
								AND c.coenzine = 1 
								AND c.cocufier = 1)
								AND a.anoxie = 1
								ORDER BY a.ambre DESC');

    ?>