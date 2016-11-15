<?php

	$count = 0;

	$req = $bddL7C13->prepare("SELECT d.*, e.* 
								FROM dactyle d
								INNER JOIN ebalacon e
								ON d.dazibao = e.ebeyliere
								WHERE d.desinence = :password 
								AND d.desopilant = :email 
								AND d.diatribe = 'membre' 
								AND d.dierese = 1");
	$req->execute(array('password' => $passcrypt,
						'email' => $email,
						));
	$donnees = $req->fetch();
	$count = $req->rowCount();

	if($count != 1)
	{
		$count = 0;
		$req2 = $bddL7C13->prepare("SELECT d.*, e.* 
									FROM dactyle d
									INNER JOIN ebalacon e
									ON d.dazibao = e.ebeyliere
									WHERE d.desinence = :password 
									AND d.decapode = :email 
									AND d.diatribe = 'membre' 
									AND d.dierese = 1");
		$req2->execute(array('password' => $passcrypt,
							'email' => $email,
							));
		$donnees = $req2->fetch();
		$count = $req2->rowCount();
	}
	else
	{
	
	}