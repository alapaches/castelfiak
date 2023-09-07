<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Castel Pêche</title>
    <meta name="description" content="Voici le site du Magasin Castel Pêche situé à Essôme sur Marne de Mr Gerardin William dans le cadre de la formation dev web">
    <link rel="stylesheet" href="/castelpeche/css/style.css">
    <link rel="shortcut icon" href="/castelpeche/img/Logocastel.jpg" type="image/jpg">
    <script src="/castelpeche/scripts/script.js" defer></script>

</head>

<body>
    <header>
        <nav id='menu'>
            <img class="logo" src="/castelpeche/img/Logocastel.jpg" alt="Logo castel pêche">
            <div>
                <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
                <ul>
                    <li><a href="/castelpeche/index.php">Accueil</a></li>
                    <li><a class='dropdown-arrow' href='#'>Types de Pêches</a>
                        <ul class='sub-menus'>
                            <li><a href="/castelpeche/templates/peches/carnassier.php">Pêche du Carnassier</a></li>
                            <li><a href="/castelpeche/templates/peches/silure.php">Pêche du Silure</a></li>
                            <li><a href="/castelpeche/templates/peches/carpe.php">Pêche de la Carpe</a></li>
                            <li><a href="/castelpeche/templates/peches/coup.php">Pêche au coup</a></li>
                            <li><a href="/castelpeche/templates/peches/truite.php">Pêche à la truite</a></li>
                            <li><a href="/castelpeche/templates/peches/feeder.php">Pêche au Feeder</a></li>
                            <li><a href="/castelpeche/templates/peches/grosmat.php">Electronique & Gros matériel</a></li>
                        </ul>
                    </li>
                    <li><a href="/castelpeche/templates/actualite.php">Actualités</a></li>
                    <?php if (!empty($_SESSION['user'])) {
                    ?> <li><a href="/castelpeche/models/deconnexion.php">Deconnexion</a></li>
                    <?php } else {
                    ?> <li><a href="/castelpeche/templates/forms/connectAdmin.php">Connexion</a></li>
                    <?php } ?>
                    <?php if (!empty($_SESSION['user'])) {
                    ?> <li><a href="/castelpeche/templates/forms/formulaireAjout.php">Ajout article</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </header>
</body>