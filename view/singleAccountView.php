<?php 
    include "view/layout/header.php"
?>


<div class="text-center">
<h3>Type de compte</h3>
<h4><?php echo $account->getAccount_type()?></h4>

<div class="card w-50 text-center mx-auto">
    <h5>Numéro du compte</h5>
    <p><?php echo $account->getAccount_number()?></p>
    <p>Solde restant : <?php echo $account->getAmount()?> €</p>
    <h6>Carte associé :<?php echo $creditCard->getCard_type();?></h6>
    
    
<a class="btn btn-dark w-50 mx-auto" href="singleCard.php?id=<?php echo $_GET["id"]?>">Voir le détail</a>
</div>

<h3>Dernière Opération</h3>
    <div class= "card w-50 text-center mx-auto">
        <p>Type d'opération : <?php echo $lastOperation->getOperation_type();?> </p>
        <p>Date de l'opération : <?php echo $lastOperation->getOperation_date();?> </p>
        <p>Montant de l'opération : <?php echo $lastOperation->getOperation_amount();?> </p>
        <p>Intitulée de l'opération : <?php echo $lastOperation->getlabel();?> </p>
        <a class="btn btn-dark w-50 mx-auto" href="allOperations.php?id=<?php echo $_GET["id"]?>">Voir toutes les opérations</a>
    </div>

    </div>
<?php
    include "view/layout/footer.php";
?>