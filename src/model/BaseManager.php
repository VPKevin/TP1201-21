<?php
namespace App\Model;

use PDO;

abstract class BaseManager
{
  protected $db;

  public function __construct()
  {
    $dsn = 'mysql:dbname=TP0116;host=db;port=3306';
    $user = 'root';
    $password = 'root';
    $this->db = new PDO($dsn, $user, $password);
  }
}
