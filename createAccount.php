<?php     
   require "model/ConnexionModel.php";
   require "model/entity/Customer.php";
   require "model/CustomerModel.php";
   require "model/entity/Account.php";
   require "model/AccountsModel.php";

    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }


      if(!empty($_POST)){

        
        $accountModel=new AccountModel();
        $newAccount = new Account($_POST);
        $addAccount=$accountModel->addAccount($newAccount);
        var_dump($addAccount);
        // header("Location:index.php");
        if($addAccount){
        header ("Refresh: 5;URL=index.php");
        }
        }
        // else{
        //   header("Location:index.php");
        // }
      

      include "view/createAccountView.php"
?>

