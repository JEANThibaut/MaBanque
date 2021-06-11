<?php 
    require "model/ConnexionModel.php";
    require "model/entity/Customer.php";
    require "model/entity/Account.php";
    require "model/AccountsModel.php";

    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }
    
    $user=$_SESSION["user"];
    $accountModel= new AccountModel();
    $accounts= $accountModel->getAllAccount($user->getId());

    if(!empty($_POST["test1"])){

            $accountModel->deleteAccount($_POST["id"], $user->getId());
            header ("Location:index.php");
            exit();
    }

    include "view/deleteAccountView.php";
?>