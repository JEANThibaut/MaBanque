<?php 
    include "view/layout/header.php";
?>



<div class="w-50 mx-auto text-center">
    <form action="" method="post">
        <div class="dropdown">
            <label for="debit_account" class="form-label">Compte à débiter</label>
            <select name="debit_account" id="debit_account" class="form-select">
                        <?php foreach($accounts as $account):?>
                            <option value="<?php echo $account["id"] ?>"><?php echo $account["account_type"] ?></option>    
                        <?php endforeach;?>
            </select>
        </div>
        <div>
            <label for="operation" class="form-label"></label>  
            <input type="number" name="operation" id="operation" class="form-control" placeholder="Entrer la somme à transférer" required/>          
        </div>            
        <div class="dropdown">
            <label for="credit_account" class="form-label">Compte à créditer</label>
            <select name="credit_account" id="credit_account" class="form-select ">
                <?php foreach($accounts as $account):?>
                    <option value="<?php echo $account["id"] ?>"><?php echo $account["account_type"] ?></option>    
                <?php endforeach;?>
            </select>           
        </div>
        <input type="submit" value="Envoyer" class="my-3 btn btn-dark"/>
    </form>
</div>


<?php
    include "view/layout/footer.php";
?>