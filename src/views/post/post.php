<div class="card mb-4">
  <div class="row g-0">
    <div class="col-md-4">
      <img class="card-img-top" src="<?= $vars['post']['imagePath'] ?>" alt="<?= $vars['post']['image'] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-header">
        <h5 class="card-title"><?= $vars['post']['title'] ?></h5>
      </div>
      <div class="card-body">
        <p class="card-content"><?= $vars['post']['content'] ?></p>
        <div class="d-flex justify-content-end">
          <p class="card-text me-2"><small class="text-muted">Posté le <?= $vars['post']['createdAt'] ?> par <?= $vars['post']['autorId'] ?></small></p>
          <?php if ($_SESSION['user']['id'] == $vars['post']['autorId'] || $_SESSION['user']['role'] == true): ?>
            <a href="/post-edit/<?= $vars['post']['id'] ?>" class="btn btn-primary me-2">Editer</a>
            <a onclick="confirm('Vous êtes sûr ?');" href="/post-delete/<?= $vars['post']['id'] ?>" class="btn btn-danger">Supprimer</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="d-flex mb-3">
  <h5>Les Commentaires</h5>
  <?php if ($_SESSION['user']['id'] == $vars['post']['autorId'] || $_SESSION['user']['role'] == true): ?>
    <form class="ms-auto" action="/commentary-add" method="post">
      <input type="hidden" name="postId" value="<?= $vars['post']['id'] ?>">
      <button type="submit" class="btn btn-secondary">Commenter</button>
    </form>
  <?php endif; ?>
</div>
<?php foreach($vars['commentaries'] as $commentary): ?>
  <div class="card mb-2">
    <div class="card-body">
      <p class="card-text"><?= $commentary['content'] ?></p>
      <p class="card-text"><small class="text-muted">Commentaire posté le <?= $commentary['createdAt'] ?> par <?= $commentary['autorId'] ?></small></p>
      <?php if ($_SESSION['user']['id'] == $vars['post']['autorId'] || $_SESSION['user']['role'] == true): ?>
        <a href="/commentary-edit/<?= $commentary['id'] ?>" class="btn btn-sm btn-primary ms-auto p-2">Editer</a>
        <a class="btn btn-sm btn-danger p-2" href="/commentary-delete/<?= $commentary['id'] ?>">Supprimer</a>
      <?php endif; ?>
    </div>
  </div>
<?php endforeach; ?>
