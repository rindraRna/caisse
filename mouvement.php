<?php
    include("./traitement/fonction.php");
    $mouvements = listeMouv();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouvements</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
    <?php include("./layout/navbar.php") ?>
    <h1>Liste des mouvements</h1>
    <div class="mt-5 mouvement">
        <a href="./ajout_mouv.php"  style="text-decoration: none;">
        <button type="button" class="btn btn-outline-primary">Ajouter un mouvement</button>
        </a>

        <div class="mt-2 tab-mouv">
            <table class="table table-hover" border="1">
                <tr>
                    <th>Date</th>
                    <th>Categorie</th>
                    <th>Prix</th>
                    <th>Description</th>
                </tr>
                <?php
                    foreach($mouvements as $mouvement){
                ?>
                <tr>
                    <td><?php echo $mouvement["date"] ?></td>
                    <td><?php echo $mouvement["categorie"] ?></td>
                    <td><?php echo $mouvement["prix"] ?></td>
                    <td><?php echo $mouvement["description"] ?></td>
                </tr>
                <?php 
                    }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>