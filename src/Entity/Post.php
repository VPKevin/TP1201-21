<?php

namespace Entity;

use Model\UserManager;

class Post
{
    private $id;

    private $title;

    private $content;

    private $imagePath;

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

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    public function getAutorId()
    {
        return $this->autorId;
    }

    public function setAutorId($autorId)
    {
        $this->autorId = $autorId;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

}
