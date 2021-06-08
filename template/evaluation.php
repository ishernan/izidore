
  <?php
    include_once('common/headTemplate.php');
  ?>

<body>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb container">
      <li class="breadcrumb-item"><a href="../index.php" class="text-black-50">Accueil</a></li>
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

    

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <script src="../public/js/rating.js"></script>
</body>

</html>