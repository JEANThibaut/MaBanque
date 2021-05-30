<?php  session_start();
    include "layout/header.php";
    require "model/accounts.php";
    require "model/connexion.php";

      if(!empty($_POST)){
        var_dump($_POST);
        if(!addAccount($db, $_POST)){
          echo "Erreur d'enregistrement, merci de réessayer!";
        }
        else{
          header("Location:index.php");
        }
      }
?>

<div class="text-center">
  <h2>Création de votre compte</h2>

  <p>Afin de créer votre compte merci de bien vouloir remplir le formulaire suivant:</p>

<div class=" w-50 mx-auto">
  <form class="text-center" action="" method="post">
    <div>
    <label for="account-type" class="form-label">Choissisez votre type de compte</label>
      <select name="account_type" id="account-type" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option value="CompteCourant">Compte courant</option>
        <option value="ComptePro">Compte Professionel</option>
        <option value="LivretA">Livret A</option>
      </select>
    </div>
    <label for="amount" class="form-label"></label>
    <input type="number" name="amount" id="amount" class="form-control" placeholder="Entrer la somme ici" required/>
    <div>
      <label for="uncover_permission" class="form-label ">Voulez vous une autorisation de découvert?</label>
      <select name="uncover_permission" id="uncover_permission" class="form-select form-select-sm" aria-label=".form-select-sm example">
          <option value="Non">Non</option>
          <option value="Oui">Oui</option>
    </div>  
    <input type="submit" value="Envoyer" class="bn btn-dark my-3"/>
  </form>
</div>
</div>

<?php
    include "layout/footer.php";
?>