<?php
namespace App\Controller;

use App\Model\PostManager;
use App\Model\CommentaryManager;
use App\Model\UserManager;

class PostController extends BaseController
{
    public function index()
    {
        $postManager = new PostManager();

        $posts = $postManager->getAll();

        return $this->render(
            'accueil',
            ['posts' => $posts],
            '/post/posts'
        );
    }

    public function show() {
        $postManager = new PostManager();
        $commentaryManager = new CommentaryManager();
        $userManager = new UserManager();

        $post = $postManager->getById($this->params['id']);
        // $commentaries = $commentaryManager->findAll($post->getId());
        // $user = $userManager->findAll();
        $arrayOfContent = [
            'post' => $post//,
            // 'commentaries' => $commentaries,
            // 'users' => $user
        ];

        return $this->render(
            'Un post',
            $arrayOfContent,
            '/post/post'
        );
    }

    public function form()
    {
        $title = "Ajout d'un post";
        $arrayOfContent = [];

        if ($_GET['p'] == 'post-edit') {
          $postManager = new PostManager();

          $post = $postManager->getById($this->params['id']);
          $arrayOfContent = [ 'post' => $post ];
          $title = "Modification d'un post";
        }
        return $this->render(
          $title,
          $arrayOfContent,
          '/post/form'
        );
    }

    public function create()
    {
        $postManager = new PostManager();

        $COLUMNS = $_POST;
        $COLUMNS['autorId'] = '1';
        if (!empty($COLUMNS['title']) && !empty($COLUMNS['content'])){

          $post = $postManager->createById($COLUMNS);
          header('Location: /');
          exit();
        }

        return $this->render(
            'Ajout d\'un post',
            [],
            '/post/form'
        );
    }

    public function update()
    {
        $postManager = new PostManager();

        $post = $postManager->getById($this->params['id']);

        if (!empty($_POST['title']) && !empty($_POST['content'])){

            $post = $postManager->updateColById($this->params['id'], $_POST);
            header('Location: /');
            exit();
        }

        return $this->render(
            'Modification d\'un post',
            [ 'post' => $post ],
            '/post/form'
        );
    }

    public function delete()
    {
        $postManager = new PostManager();

        $postManager->deleteById($this->params['id']);

        header('Location: /');
        exit();
    }
}
