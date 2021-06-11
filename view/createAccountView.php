<?php  
include "view/layout/header.php" 
?>

<div class="text-center">
  <h2>Création de votre compte</h2>

<?php if(empty($_POST)): ?>
  <p>Afin de créer votre compte merci de bien vouloir remplir le formulaire suivant:</p>

<div class=" w-50 mx-auto">
  <form class="text-center" action="" method="post">
    <div>
    <label for="account-type" class="form-label">Choisissez votre type de compte</label>
      <select name="account_type" id="account-type" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option value="CompteCourant">Compte courant</option>
        <option value="ComptePro">Compte Professionel</option>
        <option value="LivretA">Livret A</option>
      </select>
    </div>
    <label for="amount" class="form-label"></label>
    <input type="number" name="amount" id="amount" class="form-control" placeholder="Entrer la somme ici" required/>
    <div>
      <label for="uncover_perm" class="form-label ">Voulez vous une autorisation de découvert?</label>
      <input type="number" name="uncover_perm" id="uncover_perm" class="form-control" placeholder="Entrer la somme ici" />
 
    </div>  
    <input type="submit" value="Envoyer" class="btn btn-dark my-3"/>
  </form>
</div>
</div>
<?php endif;?>

<?php
    include "view/layout/footer.php";
?>