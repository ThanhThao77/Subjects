<?php
require_once "../app/config/config.php";
$route = isset($_GET['route']) ? $_GET['route'] : 'journal';
$action = isset($_GET['action']) ? $_GET['action']: 'index';
if ($route == 'journal') {
    require_once APP_ROOT . "/app/controllers/JournalController.php";
    $journalController = new JournalController();
    $journalController->index();
//    if($action == 'index') {
//        $journalController->index();
//    }
//    if($action == 'create'){
//        $journalController->create();
//    }
}

//$controller = ucfirst($route);
//$controller = $controller . "Controller";
//$controllerPath = '/app/controllers/' . $controller . '.php';
//require_once(APP_ROOT . $controllerPath);
//$objController = new $controller();
//$objController->$action();