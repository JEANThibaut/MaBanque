<?php      

    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    include "view/layout/header.php";
?>

<?php
    include "view/layout/footer.php";
?>