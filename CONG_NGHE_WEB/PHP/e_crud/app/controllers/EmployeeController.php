<?php
require_once APP_ROOT . "/app/services/EmployeeService.php";

class EmployeeController{
    public function index()
    {
//        $categoryService = new CategoryService();
//        $datas=$categoryService->getAllCategtory();
        $datas = EmployeeService::getAllEmployees();
        include APP_ROOT . "/app/views/employee/index.php";
    }

    public function create()
    {
        include APP_ROOT . "/app/views/employee/create.php";
    }
    public function store()
    {
        if(isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['dateOfBirth']) && isset($_POST['address'])){
            $name = trim($_POST['name']);
            $gender = trim($_POST['gender']);
            $dateOfBirth = trim($_POST['dateOfBirth']);
            $address = trim($_POST['address']);
            EmployeeService::createEmployee($name, $gender, $dateOfBirth, $address);
            header('Location:' . APP_ROOT . "/public/index.php");
            echo "Them moi thanh cong";
        }
    }
}