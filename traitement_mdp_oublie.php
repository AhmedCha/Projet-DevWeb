<?php
session_start();
include('db.php');

$error_message = "";

$email = $_POST['email'];
$TmotSecret = $_POST['TmotSecret'];
$motSecret = $_POST['motSecret'];

$query = "SELECT * FROM users_data WHERE email = '$email'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $TmotSecret_from_database = $row['categorie_secret'];
    $motSecret_from_database = $row['mot_secret'];
    
    if ($TmotSecret_from_database === $TmotSecret && $motSecret_from_database === $motSecret) {
        
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $row['id'];
        header("Location: reinitialiser_mdp.php");
        exit();
    } else {        
        $error_message = "Les identifiants sont incorrects";
    }
} else {
    // Email not found
    $error_message = "Email non trouvé.";
}


// Pass the error message to the input form PHP file
$_SESSION['error_message'] = $error_message;
header("Location: mot_de_passe_oublie.php");
exit();
?>
