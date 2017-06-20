<?php

$host = "localhost";
$user ="root";
$mdp = null;	//Si vous êtes sur Linux ou mac mettre "roor" en mot de passe
$projet3 = "projet3";


// Connexion à bdd
try
{
	$bdd = new PDO("mysql:host=$host;dbname=$projet3;charset=utf8", $user, $mdp);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	//echo "Connexion  ok hé hé!";
}

catch(PDOException $e)
//Une exception est une erreur se produisant dans un programme qui conduit le plus souvent à l'arrêt de celui-ci. (e=exception)
{
	echo "Impossible de se connecter à la base de données !" . $e->getMessage();
}

?>