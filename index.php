<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/indexStyle.css">
    <title>Accueil</title>
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
    <nav>
        <a href="#home">Accueil</a>
        <a href="#about">À Propos</a>
        <a href="#pricing">Tarification</a>
        <a href="#faq">FAQ</a>
    </nav>

    <div class="break"></div>

    <div class="content">
        <div class="bloc">
            <h2></h2>
            <p></p>
        </div>
        <div class="img1">
            <img src="">
        </div>
    </div>

    <section id="home">

        <h2>Bienvenue chez NexGenHost!</h2>
        <div class="container">
            <p>Nous sommes heureux de vous accueillir sur notre service d'hébergement de serveurs NexGenHost. Chez nous,
                votre présence compte et nous nous engageons à vous offrir des solutions d'hébergement fiables et
                sécurisées pour répondre à tous vos besoins.</p>
        </div>
    </section>

    <section id="about">
        <h2>À Propos de NexGenHost</h2>
        <div class="container">
            <p> Nous nous engageons à fournir des solutions d'hébergement de qualité à nos clients. Actuellement, notre
                équipe se compose d'un développeur dédié qui veille à ce que nos services soient toujours à jour et
                fonctionnent correctement.</p>
        </div>
    </section>
    <section id="why-choose-us">
        <h2>Pourquoi Choisir NexGenHost ?</h2>
        <div class="container">
            <p>Nous sommes convaincus que NexGenHost est le meilleur choix pour vous, voici pourquoi :</p>
            <ul>
                <li>Fiabilité et sécurité garanties</li>
                <li>Support technique disponible 24/7 pour répondre à toutes vos questions et résoudre vos problèmes
                </li>
                <li>Plans flexibles avec des fonctionnalités avancées pour s'adapter à vos besoins spécifiques</li>
                <li>Expérience utilisateur optimale avec des serveurs haute vitesse et une interface conviviale</li>
                <li>Engagement envers la satisfaction du client avec une garantie de remboursement de 30 jours</li>
            </ul>
        </div>
    </section>
    <section id="pricing">
        <h2>Tarification</h2>
        <div class="container">
            <div class="pricing-tier">
                <h3>Basique</h3>
                <p>10€/mois</p>
                <ul class="ul">
                    <li>Stockage SSD de 10 Go</li>
                    <li>Bande passante illimitée</li>
                    <li>Support 24/7</li>
                </ul>
            </div>
            <div class="pricing-tier">
                <h3>Standard</h3>
                <p>20€/mois</p>
                <ul class="ul">
                    <li>Stockage SSD de 25 Go</li>
                    <li>Bande passante illimitée</li>
                    <li>Support 24/7</li>
                    <li>Backups automatiques quotidiens</li>
                </ul>
            </div>
            <div class="pricing-tier">
                <h3>Premium</h3>
                <p>30€/mois</p>
                <ul class="ul">
                    <li>Stockage SSD de 50 Go</li>
                    <li>Bande passante illimitée</li>
                    <li>Support 24/7</li>
                    <li>Backups automatiques quotidiens</li>
                    <li>Panneau de contrôle personnalisable</li>
                    <li>Certificat SSL</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="faq">
        <h2>FAQ</h2>
        <div class="container">
            <p>Voici quelques questions fréquemment posées concernant NexGenHost :</p>
            <ul>
                <li><strong>À quel point mes données sont-elles sécurisées ?</strong> - Vos données sont hautement
                    sécurisées chez NexGenHost. Nous utilisons des mesures de sécurité de pointe pour protéger vos
                    informations.</li>
                <li><strong>Puis-je mettre à niveau mon plan ?</strong> - Oui, vous pouvez facilement mettre à niveau
                    votre plan à tout moment pour répondre à vos besoins croissants.</li>
                <li><strong>Offrez-vous des remboursements ?</strong> - Oui, nous offrons une garantie de remboursement
                    de 30 jours pour tous nos plans d'hébergement.</li>
                <li><strong>Y a-t-il des frais de configuration ?</strong> - Non, il n'y a pas de frais de configuration
                    pour aucun de nos plans d'hébergement.</li>
                <li><strong>Quelle est la différence entre les plans Basic, Standard et Premium ?</strong> - Les plans
                    diffèrent principalement par la quantité de stockage SSD et les fonctionnalités supplémentaires
                    telles que les backups automatiques et le panneau de contrôle personnalisable.</li>
            </ul>
        </div>
    </section>

    <footer>
        <p>© 2024 Mon Site Web. Tous droits réservés.</p>
    </footer>

    <script src="JavaScript/indexScript.js"></script>
</body>

</html>