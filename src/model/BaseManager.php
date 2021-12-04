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
    $password = 'example';
    $this->db = new PDO($dsn, $user, $password);
  }

  public function getAll(){

    $query = $this->db->prepare('SELECT * FROM '. $this->name);
    $query->execute();
    return $query->fetchAll();

  }

  public function getById(int $id){

    $query = $this->db->prepare('SELECT * FROM ' . $this->name .' WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();

  }

  public function createById(array $columns){
    $cols = [];
    $values = [];
    foreach ($columns as $key => $value) {
      $cols[] = $key;
      $values[] = '"'.$value.'"';
    }
    $cols = implode(' , ', $cols);
    $values = implode(' , ', $values);
    $query = $this->db->prepare('INSERT INTO post ( '. $cols .' ) VALUES ( '. $values .' )');
    $query->execute();
    return $query->fetch();

  }

  public function updateColById(int $id, array $columns){

    $cols = [];
    foreach ($columns as $key => $value) {
      $cols[] = implode(' = ', [$key , '"'.$value.'"']);
    }
    $cols = implode(' , ', $cols);
    $query = $this->db->prepare('UPDATE ' . $this->name .' SET '. $cols.' WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();

  }

  public function deleteById(int $id){

    $query = $this->db->prepare('DELETE FROM ' . $this->name . ' WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    return $query->fetch();

  }
}
