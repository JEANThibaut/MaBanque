<?php
    require "model/CustomerModel.php";
    
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    // $accounts= Account($db, $_SESSION["user"]["id"]);
    var_dump($_SESSION["user"]);

    require "view/indexView.php" 
?>



