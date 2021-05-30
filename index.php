<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    include "layout/header.php";
    require "model/connexion.php";
    require "model/accounts.php";
    
    
    $accounts= Account($db, $_SESSION["user"]["id"]);
       
?>


<h2 class="text-center my-3">Vos comptes</h2>
<div class="row">
    <?php foreach($accounts as $account):?>
        <div class="card col-lg-3 mx-5 my-3 py-3 text-center">
            <h4><?php echo $account["account_type"]; ?></h4>
            <p>Solde restant : <?php echo $account["amount"];?> €</p>
            <a class="btn btn-dark" href="singleAccount.php?id=<?php echo $account["id"]?>">Voir le compte</a>
        </div>
    <?php endforeach; ?>
</div>

<?php
    include "layout/footer.php";
?>
