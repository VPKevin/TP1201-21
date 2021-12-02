<?php

//namespace src

//use Autor;

class Post
{
    private $id;
    private $title;
    private $content;

    /* @var User */
    private $autor;

    private $imageName;

    private $imagePath;

    private $createdAt;

    /** @var []|null */
    private $commentaries;

    public function __construct()
    {
        $this->createdAt = date('d/m/y h:m');
        $this->commentaries = [];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * @param mixed $imageName
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;
    }

    /**
     * @return mixed
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * @param mixed $imagePath
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    /**
     * @return false|string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param false|string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getCommentaries()
    {
        return $this->commentaries;
    }

    /**
     * @param mixed $commentaries
     */
    public function setCommentaries($commentaries)
    {
        $this->commentaries = $commentaries;
    }

    public function addCommentary(Commentary $commentary)
    {
        if(!in_array($commentary, $this->commentaries))  {
            $this->commentaries[] = $commentary;
        }
    }

    public function removeCommentary(Commentary $commentary)
    {
        if(in_array($commentary, $this->commentaries))  {
            $this->commentaries -= $commentary;
        }
    }
}