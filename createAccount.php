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

    // $customerId=$_SESSION["user"]->getId();
    // var_dump($customerId);

      if(!empty($_POST)){
        // var_dump($_POST);
        
        $accountModel=new AccountModel();
        $newAccount = new Account($_POST);
        var_dump($newAccount);
        $accountModel->addAccount($newAccount);
        }
        // else{
        //   header("Location:index.php");
        // }
      

      include "view/createAccountView.php"
?>

