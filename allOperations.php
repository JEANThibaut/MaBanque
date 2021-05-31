<?php     
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    require "model/operations.php";
    require "model/connexion.php";
    $operations= Operation($db, $_GET["id"]);

    include "view/allOperationView.php"
?>
