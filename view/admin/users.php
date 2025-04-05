

<?php include '../components/header.php'; ?>
<div class="container mt-5">
  <h2 class="mb-4">Gestion des utilisateurs</h2>
  <a href="/admin/utilisateurs/ajouter" class="btn btn-primary mb-3">Ajouter un utilisateur</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Rôle</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($utilisateurs as $utilisateur) : ?>
        <tr>
          <td><?= htmlspecialchars($utilisateur['nom']) ?></td>
          <td><?= htmlspecialchars($utilisateur['email']) ?></td>
          <td><?= $utilisateur['role'] ?></td>
          <td>
            <a href="/admin/utilisateurs/modifier/<?= $utilisateur['id'] ?>" class="btn btn-sm btn-warning">Modifier</a>
            <a href="/admin/utilisateurs/supprimer/<?= $utilisateur['id'] ?>" class="btn btn-sm btn-danger">Supprimer</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php include '../components/footer.php'; ?>
