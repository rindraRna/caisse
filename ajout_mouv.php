<?php
    include("./traitement/fonction.php");
    $listCat = listeCat();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Mouvement - Ajout</title>
</head>
<body>
    <?php include("./layout/navbar.php") ?>
    <h1>Ajouter un mouvement</h1>
    <div class="mt-5 col-md-6 add-mouv">
        <form action="traitement/t_mouv.php" method="POST">
        <select class="form-select" name="categorie" aria-label="Default select example">
            <?php
                foreach($listCat as $cat){
            ?>   
                <option value="<?= $cat["id"] ?>"><?= $cat["nom"] ?></option>
            <?php     
                }
            ?>
        </select>
        <input class="form-control mt-2" aria-label="default input example" type="number" name="prix" placeholder="Prix">
        <input class="form-control mt-2" aria-label="default input example" type="text" name="description" placeholder="Description">
        <input class="form-control mt-2 mb-2" aria-label="default input example" type="date" name="date" placeholder="Date">
        <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
</body>
</html>