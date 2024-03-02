<?php
include '../traitement/fonction.php';
connexion();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container">

        <form action="../traitement/connexion.php" method="post">
            <?php
            if (isset($_GET['login_err'])) {
                $erreur = ($_GET['login_err']);
                switch ($erreur) {
                    case 'mdpF':
            ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> mot de passe incorect
                        </div>
            <?php
                        break;
                }
            }
            ?>
            <h2 class="text-center">Login</h2>
            <div class="form-group">
                <input type="email" class="form-control" name="mail" placeholder="Votre e-mail" id="" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="password" name="mdp" class="form-control" placeholder="votre mot de passe " id="" autocomplete="off">
            </div>
            <div class="form-group">
                <button type="submit" name="connexion" class="btn btn-primary">Se connecter</button>
            </div>
        </form>
    </div>



</body>
<style>
    body {
        text-align: center;
    }

    .container {
        width: 340px;
        height: 50px auto;
        text-align: center;
        padding-top: 100px;
    }

    .container form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgb(0, 0, 0, 0.3);
        padding: 30px;
    }

    .container h2 {
        margin: 0 0 30px 0;        
    }

    .form-control {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        width: 250px ;
        font-size: 15px;
        font-weight: bold;
    }
</style>

</html>