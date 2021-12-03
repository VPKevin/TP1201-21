<?php

namespace Entity;

use Model\UserManager;

class Post
{
    private $id;

    private $title;

    private $content;

    private $autorId;

    private $createdAt;

    public function __construct()
    {
        $this->createdAt = date('d/m/y h:m');
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

}
