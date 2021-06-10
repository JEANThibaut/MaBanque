<?php     
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }
    require "model/ConnexionModel.php";
    require "model/OperationsModel.php";
    require "model/entity/Operation.php";
    
    $operationsModel= new OperationsModel();
    $operations= $operationsModel->getAllOperations($_GET["id"]);

    include "view/allOperationView.php"
?>
