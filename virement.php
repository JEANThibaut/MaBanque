<?php      

    require "model/ConnexionModel.php";
    require "model/entity/Account.php";
    require "model/AccountsModel.php";
    require "model/entity/Operation.php";
    require "model/OperationsModel.php";
    require "model/entity/Customer.php";


    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }



    // $accounts=Account($db, $_SESSION["user"]["id"]);
    // if(!empty($_POST)){
        // creditOperation($db, $_POST);
        // debitOperation($db, $_POST);
        // addCredit($db, $_POST);
    // }

    include "view/virementView.php";
        
?>


