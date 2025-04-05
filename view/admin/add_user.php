

<?php include '../components/header.php'; ?>
<div class="container mt-5">
  <h2>Ajouter un utilisateur</h2>
  <form method="POST" action="/admin/utilisateurs/enregistrer">
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="mot_de_passe" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="mot_de_passe" name="mot_de_passe" required>
    </div>
    <div class="mb-3">
      <label for="role" class="form-label">Rôle</label>
      <select class="form-control" id="role" name="role">
        <option value="utilisateur">Utilisateur</option>
        <option value="bibliothecaire">Bibliothécaire</option>
        <option value="admin">Administrateur</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Ajouter</button>
  </form>
</div>
<?php include '../components/footer.php'; ?>
