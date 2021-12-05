<?php
namespace App\Model;

use PDO;

class UserManager extends BaseManager
{

    protected $name = 'user';

    public function Login(string $mail, string $password){

      $query = $this->db->prepare('SELECT * FROM user WHERE mail = :mail AND password = :password');
      $query->bindValue(':mail', $mail, PDO::PARAM_STR);
      $query->bindValue(':password', $password, PDO::PARAM_STR);
      $query->execute();
      return $query->fetch();

    }
}
