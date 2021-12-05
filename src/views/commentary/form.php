<body>
    <div class="panel panel-default">
        <div class="panel-body">
          <?php if (!isset($vars['commentary'])): ?><p>Vous êtes sur le point de commenter le post n° <?= $_POST['postId'] ?></p><?php endif; ?>
          <form class="" action="<?php echo isset($vars['commentary']) ? '/commentary-update/' . $vars['commentary']['id'] : '/commentary-create' ?>" method="post">
            <div class="form-group mb-2">
                <label for="content">Commentaire</label>
                <textarea name="content" class="form-control" id="content" placeholder="Contenu"><?php echo isset($vars['commentary']) ? $vars['commentary']['content'] : '' ; ?></textarea>
            </div>
            <input type="hidden" name="postId" value="<?= $_POST['postId'] ?>">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
        </div>
    </div>
</body>
