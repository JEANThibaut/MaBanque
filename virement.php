<?php  session_start();
    include "layout/header.php";
    require "model/connexion.php";
    include "model/accounts.php";

    $accounts=Account($db, $_SESSION["user"]["id"]);
    var_dump($_POST);
    if(!empty($_POST)){
        var_dump($_POST);
        echo "LISTE DES COMPTES  ";
        var_dump($accounts);
        echo "DEBIT ";
        var_dump($_POST["debit_account"]);
        echo "CREDIT ";
        var_dump($_POST["credit_account"]);
    }
    else{
        echo "Le virement à échoué";
    }
?>


<div class="row">
    <form action="" method="post">
        <div class="dropdown">
            <label for="debit_account" class="form-label">Compte à débiter</label>
            <select name="debit_account" id="debit_account" class="form-select w-50">
                        <?php foreach($accounts as $account):?>
                        <option value="<?php echo $account["id"] ?>"><?php echo $account["account_type"] ?></option>    
                        <?php endforeach;?>
            </select>
        </div>
        <div>
            <label for="operation" class="form-label"></label>  
            <input type="number" name="operation" id="operation" class="form-control w-50" placeholder="Entrer la somme à transférer" required/>          
        </div>            
        <div class="dropdown">
            <label for="credit_account" class="form-label">Compte à créditer</label>
            <select name="credit_account" id="credit_account" class="form-select w-50">
                <?php foreach($accounts as $account):?>
                <option value="<?php echo $account["id"] ?>"><?php echo $account["account_type"] ?></option>    
                <?php endforeach;?>
            </select>           
        </div>
        <input type="submit" value="Envoyer" class="bn btn-dark"/>
    </form>
</div>


<?php
    include "layout/footer.php";
?>