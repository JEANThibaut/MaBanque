<?php 
    include "view/layout/header.php"
?>


<h2>Votre carte</h2>
<p>Numéro de carte :<?php echo $account[0]["card_number"]; ?></p>
<p>Cryptograph : <?php echo $account[0]["crypto"]; ?>
<p>Sans contact : <?php echo $account[0]["without_contact"]; ?></p>
<p>Autorisation paiement : <?php echo $account[0]["payement_perm"]; ?> €</p>
<p>Autorisation débit : <?php echo $account[0]["debit_perm"]; ?> €</p>

<?php
    include "view/layout/footer.php";
?>