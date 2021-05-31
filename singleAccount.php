<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

require "model/connexion.php";
require "model/accounts.php";
require "model/operations.php";


if(isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $account = getAccount($db, $_GET["id"]);
    $lastOperation = lastOperation($db, $_GET["id"]);
         
}
else {
    header("Location:index.php");
}
if(($account[0]["card_type"])==NULL){
    $account[0]["card_type"]= "Aucune";
}
include "view/singleAccountView.php"

?>
