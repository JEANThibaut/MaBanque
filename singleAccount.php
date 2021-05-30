<?php 
session_start();
include "layout/header.php";
require "model/connexion.php";
require "model/accounts.php";
require "model/operations.php";


if(isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $account = getAccount($db, $_GET["id"]);
    $lastOperation = lastOperation($db, $_GET["id"]);
         
}
    else {
        header("Location:index.php");
    }
if(($account[0]["card_type"])==NULL){
    $account[0]["card_type"]= "Aucune";
}

?>

<h3>Type de compte</h3>
<p><?php echo $account[0]["account_type"];?></p>
<h5>Numéro du compte</h5>
<p><?php echo $account[0]["account_number"];?></p>
<p>Solde restant : <?php echo $account[0]["amount"];?> €</p>
<h6>Carte associé :</h6>
<p><?php echo $account[0]["card_type"];?></p>
<!-- Tableau multidimensionnel donc [0] -->
<a href="singleCard.php?id=<?php echo $account[0]["id"]?>">Voir le détail</a>

<h3>Dernière Opération</h3>
    <p>Type d'opération : <?php echo $lastOperation[0]["operation_type"];?> </p>
    <p>Date de l'opération : <?php echo $lastOperation[0]["operation_date"];?> </p>
    <p>Montant de l'opération : <?php echo $lastOperation[0]["operation_amount"];?> </p>
    <p>Intitulée de l'opération : <?php echo $lastOperation[0]["label"];?> </p>
    <a class="btn btn-dark" href="allOperations.php?id=<?php echo $_GET["id"]?>">Voir toutes les opérations</a>
<?php
    include "layout/footer.php";
?>