<?php 
session_start();
include "layout/header.php";
require "model/connexion.php";
require "model/accounts.php";


if(isset($_GET["id"]) && !empty($_GET["id"])) {
    $account = getAccount($db, $_GET["id"]);
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
<p>Solde restant : <?php echo $account[0]["amount"];?></p>
<h6>Carte associé :</h6>
<p><?php echo $account[0]["card_type"];?></p>
<!-- Tableau multidimensionnel donc [0] -->
<a href="singleCard.php?id=<?php echo $account[0]["id"]?>">Voir le détail</a>



<?php
    include "layout/footer.php";
?>