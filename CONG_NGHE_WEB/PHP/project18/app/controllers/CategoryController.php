<?php
require_once('../app/services/CategoryService.php');
class  CategoryController{
    public function index(){
        $ca = CategoryService::getCategory();
        // Render ra view
        include("../app/views/category/index.php");
    }

    public function add(){
        if(isset($_POST['btn_add'])){
            $name = $_POST['name'];
            $description = $_POST['description'];
            $navigation = $_POST['navigation'];
            $ca = CategoryService::addCategory($name, $description, $navigation);
        }
        include("../app/views/category/add.php");
    }
}