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
    
</body>
</html>