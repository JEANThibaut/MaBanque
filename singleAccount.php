<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

require "model/entity/Account.php";
require "model/AccountsModel.php";
require "model/entity/Operation.php";
require "model/OperationsModel.php";


if(isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $accountsModel= new AccountModel();
    $account= $accountsModel->getSingleAccount($_GET["id"]);
   
    $operationsModel= new OperationsModel();
    $lastOperation=$operationsModel->getLastOperation($_GET["id"]);

         
}
else {
    header("Location:index.php");
}
// if(($account[0]["card_type"])==NULL){
//     $account[0]["card_type"]= "Aucune";
// }
include "view/singleAccountView.php"

?>

