

<?php include '../components/header.php'; ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">
          <h4>Inscription</h4>
        </div>
        <div class="card-body">
          <form method="POST" action="/inscription">
            <div class="mb-3">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Adresse e-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="mot_de_passe" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <div class="mb-3">
              <label for="role" class="form-label">Rôle</label>
              <select class="form-select" id="role" name="role"  required>
                
                <option value="etudiant">Étudiant</option>
                <option value="enseignant">Enseignant</option>
                <option value="bibliothecaire">Bibliothécaire</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success w-100"><a href="../user/dashboard.php">S'inscrire</a></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../components/footer.php'; ?>
