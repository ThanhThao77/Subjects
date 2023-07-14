<?php
//include_once "../models/Article.php";
require_once "C:/xampp/htdocs/CSE485_BTTH03/app/services/ArticleService.php";
class ArticleController{
    public function __construct() {
    }
    public function index()
    {
        $article = new ArticleService();
        $data = $article->getAllArticle();
        $this->view('article/index.php', $data);
    }

    protected function view($view, $data = array()) {
        require_once 'app/views/' . $view;
    }

    public function create()
    {
        $article = new ArticleService();
        $data = $article->createArticle();
        $this->view('article/create.php', $data);
    }


}