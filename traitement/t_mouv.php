<?php
    include ("fonction.php");
    $prix = $_POST["prix"];
    $description = $_POST["description"];
    $date = $_POST["date"];
    ajoutMouv($prix, $description, $date);
    header("Location:../mouvement.php");

?>