<?php
session_start();
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
unset($_SESSION['error_message']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/mot_de_passe_oublie.css">
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

            <form action="traitement_mdp_oublie.php" method="post">
                <label id="label">E-mail</label><br>
                <input type="text" name="email" id="email">

                <div class="element">
                    <label id="label">Catégorie mot secret</label><br>
                    <select name="TmotSecret" id="TmotSecret">
                        <option value="Aucun">---Choissez une categorie---</option>
                        <option value="Couleur">Couleur</option>
                        <option value="Fruit">Fruit</option>
                        <option value="Loisir">Loisir</option>
                        <option value="Animal">Animal</option>
                    </select><br>
                    <span id="TmotSecretErr"></span><br>
                </div>
                <div class="element">
                    <label id="label">Mot secret</label><br>
                    <input type="text" name="motSecret" id="motSecret">
                    <span id="motSecretErr"></span><br>
                </div>

                <button id="submit">Continuer</button>

            </form>
        </div>
    </div>
    <footer>
        <p>© 2024 Mon Site Web. Tous droits réservés.</p>
    </footer>
</body>

</html>