<?php  session_start();
    include "layout/header.php";
    require "model/operations.php";
    require "model/connexion.php";
    $operations= Operation($db, $_GET["id"]);
?>

<h2 class="text-center my-3">Toutes vos opérations</h2>

    <table class="text-align w-75 mx-auto">
        <thead class=" text-center">
        </thead>
        <tr class="text-center">
              <th>Date</th>
              <th>Type</th>
              <th>Montant</th>
              <th>Commentaire</th>
        </tr>
        <?php foreach($operations as $operation):?>
            <tr class="text-center">
                <td><?php echo $operation["operation_date"];?></td>
                <td><?php echo $operation["operation_type"];?></td>
                <td><?php echo $operation["operation_amount"];?>€</td>
                <td><?php echo $operation["label"];?></td>
            </tr>
        <?php endforeach; ?>
    </table>


<?php 
    include "layout/footer.php";
?>