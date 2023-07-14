<?php
require_once "../app/config/config.php";
$route = isset($_GET['route']) ? $_GET['route'] : 'category';
$action = isset($_GET['action']) ? $_GET['action']: 'index';

$controller = ucfirst($route);
$controller = $controller . "Controller";
$controllerPath = '/app/controllers/' . $controller . '.php';
require_once(APP_ROOT . $controllerPath);
$objController = new $controller();
$objController->$action();

//if ($route == 'category') {
//    require_once APP_ROOT . "/app/controllers/CategoryController.php";
//    $categoryController = new CategoryController();
//    if($action == 'index') {
//        $categoryController->index();
//    }
//    if($action == 'create'){
//        $categoryController->create();
//    }
//}
