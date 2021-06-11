<?php      

    require "model/ConnexionModel.php";
    require "model/entity/Account.php";
    require "model/AccountsModel.php";
    require "model/entity/Operation.php";
    require "model/OperationsModel.php";
    require "model/entity/Customer.php";
    require "model/TransactionModel.php";


    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }
    $transaction= New TransactionModel();
    $accountModel= new AccountModel();
    $allAccounts= $accountModel->getAllAccount($_SESSION["user"]->getId());
    if($_POST){
        $credit_account= $accountModel->getSingleAccount($_POST["credit_account"]);
        $debit_account= $accountModel->getSingleAccount($_POST["debit_account"]);
        $operationAmount=floatval($_POST["operation_amount"]);
       
        //Operation:
        $debit_amount=$debit_account->getAmount();
        $credit_amount=$credit_account->getAmount();
     

        $totalDebit=$debit_amount - $operationAmount;
        $totalCredit=$credit_amount + $operationAmount; 

        if(!$transaction->transaction($operationAmount, $totalDebit, $totalCredit, $debit_account, $credit_account)){
            echo "erreur lors du transfert";
        }

    }


    
    // $credit_account= $accountModel->getSingleAccount($_POST["credit_account"]);
    // $debit_account= $accountModel->getSingleAccount($_POST["debit_account"]);




    // $newTransaction= new TransactionModel();
    // $transaction=$newTransaction->Transaction();


    // $accounts=Account($db, $_SESSION["user"]["id"]);
    // if(!empty($_POST)){
        // creditOperation($db, $_POST);
        // debitOperation($db, $_POST);
        // addCredit($db, $_POST);
    // }

    include "view/virementView.php";
        
?>


