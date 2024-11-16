<?php
include('db.php');

$nom = $_POST['nom'];
$email = $_POST['email'];
$date_naissance = $_POST['birth'];
$genre = $_POST['genre'];
$mot_de_passe = $_POST['password'];
$categorie_secret = $_POST['TmotSecret'];
$mot_secret = $_POST['motSecret'];

// Pour plus protecter le mot de passe
$hashed_password = sha1($mot_de_passe);

$query = "INSERT INTO users_data (nom, email, date_naissance, genre, mot_de_passe, categorie_secret, mot_secret ) VALUES ('$nom', '$email', '$date_naissance', '$genre', '$hashed_password', '$categorie_secret', '$mot_secret')";
$result = $mysqli->query($query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Erreur lors de l'ajout de l'utilisateur : " . $mysqli->error;
}
?>
