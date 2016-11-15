<?php
    try
	{
		$bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u631603650_swap;charset=utf8', 'u631603650_swap', '719HGJJGH917');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}