<?php
    
    include "layout/header.php";
    require "model/connexion.php";
    require "model/userModel.php";

// Si les champ nom et mot de passe ont été remplis
if(isset($_POST["email"]) && isset($_POST["password"])) {
    $user = getUserByEmail($db, $_POST["email"]);
    //Si la base de données a renvoyé un utilisateur avec ce mail
    if($user){
    // On vérifie qu'ils correspondent aux information du tableau
        if(password_verify($_POST["password"], $user["customer_password"])) {
            // On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer sur index
            session_start();
            $_SESSION["user"] = $user;
            header("Location:index.php");
            exit;
        }
    }
    // Si les données rentrées dans le formulaire ne sont pas les bonnes
        $error_message = "Identifiants invalides";
}

?>


<?php if (isset($error_message)): ?>
    <div class="alert alert-danger text-center" role="alert">
        <?php echo $error_message ?>
       
    </div>
<?php endif ?>

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
    include "layout/footer.php";
?>