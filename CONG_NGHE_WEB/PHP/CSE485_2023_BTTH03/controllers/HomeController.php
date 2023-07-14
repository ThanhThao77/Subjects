<?php
    include("services/ArticleService.php");
    class HomeController{
        public function index(){
            // Tương tác với Services/Models
            $articleService = new ArticleService();
            $articles = $articleService->getAllArticles();
            // Tương tác với View
            include("views/home/index.php");
        }
    }

?>