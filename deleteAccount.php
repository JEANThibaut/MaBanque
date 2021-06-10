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
    
    // var_dump($_GET);
    $user=$_SESSION["user"];
    $accountModel= new AccountModel();
    $accounts= $accountModel->getAllAccount($user->getId());

    if(!empty($_POST)){

            $accountModel->deleteAccount($_POST["id"], $user->getId());
            header ("Location:index.php");
            exit();
    }

    
    
    

    // if($_POST){
    //     var_dump($_POST);
    // }





    include "view/deleteAccountView.php";
?>