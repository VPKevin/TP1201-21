<?php
namespace App\Model;

class PostManager extends BaseManager
{
  public function getPosts(){

    $query = $this->db->prepare('SELECT * FROM posts');
    $query->execute();
    return $query->fetchAll();

  }

  public function getPostById(int $id){

    $query = $this->db->prepare('SELECT * FROM posts WHERE id = '.$id);
    $query->execute();
    return $query->fetch();

  }
}
