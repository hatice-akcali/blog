<?php
echo "debut connexion";
$host = "localhost";
$user ="root";
$password = "";	//Si vous êtes sur Linux ou mac mettre "root" en mot de passe
$database = "projet3";


// Connexion à bdd
try
{
	$bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", "$user", "$password");
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	echo "Connexion  ok hé hé!";
}

catch(PDOException $e)
//Une exception est une erreur se produisant dans un programme qui conduit le plus souvent à l'arrêt de celui-ci. (e=exception)
{
	echo "erreur";

	die("Oops, impossible de se connecter à la base de données !");
}
echo "fin connexion";


?>