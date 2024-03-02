<?php
    include('fonction.php');
    $nom = $_POST["nom"];
    ajoutCat($nom);
    header("Location:../liste_categories.php");

?>