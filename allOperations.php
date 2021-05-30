<?php  session_start();
    include "layout/header.php";
    require "model/operations.php";
    require "model/connexion.php";
    $operations= Operation($db, $_GET["id"]);
    var_dump($operations);
?>

<h2 class="text-center my-3">Vos opérations sur le compte</h2>
<div class="row">
    <?php foreach($operations as $operation):?>
        <div class="col-lg-3 mx-5 my-3 py-3 text-center">
            <p><?php echo $operation["operation_type"] . $operation["operation_amount"] . $operation["operation_date"]; ?></p>
            <p> <?php echo $operation["operation_amount"];?> €</p>

        </div>
    <?php endforeach; ?>
</div>

<?php 
    include "layout/footer.php";
?>