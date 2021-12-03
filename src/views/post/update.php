<body>
    <div class="panel panel-default">
        <div class="panel-body">
            <form name="form" action="" method="post">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titre" value="<?= $vars[0].title; ?>">
                </div>
                <div class="form-group">
                    <label for="content">Email address</label>
                    <input type="email" class="form-control" id="content" name="content" placeholder="Contenu" value="<?= $vars[0].content; ?>">
                </div>
                <?php foreach($vars[1] as $commentary): ?>
                    <div class="form-group">
                        <label for="content">Email address</label>
                        <input type="text" class="form-control" id="commentary-content" name="commentary-content" placeholder="Contenu" value="<?= $vars.content; ?>">
                    </div>
                <?php endforeach; ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>