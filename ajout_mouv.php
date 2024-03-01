<?php
    include("./traitement/fonction.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouvement - Ajout</title>
</head>
<body>
    <div class="add-mouv">
        <form action="traitement/t_mouv.php" method="POST">
            <div class="categories">
                <select name="" id="">
                    <option value="">Transport</option>
                    <option value="">Nourriture</option>
                </select>
            </div>
            <div class="prix">
                <input type="number" name="prix" placeholder="Prix">
            </div>
            <div class="description">
                <input type="text" name="description" placeholder="Description">
            </div>
            <div class="date">
                <input type="date" name="date" placeholder="Date">
            </div>

            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>