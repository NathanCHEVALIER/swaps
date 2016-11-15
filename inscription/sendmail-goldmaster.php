<?php

	$emailofthebest = "nathanchevalier.lechatelet@gmail.com";
	$sujetdeouf = "Swaps";
	$letrucquonsenfout = "From: inscription@swaps-online.com" ;
	$messagebanal = 'Bonjour, '.$_POST['pseudo'].' a entammé une procédure d\'inscription';

	mail($emailofthebest, $sujetdeouf, $messagebanal, $letrucquonsenfout);

?>