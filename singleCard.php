<?php 
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    require "model/entity/CreditCard.php";
    require "model/CreditCardModel.php";


if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $creditCardModel= new CreditCardModel();
    $creditCard=$creditCardModel->getCreditCard($_GET["id"]);
}    else {
    header("Location:index.php");
}
    include "view/singleCardView.php"
?>
