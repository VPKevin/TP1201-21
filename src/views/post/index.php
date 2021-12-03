<body>
    <div class="panel">
        <div class="panel-body">
            <?php foreach($vars as $post): ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <!-- exemple d'envoi de data dans la vue -->
                        <h5 class="card-title"><?= $post.getTitle(); ?></h5>
                        <p class="card-user"></p>
                        <img class="card-img-top" src="" alt="Card image cap">
                        <p class="card-content"></p>
                        <a href="post/'.<?=$post.getId()?>.'" class="btn btn-primary">Update</a>
                    </div>
                </div>

                <?php if($post.isAdmin == "true"): ?>
                    <div class="form-group">
                        <label for="last-name">Nom</label>
                        <input type="password" class="form-control" id="last-name" placeholder="Nom">
                    </div>
                <?php endif ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>