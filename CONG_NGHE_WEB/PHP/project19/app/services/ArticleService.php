<?php
require_once ('app/models/Article.php');
require_once ('app/libs/DBConnection.php');
class ArticleService{
    public function getAllArticle(){
            $dbConn = new DBConnection();
            $conn = $dbConn->getConnection();
            $sql = "SELECT * FROM article";
            $stmt = $conn->prepare($sql);
            //b3
            $articles= [];
            while ($row = $stmt->fetch){
                $article = new Article($row['id'],$row['title']);
                $articles[]=$article;
            }
            return articles;
        }


}
