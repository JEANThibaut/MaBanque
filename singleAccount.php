<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    require "model/ConnexionModel.php";
    require "model/entity/Account.php";
    require "model/AccountsModel.php";
    require "model/entity/Operation.php";
    require "model/OperationsModel.php";
    require "model/entity/CreditCard.php";
    require "model/CreditCardModel.php";


if(isset($_GET["id"]) && !empty($_GET["id"])) {
    

    $accountsModel= new AccountModel();
    $account= $accountsModel->getSingleAccount($_GET["id"]);
   
    $operationsModel= new OperationsModel();
    $lastOperation=$operationsModel->getLastOperation($_GET["id"]);

    $creditCardModel= new CreditCardModel();
    $creditCard=$creditCardModel->getCreditCard($_GET["id"]);

 


         
}
else {
    header("Location:index.php");
}

include "view/singleAccountView.php"

?>

