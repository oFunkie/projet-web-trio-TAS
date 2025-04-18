<?php define('base', '/projet-web-trio-TAS/');?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Un TAS de Fleurs</title>
    <link rel="stylesheet" href="<?= base ?>css/stylesheet.css">
</head>
<body>

    <header>
       
        <img src="<?= base ?>images/logo.png" style="position: absolute; border-radius:50%; height:90%; left:10px; top:5px;">

       Un TAS de Fleurs
    </header>
   

    <div class="sidebar-left">
        <nav class="nav">
            <ul>
    
    
                <li><a href="<?= base ?>index.php">Accueil</a></li>
                <li><a href="<?= base ?>pages/vente.php">Fleurs</a></li>
                <li><a href="<?= base ?>pages/compte.php">Mon compte</a></li>
                <li><a href="<?= base ?>pages/register.php">Inscription</a></li>
                <li><a href="<?= base ?>pages/liste.php">Liste d'inscrits</a></li>
                <li><a href="<?= base ?>pages/achat.php">Panier</a></li>
            </ul>
        </nav>
    </div>