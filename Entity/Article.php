<?php

namespace Entity;

class Article {


    private ?int $id;
    private string $name;
    private string $article;
    private int $user_fk;

    public function __construct(int $id  ,string $name,string  $article ,int  $user_fk) {
        $this->id = $id;
        $this->name = $name;
        $this->article = $article;
        $this->user_fk = $user_fk;
    }


    /**
     * @return mixed
     */
    public function getUserFk()
    {
        return $this->user_fk;
    }

    /**
     * @param mixed $user_fk
     */
    public function setUserFk($user_fk): void {
        $this->user_fk = $user_fk;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * @param mixed $message
     */
    public function setArticle($article): void {
        $this->article = $article;
    }



}