<?php
require_once APP_ROOT . "/app/libs/DBConnect.php";
require_once APP_ROOT . "/app/models/Category.php";

class CategoryService
{
    public static function getAllCategory()
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * from category";
//        statement
        $stmt = $conn->prepare($sql);
        $stmt->execute();
//        $datas=$stmt->fetchAll();
        $categories = [];
        while ($row = $stmt->fetch()) {
            $category = new Category($row['id'], $row['name'], $row['description'], $row['navigation']);
//            array_push($categories, $category);
            $categories[] = $category;
        }
        return $categories;
    }

}
