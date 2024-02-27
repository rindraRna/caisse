<?php
    include("../traitement/fonction.php");
    connexion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connexion.php" method="post">
    <div class="log">
    <h1>Login</h1>
    <input type="email" name="mail" id="">
    <input type="password" name="mdp" id="">
    <button type="submit" name="connexion">Se connecter</button>
    <?php 
            if(isset($erreur)) 
            {
                echo '<font color="red">'.$erreur."</font>";
            }

        ?>
    </div>
    </form>
</body>
</html>

