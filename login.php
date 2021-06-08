<?php
    
    require "model/CustomerModel.php";

// Si les champ nom et mot de passe ont été remplis
if(isset($_POST["email"]) && isset($_POST["password"])) {
    $customerModel = new CustomerModel();
    $customer = $customerModel->getCustomerByEmail($_POST);
    //Si la base de données a renvoyé un utilisateur avec ce mail
    if($customer){
    // On vérifie qu'ils correspondent aux information du tableau
        if(password_verify($_POST["password"], $customer->getCustomer_password())) {
            // On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer sur index
            session_start();
            $_SESSION["user"] = $customer;
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

<?php include "view/loginView.php" ?>