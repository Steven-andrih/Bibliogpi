

<?php include '../components/header.php'; ?>
<div class="container mt-5">
  <h2>Modifier un utilisateur</h2>
  <form method="POST" action="/admin/utilisateurs/miseajour">
    <input type="hidden" name="id" value="<?= $utilisateur['id'] ?>">
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" value="<?= $utilisateur['nom'] ?>" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?= $utilisateur['email'] ?>" required>
    </div>
    <div class="mb-3">
      <label for="role" class="form-label">Rôle</label>
      <select class="form-control" id="role" name="role">
        <option value="utilisateur" <?= $utilisateur['role'] == 'utilisateur' ? 'selected' : '' ?>>Utilisateur</option>
        <option value="bibliothecaire" <?= $utilisateur['role'] == 'bibliothecaire' ? 'selected' : '' ?>>Bibliothécaire</option>
        <option value="admin" <?= $utilisateur['role'] == 'admin' ? 'selected' : '' ?>>Administrateur</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
  </form>
</div>
<?php include '../components/footer.php'; ?>
