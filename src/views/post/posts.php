<div class="panel">
    <div>
      <a class="btn btn-secondary" href="/post/add">Ajouter un Post</a>

    </div>
    <div class="list-post">
        <?php foreach($vars['posts'] as $post): ?>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $post['title'] ?></h5>
                    <p class="card-user"></p>
                    <img class="card-img-top" src="" alt="Card image cap">
                    <p class="card-content"><?= $post['content'] ?></p>
                    <a href="/post/<?= $post['id'] ?>" class="btn btn-secondary">Show</a>
                    <a href="/post/edit/<?= $post['id'] ?>" class="btn btn-primary">Update</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
