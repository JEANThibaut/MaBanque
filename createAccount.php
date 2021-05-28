<?php  session_start();
    include "layout/header.php";
    require "model/accounts.php";
    require "model?connexion.php";

      if(!empty($_POST)){
        var_dump($_POST);
        if(!addAccount($db, $_POST)){
          echo "Erreur d'enregistrement, merci de réessayer!";
        }
      }
?>

<div class="text-center">
  <h2>Création de votre compte</h2>

  <p>Afin de créer votre compte merci de bien vouloir remplir le formulaire suivant:</p>
  <form action="" method="post">
    <div class="card w-50">
      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Choissisez votre type de compte</option>
        <option value="1">Compte courant</option>
        <option value="2">Compte Professionel</option>
        <option value="3">Livret A</option>
      </select>
    </div>
  </form>

</div>
<?php
    include "layout/footer.php";
?>