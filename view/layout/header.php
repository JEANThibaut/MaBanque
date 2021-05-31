<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="./public/css/index.css" rel="stylesheet">
    <title>Ma Banque</title>
  </head>
  <body>
    <header class="bg-success text-dark my-0 py-2 text-center">
        <section class="container">
            <h1>Ma Banque</h1>
            <p class="lead fst-italic">La banque à qui donner</p>
        </section>



        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="index.php" href="#">Acceuil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Mes comptes</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">Voir mes comptes</a></li>
                <li><a class="dropdown-item" href="virement.php">Faire un virement</a></li>
                <li><a class="dropdown-item" href="createAccount.php">Créer un compte</a></li>
                <li><a class="dropdown-item" href="budget.php">Mon budget</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
        

    </header>
       <main>
