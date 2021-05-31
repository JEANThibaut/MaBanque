<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

require "model/connexion.php";
require "model/accounts.php";

if(isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $account = getAccount($db, $_GET["id"]);
}    else {
    header("Location:index.php");
}
    include "view/singleAccountView.php"
?>
