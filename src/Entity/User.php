<?php


class User
{
    private $id;

    private $firstName;

    private $lastName;

    private $email;

    private $password;

    private $role;

    /** @var []|null */
    private $commentaries;

    /** @var []|null */
    private $posts;

    public function __construct()
    {
        $this->role = false;
        $this->commentaries = [];
        $this->posts = [];
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return false
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param false $role
     */
    public function setRole($role)
    {
        $this->role = $role;
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

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param mixed $posts
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;
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

    public function addPost(Post $post)
    {
        if(!in_array($post, $this->posts))  {
            $this->posts[] = $post;
        }
    }

    public function removePost(Post $post)
    {
        if(in_array($post, $this->posts))  {
            $this->posts -= $post;
        }
    }
}