<?php 
session_start();
$_SESSION['page'] = "Accueil";
require_once '../COMPONENTS/navbar.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require '../COMPONENTS/links.php'; ?>
    <title>BibliotheKa | <?= $_SESSION['page'] ?></title>
</head>
<body>


<!-- DEBUT ACCUEIL-->
            <div class="container_home">
            <div class="left_home">
            <h1>Bienvenue</h1>
            <h1>chez BibliotheKa...</h1>
            <h3>Où les mondes prennent vie entre les pages... </h3>
            <h3>...et les rêves prennent forme</h3>
<!-- FIN ACCUEIL-->
        
<!-- DEBUT POUR BOUTON-->
            <div>
            <button class="button_home">Connexion</button>
            <button class="button_home">Inscription</button>
            </div>
            </div>
<!-- FIN BOUTTON-->
    
<!-- DEBUT IMAGE-->
            <div   div class="image-container_home">
            <img src="../img/1.jpg" alt="Image" class="fade_home img_home">
            <img src="../img/3.jpg" alt="Image" class="fade_home img_home">
            <img src="../img/2.jpg" alt="Image" class="fade_home img_home">
            <img src="../img/6.jpg" alt="Image" class="fade_home img_home">
            </div>
            </div>
<!-- FIN IMAGE-->

<!-- CODE DU 22/08/2023 JEAN BERNARD-->
</body>
</html>