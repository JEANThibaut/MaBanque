<?php
   
    require "model/AccountsModel.php";
    
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    // $accounts= Account($db, $_SESSION["user"]["id"]);


    require "view/indexView.php" 
?>



