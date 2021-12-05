<?php
namespace App\Controller;

use App\Model\UserManager;

class AdminController extends BaseController
{

    public function index()
    {
        $userManager = new UserManager();

        $users = $userManager->getAll();

        return $this->render(
          'Panneau d\'administration',
          ['users' => $users],
          '/admin/index'
        );
    }

    public function deleteUser()
    {
        $userManager = new UserManager();

        $userManager->deleteById($this->params['id']);

        header('Location: /admin');
        exit();
    }
}
