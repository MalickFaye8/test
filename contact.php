<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Ajout de styles pour le titre "Informations saisies" */
        h2 {
            text-align: center;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
    <script src="Java script/script.js"></script>
</head>
<body class="contact">
    <header class="main-header">
        <a href="contact.php" class="logo">
            <div>
                <i class="fas fa-hiking"></i>
                <img src="images/ensae.png" class="logo-image">
            </div>
            <span class="logo-text">Ecole nationale de la Statistique et de l'Analyse économique</span>
        </a>
        <nav>
            <ul>
            <li class="active"><a href="accueil.html">Accueil</a></li>
            <li class="active"><a href="presentation.html">Présentation</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="school-info">
        <div>
            <h2>Informations sur l'école</h2>
            <p>L'École nationale de la Statistique et de l'Analyse économique (ENSAE) est un établissement renommé dédié à la formation dans le domaine de la statistique et de l'économique.</p>
            <p>Nous nous engageons à fournir une éducation de qualité et à former les futurs experts dans ces domaines.</p>
        </div>
        <div>
            <h2>Contactez-nous</h2>
            <p>Adresse: Colobane, Rue Cheikh Ahmadou Bamba, Dakar</p>
            <p>Téléphone: +221 77 203 15 82</p>
            <p>Email: Scolarite.ensae@ansd.sn</p>
        </div>
    </section>


    <section>
        <h1>Renseignez vos informations svp</h1>

        <?php
        // Initialiser les variables pour éviter les erreurs
        $nom1 = $prenom1 = $email1 = $telephone1 = "";
        $nom2 = $prenom2 = $email2 = $telephone2 = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les valeurs des champs du premier formulaire
            $nom1 = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "";
            $prenom1 = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "";
            $email1 = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
            $telephone1 = isset($_POST["telephone"]) ? htmlspecialchars($_POST["telephone"]) : "";

            // Mettre à jour les variables du deuxième formulaire avec les valeurs du premier formulaire
            $nom2 = $nom1;
            $prenom2 = $prenom1;
            $email2 = $email1;
            $telephone2 = $telephone1;

            // Réinitialiser les variables du premier formulaire
            $nom1 = $prenom1 = $email1 = $telephone1 = "";
        }
        ?>

        <div class="form-container">
            <!-- formulaire -->
            <form form method="post" id="contactForm" onsubmit="return validateForm()">
                <label for="nom">Nom : *</label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom1; ?>" required>

                <label for="prenom">Prénom : *</label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $prenom1; ?>" required>

                <label for="email">Email : *</label>
                <input type="email" id="email" name="email" value="<?php echo $email1; ?>" required>

                <label for="telephone">Téléphone : *</label>
                <input type="tel" id="telephone" name="telephone" pattern="[0-9]{9}" value="<?php echo $telephone1; ?>" required>
                
                <input type="submit" value="Envoyer">
            </form>

            <!-- Informations saisies -->
            <div style="flex-grow: 1; margin-left: 20px;">
                <form method="post" id="contactForm2">
                    <h2>Informations saisies<br></h2>
                    <label for="nom2">Nom : </label>
                    <input type="text" id="nom2" name="nom2" value="<?php echo $nom2; ?>" required readonly>

                    <label for="prenom2">Prénom : </label>
                    <input type="text" id="prenom2" name="prenom2" value="<?php echo $prenom2; ?>" required readonly>

                    <label for="email2">Email : </label>
                    <input type="email" id="email2" name="email2" value="<?php echo $email2; ?>" required readonly>

                    <label for="telephone2">Téléphone : </label>
                    <input type="tel" id="telephone2" name="telephone2" pattern="[0-9]{9}" value="<?php echo $telephone2; ?>" required readonly>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
