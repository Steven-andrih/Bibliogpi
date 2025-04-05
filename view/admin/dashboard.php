

<?php include '../components/header.php'; ?>
<div class="container mt-5">
  <h2 class="mb-4">Tableau de bord de l'administrateur</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card text-white bg-primary mb-3">
        <div class="card-body">
          <h5 class="card-title">Utilisateurs</h5>
          <a href="/admin/utilisateurs" class="btn btn-light">Gérer</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-success mb-3">
        <div class="card-body">
          <h5 class="card-title">Bibliothécaires</h5>
          <a href="/admin/bibliothecaires" class="btn btn-light">Voir</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card text-white bg-dark mb-3">
        <div class="card-body">
          <h5 class="card-title">Rapports</h5>
          <a href="/admin/rapports" class="btn btn-light">Consulter</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include '../components/footer.php'; ?>











