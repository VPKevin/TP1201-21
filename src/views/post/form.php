<body>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" placeholder="Titre" value="<?php isset($post) ? $post['title'] : '' ; ?>">
            </div>
            <div class="form-group">
                <label for="content">Email address</label>
                <input type="email" class="form-control" id="content" placeholder="Contenu" value="<?php isset($post) ? $post['title'] : '' ; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
