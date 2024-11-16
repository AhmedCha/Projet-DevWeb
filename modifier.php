<?php
session_start();
include('db.php');

// Check if user ID is set in session
if (isset($_SESSION['user_id'])) {
    // Retrieve user ID from session
    $user_id = $_SESSION['user_id'];

    // Prepare SQL query to select user details
    $query = "SELECT nom, email, date_naissance, genre, mot_de_passe, categorie_secret, mot_secret FROM users_data WHERE id = '$user_id'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        // User details found, fetch associated row
        $row = $result->fetch_assoc();
        // Retrieve user details
        $nom = $row['nom'];
        $email = $row['email'];
        $date_naissance = $row['date_naissance'];
        $genre = $row['genre'];
        $mot_de_passe = $row['mot_de_passe'];
        $categorie_secret = $row['categorie_secret'];
        $mot_secret = $row['mot_secret'];
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID not found in session.";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/modifyStyle.css">
    <title>Sign up</title>
</head>

<body>
    <header>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <?php
            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                // User is logged in
                echo '<li id="modifyH"><a href="modifier.php">Modifier</a></li>';
                echo '<li id="logoutH"><a href="traitement_deconnexion.php">Déconnexion</a></li>';
            } else {
                // User is not logged in
                echo '<li id="loginH"><a href="login.php">Connexion</a></li>';
                echo '<li id="signupH"><a href="signup.php">Inscription</a></li>';
            }
            ?>
        </ul>
        <h1>NexGenHost</h1>
    </header>
    <div class="container">
        <div id="signup">
            <form action="traitement_modifier.php" method="post" id="signupF" onsubmit="return validateForm()">
                <div class="element">
                    <label id="label">Nom</label>
                    <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>">
                    <span id="nomErr"></span>
                </div>

                <div class="element">
                    <label id="label">E-mail</label><br>
                    <label name="email" id="email"><?php echo $email; ?></label><br>
                    <span id="emailErr"></span>
                </div>

                <div class="element">
                    <label id="label">Date de naissance</label>
                    <input type="date" id="birth" name="birth" value="<?php echo $date_naissance; ?>">
                    <span id="dateErr"></span>
                </div>

                <div class="element">
                    <label id="label">Genre</label><br>
                </div>
                <input type="radio" id="homme" name="genre" value="Homme" <?php if ($genre === 'Homme') echo 'checked'; ?>>
                <label for="homme" id="genreOP">Homme</label>
                <input type="radio" id="femme" name="genre" value="Femme" <?php if ($genre === 'Femme') echo 'checked'; ?>>
                <label for="femme" id="genreOP">Femme</label>
                <div class="element">
                    <span id="genreErr"></span>
                </div>

                <div class="element">
                    <label id="label">Nouveau Mot de passs</label><br>
                    <input type="password" name="password" id="password">
                    <span id="passwordErr"></span><br>
                </div>

                <div class="element">
                    <label id="label">Repeter le mot de passe</label><br>
                    <input type="password" name="password2" id="password2">
                    <span id="password2Err"></span><br>
                </div>
                <div class="element">
                    <label id="label">Catégorie mot secret</label><br>
                    <select name="TmotSecret" id="TmotSecret">
                        <option value="Aucun">---Choissez une categorie---</option>
                        <option value="Couleur" <?php if ($categorie_secret === 'Couleur') echo 'selected '; ?>>Couleur</option>
                        <option value="Fruit" <?php if ($categorie_secret === 'Fruit') echo 'selected '; ?>>Fruit</option>
                        <option value="Loisir" <?php if ($categorie_secret === 'Loisir') echo 'selected '; ?>>Loisir</option>
                        <option value="Animal" <?php if ($categorie_secret === 'Animal') echo 'selected '; ?>>Animal</option>
                    </select><br>
                    <span id="TmotSecretErr"></span><br>
                </div>
                <div class="element">
                    <label id="label">Mot secret</label><br>
                    <input type="text" name="motSecret" id="motSecret" value="<?php echo $mot_secret; ?>">
                    <span id="motSecretErr"></span><br>
                </div>

                <a href="index.php">
                    <button value="Annuler" id="reset">Annuler</button>
                </a>
                <input type="submit" id="submit" value="Modifier">

            </form>
        </div>
    </div>
    <footer>
        <p>© 2024 Mon Site Web. Tous droits réservés.</p>
    </footer>
    <script src="JavaScript/modifyScript.js"></script>
</body>

</html>