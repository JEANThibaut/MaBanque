<?php  session_start();
    include "layout/header.php";
    require "model/connexion.php";
    include "model/accounts.php";

    $accounts=Accounts($db);
?>



    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Compte à débiter
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <?php foreach($accounts as $account):?>
        <li><a class="dropdown-item" href="#"><?php echo $account["account_type"] ?></a></li>
        <?php endforeach;?>
    </ul>
    </div>

    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Compte à créditer
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <?php foreach($accounts as $account):?>
        <li><a class="dropdown-item" href="#"><?php echo $account["account_type"] ?></a></li>
        <?php endforeach;?>
    </ul>
    </div>



<?php
    include "layout/footer.php";
?>