<?php
    function connexion(){
        $dbName = "localhost";
        $dbPort = 3306;
        $user = "root";
        $mdp = "";
        $bdd = "gds";

        try{
            $conn = new PDO("mysql:host=$dbName;port=$dbPort;dbname=$bdd", $user, $mdp);
            return $conn;
        }
        catch(PDOException $e){
            echo "Erreur : " . $e -> getMessage();
        }
    }

    /*function modifPostes($id, $nom, $description){
        try{
            $conn = connexion();
            $stmt = $conn -> prepare("UPDATE postes SET nom=?, description=?, WHERE id=?");
            $stmt -> bindParam(1, $id);
            $stmt -> bindParam(2, $nom);
            $stmt -> bindParam(3, $description);
            $stmt -> execute();
        }
        catch(PDOException $e){
            echo "Erreur : " . $e -> getMessage();
        }
        finally{
            if($stmt != null){
                $stmt -> closeCursor();
            }
        }
    }*/

    /*function getUser(){
        try{
            $conn = connexion();
            $stmt = $conn -> prepare("SELECT * FROM user");
            $stmt -> execute();
            while($result = $stmt -> fetch(PDO::FETCH_OBJ)){
                $data[] = [
                    "id" => $result -> id,
                    "nom" => $result -> nom,
                    "prenom" => $result -> prenom,
                    "email" => $result -> email,
                    "telephone" => $result -> telephone,
                    "mdp" => $result -> mdp,
                    "poste" => $result -> poste,
                    "sexe" => $result -> sexe,
                    "pdp" => $result -> pdp,
                ];
            }
            return $data;
        }
        catch(PDOException $e){
            echo "Erreur : " . $e -> getMessage();
        }
        finally{
            if($stmt != null){
                $stmt -> closeCursor();
            }
        }
    }*/

    /*function getInfo($username, $mdp){
        try{
            $conn = connexion();
            $stmt = $conn -> prepare("SELECT id, email, pdp, role_id AS role FROM user WHERE nomUtilisateur=? AND mdp=?");
            $stmt -> bindParam(1, $username);
            $stmt -> bindParam(2, $mdp);
            $stmt -> execute();
            $data = [];
            while($result = $stmt -> fetch(PDO::FETCH_OBJ)){
                $data = [
                    "id" => $result -> id,
                    "email" => $result -> email,
                    "pdp" => $result -> pdp,
                    "role" => $result -> role,
                ];
            }
            return $data;
        }
        catch(PDOException $e){
            echo "Erreur : " . $e -> getMessage();
        }
        finally{
            if($stmt != null){
                $stmt -> closeCursor();
            }
        }
    }*/
?>