<?php
session_start();
include('db.php');

$error_message = "";

// Retrieve email and password from form submission
$email = $_POST['email'];
$mot_de_passe = $_POST['password'];

// Prepare SQL statement to select user with the given email
$query = "SELECT * FROM users_data WHERE email = '$email'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    // Email found, fetch associated row
    $row = $result->fetch_assoc();
    // Retrieve the hashed password from the database
    $hashed_password_from_database = $row['mot_de_passe'];
    // Verify the password
    if ($hashed_password_from_database === sha1($mot_de_passe)) {
        // Password is correct, redirect to success page or do further actions
        $_SESSION['logged_in'] = true;
        $_SESSION['user_id'] = $row['id'];
        header("Location: index.php");
        exit();
    } else {
        // Password is incorrect
        $error_message = "Mot de passe incorrect.";
    }
} else {
    // Email not found
    $error_message = "Email non trouvé.";
}


// Pass the error message to the input form PHP file
$_SESSION['error_message'] = $error_message;
header("Location: login.php");
exit();
?>
