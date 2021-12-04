<div class="panel m-4">
  <div class="list-post">
    <div class="card mb-4">
      <img class="card-img-top" src="<?= $vars['post']['imagePath'] ?>" alt="<?= $vars['post']['image'] ?>">
      <div class="card-header">
        <h5 class="card-title"><?= $vars['post']['title'] ?></h5>
      </div>
      <div class="card-body">
        <p class="card-content"><?= $vars['post']['content'] ?></p>
        <div class="d-flex justify-content-end">
          <a href="/post-edit/<?= $vars['post']['id'] ?>" class="btn btn-primary">Editer</a>
          <a onclick="confirm('Vous êtes sûr ?');" href="/post-delete/<?= $vars['post']['id'] ?>" class="btn btn-danger">Supprimer</a>
        </div>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex bd-highlight mb-3">
          <p class="p-2">un commentaire</p>
          <a class="btn btn-danger ms-auto p-2" href="/commentary-delete/<?= $vars['commentary']['id'] ?>">Supprimer</a>
        </li>
        <li class="list-group-item">un deuxieme commentaire</li>
      </ul>
    </div>
  </div>
</div>
