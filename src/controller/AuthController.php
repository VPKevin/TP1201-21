<?php
namespace App\Controller;

use App\Model\UserManager;

class AuthController extends BaseController
{
    public function auth()
    {
        return $this->render(
            'Se connecter',
            [],
            '/auth/auth'
        );
    }
    public function login()
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
    public function signin()
    {
        $userManager = new UserManager();

        $COLUMNS = $_POST;

        if (!empty($COLUMNS['firstname']) && !empty($COLUMNS['lastname'])
            && !empty($COLUMNS['mail']) && !empty($COLUMNS['password'])){

            $userManager->create($COLUMNS);
            header('Location: /');
            exit();
        }

        header('Location: /auth');
        // TODO: Flash message d'erreur
        exit();

        );
    }

    public function logout()
    {

        session_destroy();
        header('Location: /');
        exit();

    }
}
