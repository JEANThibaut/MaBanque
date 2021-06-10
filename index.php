<?php
    require "model/ConnexionModel.php";
    require "model/entity/Account.php";
    require "model/AccountsModel.php";
    require "model/entity/Customer.php";
    require "model/CustomerModel.php";
    

    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }
    
    
    $accountModel=new AccountModel();
    $customer=$_SESSION["user"];
    $accounts = $accountModel->getAllAccount($customer->getId());
    
    


    

    require "view/indexView.php" 
?>



