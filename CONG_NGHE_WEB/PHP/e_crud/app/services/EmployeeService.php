<?php
require_once APP_ROOT . "/app/libs/DBConnect.php";
require_once APP_ROOT . "/app/models/Employee.php";

class EmployeeService{
    public static function getAllEmployees(){
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * FROM employees ORDER BY id DESC";
//        statement
        $stmt = $conn->prepare($sql);
        $stmt->execute();
//        $datas=$stmt->fetchAll();
        $employees = [];
        while ($row = $stmt->fetch()) {
            $employee = new Employee($row['id'], $row['name'], $row['gender'],
                                    $row['dateOfBirth'], $row['address']);
//            array_push($categories, $category);
            $employees[] = $employee;
        }
        return $employees;
    }
    public static function createEmployee($name, $gender, $dateOfBirth, $address){
        $pdo = new DBConnect();
        $conn = $pdo->getConnection();
        $sql = "INSERT INTO employees (name, gender, dateOfBirth, address) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$name, $gender, $dateOfBirth, $address]);
    }
}