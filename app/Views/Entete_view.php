<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Saint Pavut</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<header>
    <div id="ban"></div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <!--<a class="navbar-brand" href="#">Saint-Pavut</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarNav">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>/Participants">Participants</a>
                    </li>
                    <li class="nav-item">
                        <a href="">Contactez-nous</a>
                    </li>
                    <?php if( $connecte==0 ): ?>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>/Gamer">Connexion</a></li>
                    <?php else: ?>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>/Gamer">Deconnexion</a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>/Gamer/AccueilGamer">Profil</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--<nav>
        <ul>
            <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
            <li><a href="<?php echo base_url(); ?>/Participants">Participants</a></li>
            <li><a href="">Contactez-nous</a></li>

            <?php if( $connecte==0 ): ?>
            <li><a href="<?php echo base_url(); ?>/Gamer">Connexion</a></li>
            <?php else: ?>
            <li><a href="<?php echo base_url(); ?>/Gamer">Deconnexion</a></li>
            <li><a href="<?php echo base_url(); ?>/Gamer/AccueilGamer">Profil</a></li>
            <?php endif ?>
        </ul>
    </nav>-->

</header>

