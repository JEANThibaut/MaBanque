<?php     
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    require "model/accounts.php";
    require "model/connexion.php";

      if(!empty($_POST)){
        var_dump($_POST);
        if(!addAccount($db, $_POST)){
          echo "Erreur d'enregistrement, merci de réessayer!";
        }
        else{
          header("Location:index.php");
        }
      }

      include "view/createAccountView.php"
?>

