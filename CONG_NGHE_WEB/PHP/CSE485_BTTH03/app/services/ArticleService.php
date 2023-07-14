<?php
//include_once "../models/ConnectDatabase.php";
//include_once "../models/Article.php";
require_once 'C:/xampp/htdocs/CSE485_BTTH03/app/models/Article.php';
require_once 'C:/xampp/htdocs/CSE485_BTTH03/app/models/ConnectDatabase.php';

class ArticleService{
    public function getAllArticle()
    {
        $article = new Article();
        $data = $article->getAll();
        return $data;
    }

    public function createArticle()
    {
        $article = new Article();
        $data = $article->create();
        return $data;
    }

}