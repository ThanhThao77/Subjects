<?php
require_once('../app/services/ArticleService.php');
class ArticleController{
    // Chua cac phuong thuc xu ly loi goi
    public function index(){
        $ar= ArticleService::getAllArticles();
        // Render ra view
        include("../app/views/article/index.php");
    }
    public function add(){
        include "../app/views/article/add.php";
    }
    public function update(){
        $ar = ArticleService::updateArticle();
        include "../app/views/article/update.php";
    }
    public function delete(){
        include "../app/views/article/delete.php";
    }
    public function show(){
        include "views/article/show.php";
    }
}