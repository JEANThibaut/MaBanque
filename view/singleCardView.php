<?php 
    include "view/layout/header.php"
?>


<h2>Votre carte</h2>
<p>Numéro de carte :<?php echo $creditCard->getCard_type() ?></p>
<p>Cryptograph : <?php echo $creditCard->getCrypto(); ?>
<p>Sans contact : <?php echo $creditCard->getWithout_contact(); ?></p>
<p>Autorisation paiement : <?php echo $creditCard->getPayement_perm(); ?> €</p>
<p>Autorisation débit : <?php echo $creditCard->getDebit_perm(); ?> €</p>

<?php
    include "view/layout/footer.php";
?>