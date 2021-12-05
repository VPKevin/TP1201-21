<div class="panel m-4">
    <div class="d-flex flex-row-reverse bd-highlight pb-2">
      <a class="btn btn-success p-2 bd-highlight" href="/post-add">Ajouter un Post</a>
    </div>
    <div class="list-post">
        <?php foreach($vars['posts'] as $post): ?>

            <div class="card mb-4">
              <div class="row g-0">
                <div class="col-md-4">
                  <img class="card-img-top" src="<?= $post['imagePath'] ?>" alt="Card image cap">
                </div>
                <div class="col-md-8">
                  <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title"><?= $post['title'] ?></h5>
                    <p class="card-text me-2"><small class="text-muted">Posté le <?= $post['createdAt'] ?> par <?= $post['autorId'] ?></small></p>
                  </div>
                  <div class="card-body">
                    <p class="card-content"><?= $post['content'] ?></p>
                    <div class="d-flex justify-content-end">
                      <a href="/post/<?= $post['id'] ?>" class="btn btn-secondary me-2">Voir plus</a>
                      <a href="/post-edit/<?= $post['id'] ?>" class="btn btn-primary me-2">Editer</a>
                      <a onclick="confirm('Vous êtes sûr ?');" href="/post-delete/<?= $post['id'] ?>" class="btn btn-danger">Supprimer</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
