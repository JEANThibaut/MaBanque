<?php 
    include 'view/layout/header.php';
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
            <td><?php echo $operation->getOperation_date();?></td>
            <td><?php echo $operation->getOperation_type();?></td>
            <td><?php echo $operation->getOperation_amount();?>€</td>
            <td><?php echo $operation->getLabel();?></td>
        </tr>
    <?php endforeach; ?>
</table>


<?php 
include "view/layout/footer.php";
?>