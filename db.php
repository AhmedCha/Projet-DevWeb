<?php
// Informations de connexion à la base de données
$host = 'localhost'; // Hôte MySQL
$user = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe MySQL
$database = 'users_db'; // Nom de la base de données

// Connexion à la base de données
$mysqli = new mysqli($host, $user, $password, $database);

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}
?>
