<?php 
    include "view/layout/header.php"
?>

<form method="post" action="" class="my-4">
          <p>
            <label for="id" class="form-label">Choix du compte : </label><br />
            <select name="id" id="id" class="form-select">
              <?php foreach ($accounts as $account) : ?>
              <option value="<?php echo $account->getId() ?>"><?php echo $account->getAccount_type()?> <?php echo $account->getAccount_number()?></option>
              <?php endforeach; ?>
            </select>
          </p>
          <input type="submit" value="Confirmer" class="btn btn-dark"/>
        </form>


<?php
    include "view/layout/footer.php";
?>