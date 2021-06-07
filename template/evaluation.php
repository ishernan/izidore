<?php
session_start();

# On suppose que l'acheteur est déjà connecté dans notre site
# et on possede son identifiant dans une variable de session
$_SESSION['userId'] = "1";
$_SESSION['vendeurId'] = "3";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../public/css/styles.css">

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/786abd23a7.js"></script>


  <title>rating</title>
</head>

<body>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb container">
      <li class="breadcrumb-item"><a href="./index.html" class="text-black-50">Accueil</a></li>
      <li class="breadcrumb-item active" aria-current="page">Notez le client</li>
    </ol>
  </nav>

  <div class="row d-flex justify-content-center">
    <div class="col-md-6 container text-center mt-5 border box-Sha py-4">
      <div class="police2">
        <h3>Notez le vendeur</h3>
        <h4>Antoine</h4>
      </div>
      <div>
        <span class="police1" role="button" tabindex="0" id="evaluations" style="font-size: 2em; ">
          <i class="bi bi-star-fill" data-index="0" aria-hidden="true"></i>
          <i class="bi bi-star-fill" data-index="1"></i>
          <i class="bi bi-star-fill" data-index="2"></i>
          <i class="bi bi-star-fill" data-index="3"></i>
          <i class="bi bi-star-fill" data-index="4"></i>
        </span>
        <p class="lead note">0</p>
      </div>

      <form action="../controller/eval.php" method="POST" id="formulaire">
        <input class="d-none note" id="note" type="text" value="0" name="note">
        <div class="col-md-10 container text-center mt-5 border">
          <div>
            <label for="user" class="form-label"></label>
            <input name="user" type="text" id="user" class="form-control" placeholder="User">
          </div>
          <div class="mb-3">
            <label for="motDePasse" class="form-label"></label>
            <input name="passe" id="password" type="password" class="form-control" placeholder="Mot de passe">
          </div>
          <div class="mb-3">
            <label for="titre" class="form-label"></label>
            <input name="titre" id="titre" type="text" class="form-control" placeholder="Titre">
          </div>
          <div class="mb-3" style="font-family: cursive;">
            <label class="form-label"></label>
            <textarea name="commentaire" id="comment" class="form-control" placeholder="Commentaire" rows="8"></textarea>
          </div>
          <button id="btnEnvoyer" type="submit" class="btn button-vert mb-3">Envoyer</input>
            <button id="btnLoad" class="btn btn-secondary d-none" type="button" disabled>
              <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
              <span class="visually-hidden"></span> Cargando...
            </button>

      </form>
    </div>

    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body">
          Evaluation envoyée
        </div>
        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <script src="../public/js/rating.js"></script>
</body>

</html>