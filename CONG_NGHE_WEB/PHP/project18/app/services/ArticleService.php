<?php
require_once('../app/libs/DBConnection.php');
require_once('../app/models/Article.php');
class ArticleService{
    // Cac phuong thuc thao tac voi DB Server
    public static function getAllArticles(){
        // Buoc 1: Ket noi DB Server
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        // $conn = DBConnection::getConnection();
        // Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM article";
        $stmt = $conn->query($sql);

        // Buoc 3: Xu ly ket qua
        $articles = [];
        //Chuyen doi moi Ban ghi lay ra > Doi tuong: Article
        while($row=$stmt->fetch()){
            $article = new Article($row['id'],$row['title'],$row['summary'],$row['content'],
                                    $row['created'],$row['category_id'],$row['member_id'],
                                    $row['image_id'],$row['published']);
            $articles[] = $article;
        }
        return $articles;
    }

    public static function updateArticle(){
        // Buoc 1: Ket noi DB Server
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        // Buoc 2: Thuc hien truy van
//        $id = $_GET['id'];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM article WHERE id = $id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $articles;
        }
        else{
            echo "Missing 'id' parameter";
        }
    }
}