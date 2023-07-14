<?php
require_once APP_ROOT . "/app/services/CategoryService.php";

class CategoryController
{
    public function index()
    {
//        $categoryService = new CategoryService();
//        $datas=$categoryService->getAllCategtory();
        $datas = CategoryService::getAllCategory();
        include APP_ROOT . "/app/views/category/index.php";
    }

    public function create()
    {
        include APP_ROOT . "/app/views/category/create.php";
    }

    public function edit()
    {

    }

    public function delete()
    {

    }
}