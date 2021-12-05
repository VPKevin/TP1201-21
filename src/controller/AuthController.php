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

        // $user = new User();

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

        // $user = new User();

        $COLUMNS = $_POST;
        var_dump($_POST);die;

        if (!empty($COLUMNS['first-name']) && !empty($COLUMNS['content'])
            && !empty($COLUMNS['mail']) && !empty($COLUMNS['password'])){

            // $user->setFirstName($COLUMNS['title']);
            // $user->setLastName($COLUMNS['content']);
            // $user->setEmail($COLUMNS['mail']);

            // $hashedPassword = password_hash($COLUMNS['password'], PASSWORD_BCRYPT);
            // $user->setPassword($hashedPassword);
            // $user->setRole($COLUMNS['is-admin']);
            var_dump($COLUMNS);die;
            $userManager->create($COLUMNS);
            header('Location: /');
            exit();
        }

        return $this->render(
            'create',
            [],
            'post/create'
        );
    }

    public function logout()
    {

        session_destroy();

        header('Location: /');
        exit();
    }
}
