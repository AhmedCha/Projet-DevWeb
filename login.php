<?php
session_start();

// Display error message and unset session variable
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
unset($_SESSION['error_message']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/loginStyle.css">
    <title>Log in</title>
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
        <div id="login">

            <?php if (!empty($error_message)) : ?>
                <p class="connectErr"><?php echo $error_message; ?></p>
            <?php endif; ?>

            <form action="traitement_connexion.php" method="post" id="loginF" onsubmit="return validateForm()">
                <label id="label">E-mail</label><br>
                <input type="text" name="email" id="email">
                <span id="emailErr"></span><br>

                <label id="label">Mot de passs</label><br>
                <input type="password" name="password" id="password">
                <span id="passwordErr"></span><br>

                <button id="submit">Connexion</button>
            </form>
            <a href="mot_de_passe_oublie.php">
                <button value="Mot de passe oublie" id="mdpo" class="submit">Mot de passe oublie</button>
            </a>

        </div>
    </div>
    <footer>
        <p>© 2024 Mon Site Web. Tous droits réservés.</p>
    </footer>
    <script src="JavaScript/loginScript.js"></script>
</body>

</html>