<?php
session_start();
include('db.php');

$user_id = $_SESSION['user_id'];

// Retrieve posted form data
$nom = $_POST['nom'];
$date_naissance = $_POST['birth'];
$genre = $_POST['genre'];
$mot_de_passe = $_POST['password'];
$categorie_secret = $_POST['TmotSecret'];
$mot_secret = $_POST['motSecret'];

// Start building the SQL query
$query = "UPDATE users_data SET";

// Check if each field is not empty and add it to the query if not
if (!empty($nom)) {
    $query .= " nom='$nom',";
}

if (!empty($date_naissance)) {
    $query .= " date_naissance='$date_naissance',";
}

if (!empty($genre)) {
    $query .= " genre='$genre',";
}

if (!empty($mot_de_passe)) {
    $hashed_password = sha1($mot_de_passe);
    $query .= " mot_de_passe='$hashed_password',";
}

if (!empty($categorie_secret) && $categorie_secret!='Aucun') {
    $query .= " categorie_secret='$categorie_secret',";
}

if (!empty($mot_secret)) {
    $query .= " mot_secret='$mot_secret',";
}

// Remove the trailing comma from the query
$query = rtrim($query, ',');

// Add the WHERE clause to specify the user ID
$query .= " WHERE id=$user_id";

// Execute the query
$result = $mysqli->query($query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Erreur lors de la modification de l'utilisateur : " . $mysqli->error;
}
?>

