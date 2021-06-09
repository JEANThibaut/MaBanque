<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

// require "model/entity/Account.php";
require "model/AccountsModel.php";
// require "model/entity/Operation.php";
require "model/OperationsModel.php";


if(isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $accounts= new AccountModel();
    $account= $accounts->getSingleAccount($_GET["id"]);
    var_dump($account);
    // $account = getAccount($db, $_GET["id"]);
    // $lastOperation = lastOperation($db, $_GET["id"]);
         
}
else {
    header("Location:index.php");
}
// if(($account[0]["card_type"])==NULL){
//     $account[0]["card_type"]= "Aucune";
// }
// include "view/singleAccountView.php"

?>

