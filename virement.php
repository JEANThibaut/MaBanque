<?php      
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    require "model/connexion.php";
    require "model/accounts.php";
    require "model/operations.php";

    $accounts=Account($db, $_SESSION["user"]["id"]);
    if(!empty($_POST)){
        // creditOperation($db, $_POST);
        // debitOperation($db, $_POST);
        // addCredit($db, $_POST);
    }

    include "view/virementView.php";
        
?>


