<?php 
$req = $bddL7C13->prepare('SELECT c.*, d.*
											FROM clayette c
											INNER JOIN dactyle d
											ON c.cocasse = d.dazibao
											WHERE c.cnidaire = ?
											AND c.coenzine = 1
											AND c.cocufier = 2
											ORDER BY d.decapode');
						$req->execute(array($_SESSION['id']));

						while ($donnees13 = $req->fetch())
						{
							//include('include_favori_co.php');
						}

						$req->closeCursor();

                       $req = $bddL7C13->prepare('SELECT c.*, d.dazibao, decapode, dessication, diatribe
											FROM clayette c
											INNER JOIN dactyle d
											ON c.cocasse = d.dazibao
											WHERE c.cnidaire = ?
											AND c.coenzine = 1
											AND c.cocufier = 1
											ORDER BY d.decapode');
						$req->execute(array($_SESSION['id']));

						while ($donnees13 = $req->fetch())
						{
							//include('include_favori_co.php');
						}

						$req->closeCursor();

    ?>