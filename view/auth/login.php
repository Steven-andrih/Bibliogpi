
<?php include '../components/header.php'; ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center">
          <h4>Connexion</h4>
        </div>
        <div class="card-body">
          <form method="POST" action="/connexion">
            <div class="mb-3">
              <label for="email" class="form-label">Adresse e-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="mot_de_passe" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" ><a href="../user/dashboard.php">Se connecter</a></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../components/footer.php'; ?>


