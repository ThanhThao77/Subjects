<?php
// Routing: dieu huong
// Kiem tra URL cua nguoi dung > Tim ra Controller
// URL: tlu.edu.vn/ = tlu.edu.vn/index.php?route=home > HomeController
// URL: tlu.edu.vn/index.php?route=articles > ArticleController
// URL: tlu.edu.vn/article/1/edit

$route = isset($_GET['route'])?$_GET['route']:'home';
$do    = isset($_GET['do'])   ?$_GET['do']:null;
if($route == 'home'){
//    require_once('../app/controllers/HomeController.php');
    require ('../app/controllers/HomeController.php');
    $homeController = new HomeController();
    $homeController->index();
}else if($route=='article'){
    require ('../app/controllers/ArticleController.php');
    $articleController = new ArticleController();
//    $articleController->index();
    if($do == 'add'){
        $articleController->add();
    } else if($do=='index'){
        $articleController->index();
    } else if($do=='update'){
        $articleController->update();
    }

} else if($route=='category'){
    require('../app/controllers/CategoryController.php');
    $categoryController = new CategoryController();
    if($do== 'index'){
        $categoryController->index();
    } else if($do=='update'){
        $categoryController->update();
    } else if($do == 'add'){
        $categoryController->add();

    }
}
else{
    echo "Other";
}
//if($route == 'home'){
//    require('../app/controllers/HomeController.php');
//    $homeController = new HomeController();
//    $homeController->index();
//}
//if($route == 'article'){
//    require('../app/controllers/ArticleController.php');
//    $articleController = new ArticleController();
//    if($do == 'index'){
//        $articleController->index();
//    } else if($do=='add'){
//        $articleController->add();
//    }
//}