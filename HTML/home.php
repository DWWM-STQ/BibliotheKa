<?php 

require_once '../COMPONENTS/navbar.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require '../COMPONENTS/links.php'; ?>
    <title>Accueil</title>

<style>
    .container {
        display: flex;
        flex-direction: row;
    }
    .left {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        width: 50%;
        text-align: left;
        color: yellow; 
    }
    .right {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: flex-end;
        width: 50%;
    }
    .image-container {
        display: flex;
        justify-content: flex-end;
        align-items: center; 
        width: 100%;
        height: 100vh;
    }
    img {
        width: 200px;
        height: 200px;
    }
    .button {
        margin: 10px;
        display: inline-block;
        background-color: yellow;
        color: black;
    }
    


    .fade {
        animation: fade 5s ease-in-out infinite alternate;
    }

    @keyframes fade {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
</style>

<body>

<!-- DEBUT ACCUEIL-->
            <div class="container">
            <div class="left">
            <h1>Bienvenue</h1>
            <h1>chez BibliotheKa...</h1>
            <h3>Où les mondes prennent vie entre les pages... </h3>
            <h3>...et les rêves prennent forme</h3>
<!-- FIN ACCUEIL-->
        
<!-- DEBUT POUR BOUTON-->
            <div>
            <button class="button">Connexion</button>
            <button class="button">Inscription</button>
            </div>
            </div>
<!-- FIN BOUTTON-->
    
<!-- DEBUT IMAGE-->
            <div   div class="image-container">
            <img src="../img/1.jpg" alt="Image" class="fade">
            <img src="../img/3.jpg" alt="Image" class="fade">
            <img src="../img/2.jpg" alt="Image" class="fade">
            <img src="../img/6.jpg" alt="Image" class="fade">
            </div>
            </div>
<!-- FIN IMAGE-->

<!-- CODE DU 22/08/2023 JEAN BERNARD-->
</body>