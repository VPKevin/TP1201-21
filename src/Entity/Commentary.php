<?php
namespace Entity;

use model\UserManager;
use model\PostManager;

class Commentary
{

    private $id;

    private $content;

    private $autorId;

    private $postId;

    private $createdAt;

    public function __construct()
    {
        $this->createdAt = date('d/m/y h:m');
    }

    public function getId()
    {
        return $this->id;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setAutorId($autorId)
    {
        $this->autorId = $autorId;
    }

    public function setPostId($postId)
    {
        $this->postId = $postId;
    }
