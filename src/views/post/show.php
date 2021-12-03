<body>
    <div class="panel">
        <div class="panel-body">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <!-- exemple d'envoi de data dans la vue -->
                        <h5 class="card-title"><?= $vars[0].getTitle(); ?></h5>
                        <p class="card-user"></p>
                        <img class="card-img-top" src="" alt="Card image cap">
                        <p class="card-content"></p>
                        <a href="post/'.<?=$vars[0].getId()?>.'" class="btn btn-primary">Update</a>
                    </div>
                </div>

                <?php if($vars[0].getIsAdmin() == "true"): ?>
                    <div class="form-group">
                        <label for="last-name">Nom</label>
                        <input type="password" class="form-control" id="last-name" placeholder="Nom">
                    </div>
                <?php endif ?>

                <?php foreach($vars[1] as $commentary): ?>
                    <?php foreach($vars[2] as $users): ?>
                        <p><?= $vars[0].getContent() ?></p>
                        <?php if($users.getId() === $commentary.getUser()): ?>
                            <p><?= $users.getFirstName() ?></p>
                        <?php endif ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
        </div>
    </div>
</body>