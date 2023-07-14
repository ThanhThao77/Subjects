<?php
include_once ('../config/DBConnection.php');
include_once ('../models/Article.php');
    class ArticleService{
        // Chứa các hàm tương tác và xử lý dữ liệu

        public function getAllArticles(){
            // Bước 01: Kết nối DB Server
            $dbconn = new DBConnection();
            $conn = $dbconn->getConnection();

            // Bước 02: Truy vấn DL
            $sql = "SELECT * FROM article";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Bước 03: Trả về dữ liệu
            $articles = $stmt->fetchAll();
//            $articles = [];
            // Sửa ở đây; Trả về 1 danh sách (Mảng) các ĐỐI TƯỢNG Article;
//            while ($row = $stmt->fetch()){
//                $article = new Article($row['id'], $row['title'], $row['summary'],
//                    $row['content'], $row['created'], $row['category_id'],
//                    $row['member_id'], $row['image_id'], $row['published']);
//                array_push($articles,$article);
//            }
            return $articles;
        }
    }

?>