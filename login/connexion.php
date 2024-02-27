<?php 
 include("../traitement/fonction.php");
 connexion();

if (isset($_POST['connexion'])) 
{
    $mail = ($_POST['mail']);
    $mdp = ($_POST['mdp']);
    if (!empty($mail) AND !empty($mdp)) {
        $requser = $bdd->prepare("SELECT * FROM caisse WHERE mail =? AND mdp = ?");
        $requser->execute(array($mail, $mdp));
        $userexist = $requser->rowCount();
        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['mail'] = $userinfo['mail'];
            // $_SESSION['mail'] = $userinfo['mail'];
            header('Location: ./index.php');
        }else {
            $erreur =' Misy diso ';
        }
    }else {
        $erreur = 'Fenoy daholo ireo Case ';
    }
}

?>                     
      
      