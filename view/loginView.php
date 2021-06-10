<?php 
include "view/layout/header.php";
 ?>


<div class="row">
    <div class="col-12 col-md-4 offset-md-4 text-center">
        <h2>Connexion</h2>
        <form action="" method="post">
            <label for="email" class="form-label" >Votre Mail :</label>
            <input name="email"class="form-control my-2" type="email">
            <label for="password" class="form-label" >Votre Mot de passe :</label>
            <input name="password" class="form-control my-2" type="password">
            <input name="login" class="form-control btn btn-dark text-white my-2" type="submit" value="Me connecter">
        </form>
    </div>    
    <section class="col-12 col-md-8">

</div>



<?php
    include "view/layout/footer.php";
?>