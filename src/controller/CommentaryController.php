<?php
namespace App\Controller;

use App\Model\CommentaryManager;
use App\Model\PostManager;
use App\Model\UserManager;

class CommentaryController extends BaseController
{

    public function form()
    {
        $title = "Ajout d'un commentaire";
        $arrayOfContent = [];

        if ($_GET['p'] == 'commentary-edit') {
          $commentaryManager = new CommentaryManager();

          $commentary = $commentaryManager->getById($this->params['id']);
          $arrayOfContent = [ 'commentary' => $commentary ];
          $title = "Modification d'un commentaire";
        }
        return $this->render(
          $title,
          $arrayOfContent,
          '/commentary/form'
        );
    }

    public function create()
    {
        $commentaryManager = new CommentaryManager();

        $COLUMNS = $_POST;
        $COLUMNS['autorId'] = '1';
        if (!empty($COLUMNS['content'])){

          $commentary = $commentaryManager->createById($COLUMNS);
          header('Location: /post/'.$_POST['postId']);
          exit();
        }

        return $this->render(
            'Ajout d\'un post',
            [],
            '/commentary/form'
        );
    }

    public function update()
    {
        $commentaryManager = new CommentaryManager();

        $commentary = $commentaryManager->getById($this->params['id']);

        if (!empty($_POST['title']) && !empty($_POST['content'])){

            $commentary = $commentaryManager->updateColById($this->params['id'], $_POST);
            header('Location: /');
            exit();
        }

        return $this->render(
            'Modification d\'un commentary',
            [ 'commentary' => $commentary ],
            '/commentary/form'
        );
    }

    public function delete()
    {
        $commentaryManager = new CommentaryManager();

        $idPost = $commentaryManager->getById($this->params['id'])['postId'];

        $commentaryManager->deleteById($this->params['id']);

        header('Location: /post/'. $idPost);
        exit();
    }
}
