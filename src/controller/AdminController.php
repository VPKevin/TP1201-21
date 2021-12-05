<?php
namespace App\Controller;

use App\Model\UserManager;

class AdminController extends BaseController
{

    public function index()
    {
        $userManager = new UserManager();

        if (!empty($_POST['mail']) && !empty($_POST['password'])){

            $user = $userManager->login($_POST['mail'] , $_POST['password']);

            if(!$user) {
                header('Location: /auth');
                // TODO: Flash message d'erreur
                exit();
            }
            else {
                $_SESSION["user"]=$user;
                header('Location: /');
                exit();
            }
        }

        header('Location: /auth');
        // TODO: Flash message d'erreur
        exit();
    }

    public function delete()
    {
        $userManager = new UserManager();

        $userManager->deleteById($this->params['id']);

        header('Location: /');
        exit();
    }
}
