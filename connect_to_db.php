<?php 
	try 
	{
		$db = new PDO ('mysql:host=localhost;dbname=videogame', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	} 
	catch (Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
 ?>