<?php
    include ("fonction.php");
    $id_cat = $_POST["categorie"];
    $prix = $_POST["prix"];
    $description = $_POST["description"];
    $date = $_POST["date"];
    ajoutMouv($id_cat,$prix, $description, $date);
    header("Location:../mouvement.php");

?>