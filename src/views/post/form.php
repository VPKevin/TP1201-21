<body>
    <div class="panel panel-default">
        <div class="panel-body">
          <form class="" action="<?php echo isset($vars['post']) ? '/post-update/' . $vars['post']['id'] : '/post-create' ?>" method="post">
            <div class="form-group mb-2">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Titre" value="<?php echo isset($vars['post']) ? $vars['post']['title'] : '' ; ?>">
            </div>
            <div class="form-group mb-2">
                <label for="content">Contenu</label>
                <textarea name="content" class="form-control" id="content" placeholder="Contenu"><?php echo isset($vars['post']) ? $vars['post']['content'] : '' ; ?></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="title">Url de l'image</label>
                <input type="text" name="imagePath" class="form-control" id="imagePath" placeholder="URL" value="<?php echo isset($vars['post']) ? $vars['post']['imagePath'] : '' ; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</body>
