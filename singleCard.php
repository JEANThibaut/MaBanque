<?php 
session_start();
include "layout/header.php";
require "model/connexion.php";
require "model/accounts.php";

if(isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $account = getAccount($db, $_GET["id"]);
}    else {
    header("Location:index.php");
}
    var_dump($account);
?>

<h2>Votre carte</h2>
<p>Numéro de carte :<?php echo $account[0]["card_number"]; ?></p>
<p>Cryptograph : <?php echo $account[0]["crypto"]; ?>
<p>Sans contact : <?php echo $account[0]["without_contact"]; ?></p>
<p>Autorisation paiement : <?php echo $account[0]["payement_perm"]; ?> €</p>
<p>Autorisation débit : <?php echo $account[0]["debit_perm"]; ?> €</p>

<?php
    include "layout/footer.php";
?>