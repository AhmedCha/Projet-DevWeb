<?php
session_start();
include('db.php');

$user_id = $_SESSION['user_id'];

$mot_de_passe = $_POST['password'];
$mot_de_passe2 = $_POST['password2'];

$query = "UPDATE users_data SET";

if (!empty($mot_de_passe)) {
    $hashed_password = sha1($mot_de_passe);
    $query .= " mot_de_passe='$hashed_password',";
}

$query = rtrim($query, ',');

$query .= " WHERE id=$user_id";

$result = $mysqli->query($query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Erreur lors de la modification de l'utilisateur : " . $mysqli->error;
}
?>

