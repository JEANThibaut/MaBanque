<?php
    session_start();
    include "layout/header.php";
    
    $user = "Dupond";
    $passwd = "qwerty";
    $login = "Merci! Vous êtes mainenent connecté";
   
?>

<?php if(!empty($_POST)){
    $userAccount = $_POST;
    if($user==$userAccount["user"] && $passwd==$userAccount["passwd"]){
        //déclaration de la variable de session
        $_SESSION['user']=$userAccount["user"];
        //redirection
        header("Location:index.php");
    exit;
    }
    else{
        $error = "Identifiants invalides, merci de réssayéer";
    
    }
}
?>


<?php if (isset($error)): ?>
    <div class="alert alert-danger text-center" role="alert">
        <?php echo $error ?>
        <p>Retourner à l'acceuil</p>
        <a class="btn btn-dark text white" href="index.php">Accueil</a>
    </div>
<?php endif ?>

<div class="row">
    <div class="col-12 col-md-4 offset-md-4 text-center">
        <h2>Connexion</h2>
        <form action="" method="post">
            <input name="user"class="form-control my-2" type="text">
            <input name="passwd" class="form-control my-2" type="text">
            <input name="login" class="form-control btn btn-dark text-white my-2" type="submit" value="Me connecter">
        </form>
    </div>    
    <section class="col-12 col-md-8">

</div>



<?php
    include "layout/footer.php";
?>