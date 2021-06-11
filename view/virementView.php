<?php 
    include "view/layout/header.php";
?>



<div class="w-50 mx-auto text-center">
    <form action="" method="post">
        <div class="dropdown">
            <label for="debit_account" class="form-label">Compte à débiter</label>
            <select name="debit_account" id="debit_account" class="form-select">
                        <?php foreach($allAccounts as $account):?>
                            <option value="<?php echo $account->getId(); ?>"><?php echo $account->getAccount_type(); ?></option>    
                        <?php endforeach;?>
            </select>
        </div>
        <div>
            <label for="operation" class="form-label">Merci d'entrer la somme à transferer</label>  
            <input type="number" name="operation_amount" id="operation_amount" class="form-control" placeholder="Entrer la somme à transférer" required/>          
        </div>            
        <div class="dropdown">
            <label for="credit_account" class="form-label">Compte à créditer</label>
            <select name="credit_account" id="credit_account" class="form-select ">
                <?php foreach($allAccounts as $account):?>
                    <option value="<?php echo $account->getId(); ?>"><?php echo $account->getAccount_type(); ?></option>    
                <?php endforeach;?>
            </select>           
        </div>
        <input type="submit" value="Envoyer" class="my-3 btn btn-dark w-25"/>
    </form>
</div>


<?php
    include "view/layout/footer.php";
?>