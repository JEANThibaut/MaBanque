<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location:login.php");
        exit;
    }

    include "layout/header.php";
    require "model/accounts.php";
    
    $accounts= get_accounts();
?>

<section class="container-fluid my-5 text-center"> 
    <h2>Vos Comptes en banques</h2>
        <div class="row">
            <?php foreach($accounts as $index => $account): ?>
            <article class="card col-lg-3 col-md-8 col-sm-10 text-center my-3 mx-auto">
                <div>
                    <h3><?php echo $account["name"]?></h3>
                    <p><?php echo $account["number"] ?></p>
                    <h3>Propiétaire :</h3>
                    <p><?php echo $account["owner"]?></p>
                    <h3>Solde Restant: </h3>
                    <p><?php echo $account["amount"]?> €</p>
                </div>
            </article>
            <?php endforeach ?>
        </div>
</section>

<?php
    include "layout/footer.php";
?>