<?php
require_once APP_ROOT . "/app/services/CategoryService.php";

class CategoryController
{
    public function index()
    {
//        $categoryService = new CategoryService();
//        $datas=$categoryService->getAllCategory();
        $datas = CategoryService::getAllCategory();
        include APP_ROOT . "/app/views/category/index.php";
    }

    public function create()
    {
        include APP_ROOT . '/app/views/category/create.php';
    }

    public function store()
    {
        if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['navigation'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $navigation = $_POST['navigation'];
            CategoryService::createCategory($name, $description, $navigation);
            header('Location:' . APP_ROOT . "/public/index.php");
        }

    }

    public function edit()
    {
        $id = $_GET['id'];
        $category = CategoryService::findCategoryById($id);
        include APP_ROOT . "/app/views/category/edit.php";

    }

    public function update()
    {
        if (isset($_POST['id'])&&isset($_POST['name']) && isset($_POST['description']) && isset($_POST['navigation'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $navigation = $_POST['navigation'];
            CategoryService::editCategory($id, $name, $description, $navigation);
            echo "Sua thanh cong";
        }
        else {
            echo "thieu du lieu";
        }
    }

    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            CategoryService::deleteCategory($id);
            echo "Xoa thanh cong";
        }
    }
}