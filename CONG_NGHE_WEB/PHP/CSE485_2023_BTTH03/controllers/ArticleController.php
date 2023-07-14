<?php
include_once ('../config/DBConnection.php');
class ArticleController{
    public function index(){
        echo 'Bạn đang gọi tôi ArticleController';
    }

    public function create(){
        include("views/article/create.php");
    }
    public function edit(){
        include("views/article/edit.php");
    }
    public function show(){
        include("views/article/show.php");
    }

}
