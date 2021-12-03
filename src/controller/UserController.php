<?php
namespace App\Controller;

use App\Model\UserManager;

class UserController extends BaseController
{
    public function index(int $number = 5)
    {
        $userManager = new UserManager();

        /** TODO : get function in PostManager */
        $users = $userManager->getUsers($number);

        /** TODO : Render in BaseController */
        return $this->render(
            'accueil',
            $users,
            'user/index'
        );
    }

    public function login()
    {
        $userManager = new UserManager();

        if (!empty($_POST['mail']) && !empty($_POST['password'])){

            if(!$userManager->findOnByEmail($_POST['mail'])) {
                /** TODO : ERROR */
            }
            else {
                header('Location: /');
                exit();
            }
        }

        return $this->render(
            'create',
            null,
            'post/login'
        );
    }

    public function create()
    {
        $userManager = new UserManager();

        $user = new User();

        if (!empty($_POST['first-name']) && !empty($_POST['content'])
            && !empty($_POST['mail']) && !empty($_POST['password'])
            && !empty($_POST['is-admin'])){

            $user->setFirstName($_POST['title']);
            $user->setLastName($_POST['content']);
            $user->setEmail($_POST['mail']);

            $hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->setPassword($hashedPassword);
            $user->setRole($_POST['is-admin']);

            $userManager->create($user);
            header('Location: /');
            exit();
        }

        return $this->render(
            'create',
            null,
            'post/create'
        );
    }

    public function update($userId)
    {
        $userManager = new UserManager();
        $user = $userManager->find($userId);

        if (!empty($_POST['first-name']) || !empty($_POST['content'])
            || !empty($_POST['mail']) || !empty($_POST['is-admin'])){

            $user->setFirstName($_POST['title']);
            $user->setLastName($_POST['content']);
            $user->setEmail($_POST['mail']);

            $user->setRole($_POST['is-admin']);

            $userManager->save($user);
            header('Location: /');
            exit();
        }

        return $this->render(
            'accueil',
            $user,
            'post/update'
        );
    }

    public function delete($user)
    {
        $userManager = new UserManager();

        /** TODO : get function in PostManager */
        $userManager->remove($user);

        header('Location: /');
        exit();
    }
}
