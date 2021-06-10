<?php 
    include "view/layout/header.php"
?>

<div class= "text-center">
    <h3>Vous êtes sur le point de supprimer votre <?php echo $account->getAccount_type() ;?> </h3>
    <p>Numéro <?php echo $account->getAccount_number();?> 
    <h4>Êtes-vous sûr?</h4>
</div>


<div>
<form action="" method="POST">
<input type="submit" name="id" value="Supprimer" class="btn btn-danger w-25 my-2 mx-auto">
</form>
<a class="btn btn-dark w-25  my-2 mx-auto" href="index.php">Retourner à l'acceuil</a>
</div>

<?php
    include "view/layout/footer.php";
?>