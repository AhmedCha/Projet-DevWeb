<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/signupStyle.css">
    <title>Sign up</title>
</head>

<body>
    <header>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <?php
            // Check if the user is logged in
            session_start();
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
            <form action="traitement_inscription.php" method="post" id="signupF" onsubmit="return validateForm()">
                <div class="element">
                    <label id="label">Nom</label>
                    <input type="text" name="nom" id="nom">
                    <span id="nomErr"></span>
                </div>

                <div class="element">
                    <label id="label">E-mail</label><br>
                    <input type="text" name="email" id="email">
                    <span id="emailErr"></span>
                </div>

                <div class="element">
                    <label id="label">Date de naissance</label>
                    <input type="date" id="birth" name="birth">
                    <span id="dateErr"></span>
                </div>

                <div class="element">
                    <label id="label">Genre</label><br>
                </div>
                <input type="radio" id="homme" name="genre" value="homme">
                <label for="homme" id="genreOP">homme</label>
                <input type="radio" id="femme" name="genre" value="Femme">
                <label for="femme" id="genreOP">Femme</label>
                <div class="element">
                    <span id="genreErr"></span>
                </div>

                <div class="element">
                    <label id="label">Mot de passs</label><br>
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

                <input type="reset" value="Reinisialiser" id="reset">
                <input type="submit" id="submit" value="Inscription"></button>

            </form>
        </div>
    </div>
    <footer>
        <p>© 2024 Mon Site Web. Tous droits réservés.</p>
    </footer>
    <script src="JavaScript/signupScript.js"></script>
</body>

</html>