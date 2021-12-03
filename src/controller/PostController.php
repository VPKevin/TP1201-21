<?php
namespace App\Controller;

use App\Model\PostManager;
use App\Model\CommentaryManager;

class PostController extends BaseController
{
    public function index()
    {
        $postManager = new PostManager();

        $posts = $postManager->getPosts();

        return $this->render(
            'accueil',
            $posts,
            'post/index'
        );
    }

    public function show($id) {
        $postManager = new PostManager();
        $commentaryManager = new CommentaryManager();

        $post = $postManager->find($id);
        $commentaries = $commentaryManager->findAll($post->getId());

        $userManager = new UserManager();
        $user = $userManager->findAll();

        $arrayOfContent = [
            'post' => $post,
            'commentaries' => $commentaries,
            'users' => $user
        ];

        return $this->render(
            'show',
            $arrayOfContent,
            'post/show'
        );
    }

    public function create()
    {
        $postManager = new PostManager();

        $post = new Post();

        if (!empty($_POST['title']) && !empty($_POST['content'])){

            $post->setTitle($_POST['title']);
            $post->setContent($_POST['title']);

            /** TODO : GET connected user */
            //$post->setAutorId();

            $postManager->create($post);
            header('Location: /');
            exit();
        }

        return $this->render(
            'create',
            null,
            'post/create'
        );
    }

    public function update($postId)
    {
        $commentary = new Commentary();
        $postManager = new PostManager();
        $post = $postManager->find($postId);
        $commentaryManager = new CommentaryManager();

        if (!empty($_POST['title']) || !empty($_POST['content'])){

            $post->setTitle($_POST['title']);
            $post->setContent($_POST['content']);

            if(!empty($_POST['commentary-content'])) {

                $commentary->setContent($_POST['commentary-content']);
                /** TODO : GET connected user */
                //$commentary->setAutorId();
                $commentary->setPostId($post->getId());
            }

            $postManager->save($post);
            header('Location: /');
            exit();
        }

        return $this->render(
            'update',
            $post,
            'post/update'
        );
    }

    public function delete($postId)
    {
        $postManager = new PostManager();

        /** TODO : get function in PostManager */
        $postManager->remove($postId);

        header('Location: /');
        exit();
    }
}
