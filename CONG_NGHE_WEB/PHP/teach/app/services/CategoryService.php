<?php
require_once APP_ROOT . "/app/libs/DBConnect.php";
require_once APP_ROOT . "/app/models/Category.php";

class CategoryService
{
    public static function getAllCategory()
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * from category order by id desc";
//        statement
        $stmt = $conn->prepare($sql);
        $stmt->execute();
//        $datas=$stmt->fetchAll(); //Đưa về kiểu mảng KHÔNG PHẢI ĐỐI TƯỢNG
        //Nên đoạn code dưới để đưa về mảng đối tượng
        $categories = [];
        while ($row = $stmt->fetch()) {
            $category = new Category($row['id'], $row['name'], $row['description'], $row['navigation']);
//            array_push($categories, $category);
            $categories[] = $category;
        }
        return $categories;
    }

    public static function createCategory($name, $description, $navigation)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "INSERT INTO category (name, description, navigation) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $description, $navigation]);
    }

    public static function findCategoryById($id)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "select * from category where id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        $category = new Category($data['id'],$data['name'],$data['description'],$data['navigation']);
        return $category;
    }

    public static function editCategory($id,$name,$description,$navigation)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "UPDATE category SET name=?, description=?, navigation=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name,$description, $navigation,$id]);
    }

    public static function deleteCategory($id)
    {
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "delete from category where id = ?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$id]);
    }



}
