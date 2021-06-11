<?php 
    include "view/layout/header.php"
?>

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
            <p> Etes vous certain de vouloir supprimer le compte?</p>
            <input type="submit" name = "test1" value="Oui" class="btn colorButton"/>
            <a href="deleteAccount.php" class="btn colorButton">Non</a>
          <?php endif; ?>
        </form>

        <form method="post" action="">
          <?php if(empty($_POST)) :?>
            <input type="submit" name = "test2" value="Confirmer" class="btn colorButton"/>
          <?php endif; ?>
        </form>


<?php
    include "view/layout/footer.php";
?>