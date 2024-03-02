<?php 
 include("./fonction.php");
//  connexion();
$conn= connexion();

if (isset($_POST['connexion'])) 
{
    $mail = ($_POST['mail']);
    $mdp = ($_POST['mdp']);
    if (!empty($mail) AND !empty($mdp)) {
        // $requser = $conn->prepare("SELECT * FROM login WHERE email =? AND mdp = ?");
        // $requser->execute(array($mail, $mdp));
        // $userexist = $requser->rowCount();
        $login= login($mail, $mdp);
        var_dump($login);
        if (sizeof($login) == 1) {
            session_start();
            // $userinfo = $requser->fetch();
            // var_dump($userinfo);
            // $_SESSION['id'] = $userinfo['id_log'];
            $_SESSION['mail'] = $login[0]['mail'];
            // var_dump($_SESSION);            
            header('Location: ../index.php');
         }else header('Location: ../login/login.php?login_err=mdpF');
        
    }}

?>
 
                        
      
      