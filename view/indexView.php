<?php 
    include "view/layout/header.php";
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
    include "view/layout/footer.php";
?>
