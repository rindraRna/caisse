<?php 
 include("../traitement/fonction.php");
 connexion();
$conn= connexion();
if (isset($_POST['connexion'])) 
{
    $mail = ($_POST['mail']);
    $mdp = ($_POST['mdp']);
    if (!empty($mail) AND !empty($mdp)) {
        $requser = $conn->prepare("SELECT * FROM login WHERE email =? AND mdp = ?");
        $requser->execute(array($mail, $mdp));
        $userexist = $requser->rowCount();
        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['mail'] = $userinfo['mail'];
            
            header('Location: ../index.php');
        }else {
            $erreur =' Misy diso ';
            header('Location: ./erreur.php');
        }
    }else {
        $erreur = 'Fenoy daholo ireo Case ';
        echo '<font color="red">'.$erreur."</font>";
        header('Location: ./erreur.php');
    }
}

?>
 
                        
      
      