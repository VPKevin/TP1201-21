<?php

class Commentary
{

    private $id;

    private $title;

    private $content;

    /** @var User */
    private $autor;

    /** @var Post */
    private $post;

    private $createdAt;

    public function __construct()
    {
        $this->createdAt = date('d/m/y h:m');
    }
}