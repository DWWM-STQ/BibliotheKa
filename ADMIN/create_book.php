<?php
session_start();
$_SESSION['page'] = "Gestion des livres";
if ($_SESSION['roles'] != 'admin') {
    header('Location: ../HTML/home.php');
    exit();
}
require_once './COMPONENTS/navbar_admin.php';
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
    <div class="container mt-7">
        <h2 class="mb-5 mt-3">Ajout d'un livre</h2>
        <div class="border-0">
            <h5 class="mb-0">Veuillez bien remplir chaque champs</h5>
        </div>        
        <form enctype="multipart/form-data" action="create_book.php" method="post">
            <?php if (!empty($erreur) && $erreur != "") {
                echo '<div class="alert-danger"> <p>' . $erreur . '</p> </div>';
            } ?>                            
            <div class="form-row justify-content-center">
                <div class="form-group col-md-5 mt-3">
                    <label for="titre" class="sr-only">Titre</label>
                    <input type="text" id="titre" name="titre" class="form-control" placeholder="les misérables" required autofocus maxlength="254">
                </div>

                <div class="form-group col-md-5 mt-3">
                    <label for="fic" class="sr-only">Couverture</label>
                    <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="250000" />
                    <input class="form-control" type="file" name="fic" size=50 required>
                </div>
            </div>

            
                <div class="form-group col-md-5 mt-3">
                    <label for="auteur" class="sr-only">Auteur</label>
                    <input type="text" id="auteur" name="auteur" class="form-control" placeholder="Victor Hugo" required autofocus maxlength="254">
                </div>

                <div class="form-group col-md-5 mt-3">
                    <label for="illustrateur" class="sr-only">Illustrateur</label>
                    <input type="text" id="illustrateur" name="illustrateur" class="form-control" placeholder="inconnu" autofocus maxlength="254">
                </div>

                <button class="mt-3 btn btn-lg btn-warning btn-block float-end" type="submit">Ajouter le livre</button>
            </div>
            
                            
        </form>
                        
    </div>
</body>

</html>