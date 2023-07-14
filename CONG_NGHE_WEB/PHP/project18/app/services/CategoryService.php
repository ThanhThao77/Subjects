<?php
require_once('../app/libs/DBConnection.php');
require_once('../app/models/Category.php');

class CategoryService{
    public static function getCategory(){
        // Buoc 1: Ket noi DB Server
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        // Buoc 2: Thuc hien truy van
        $sql = "SELECT * FROM category";
        $stmt = $conn->query($sql);

        // Buoc 3: Xu ly ket qua
        $categories = [];
        //Chuyen doi moi Ban ghi lay ra > Doi tuong: Article
        while($row=$stmt->fetch()){
            $category = new Category($row['id'],$row['name'],$row['description'],$row['navigation']);
            $categories[] = $category;
        }
        return $categories;
    }

    public static function addCategory($name, $description, $navigation){
        // Buoc 1: Ket noi DB Server
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        // Buoc 2: Thuc hien truy van
        $sql = "INSERT INTO category (name, description, navigation) VALUES (:name, :description, :navigation) ";
        $stmt = $conn->query($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':navigation', $navigation);
        $stmt->execute();
        $categories = $stmt->fetch();
        return $categories;
    }
}