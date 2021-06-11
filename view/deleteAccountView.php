<?php 
    include "view/layout/header.php"
?>

<div class= "w-50 text-center mx-auto my-3">
<h3>Vous êtes sur le point de supprimer un compte</h3>
<form method="post" action="" class="my-4">
            <label for="id" class="form-label">Choix du compte : </label><br />
            <select name="id" id="id" class="form-select">
              <?php foreach ($accounts as $account) : ?>
              <option value="<?php echo $account->getId() ?>"><?php echo $account->getAccount_type()?> <?php echo $account->getAccount_number()?></option>
              <?php endforeach; ?>
            </select>
          </p>
          <!-- <input type="submit" value="Confirmer" class="btn btn-dark"/> -->
        </form>
          <?php if(!empty($_POST["test2"])) :?>
            <p> Êtes vous sûr de vouloir supprimer ce compte?</p>
            <input type="submit" name = "test1" value="Oui" class="btn btn-danger w-25"/>
            <a href="deleteAccount.php" class="btn btn-secondary w-25">Non</a>
          <?php endif; ?>
        </form>
        <form method="post" action="">
          <?php if(empty($_POST)) :?>
            <input type="submit" name = "test2" value="Confirmer" class="btn btn-dark w-25"/>
          <?php endif; ?>
        </form>
</div>

<?php
    include "view/layout/footer.php";
?>