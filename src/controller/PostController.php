<?php


class PostController
{
    public function index()
    {
        $postManager = new PostManager;

        /** TODO : get function in PostManager */
        $posts = $postManager->getPosts();

        /** TODO : Render in BaseController */
        return $this->render(
            'accueil',
            $posts,
            'post/index'
        );
    }

    public function create()
    {
        $postManager = new PostManager;

        /** TODO : get function in PostManager */
        $posts = $postManager->getPosts();

        if (!empty($_POST)) {
            $postManager->create();
            header('Location: /');
            exit();
        }


        /** TODO :
         *      - Render in BaseController
         *      - Redirect root
         */
        return $this->render(
            'accueil',
            $posts,
            'post/create'
        );
    }

    public function update()
    {
        $postManager = new PostManager;

        /** TODO : get function in PostManager */
        $posts = $postManager->getPosts();

        if (!empty($_POST)) {
            $postManager->save();
            header('Location: /');
            exit();
        }

        /** TODO :
         *      - Render in BaseController
         *      - Redirect root
         */
        return $this->render(
            'accueil',
            $posts,
            'post/update'
        );
    }

    public function delete()
    {
        $postManager = new PostManager;

        /** TODO : get function in PostManager */
        $posts = $postManager->remove();

        /** TODO : Render in BaseController */
        return $this->render(
            'accueil',
            $posts,
            'post/index'
        );
    }
}