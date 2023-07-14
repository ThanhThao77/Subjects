<?php
    //Routing: định tuyến
    //Phân tích URL của người dùng đang Request > Tìm xem: Ai sẽ xử lý tiếp (Controller nào)

    //Tình huống 01: localhost/btth02/index.php
    //Tình huống 02: localhost/btth02/index.php?controller=A&action=B
    //localhost/btth02/index.php?controller=home&action=index
    //localhost/btth02/index.php?controller=article&action=add
    // Bước 01: Kiểm tra giá trị của controller và action
//    $controller = isset($_GET['controller'])?$_GET['controller']:'home';
//    $action     = isset($_GET['action'])?$_GET['action']:'index';
//    // Bước 02: Tìm tệp mà mình sẽ chuyển lại Quyền cho nó (Controller)
//    $controller = ucfirst($controller);
//    $controller .= 'Controller';
//    $controllerPath = 'controllers/'.$controller.'.php';
//    //Nếu không tồn tại TỆP
//    if(!file_exists($controllerPath)){
//        die('Tệp tin không tồn tại');
//    }
//    //Nếu có tồn tại tệp Controller
//    require($controllerPath);
//    // Bước 03: Khởi tạo đối tượng tương ứng của Controller và gọi hàm xử lý Action
//    $myObj = new $controller();
//    $myObj->$action();

 //Bước 01: Kiểm tra giá trị của controller và action
    $controller = isset($_GET['controller'])?$_GET['controller']:'article';
    $action     = isset($_GET['action'])?$_GET['action']:'index';
    $do         = isset($_GET['do'])?$_GET['do']:null;

    if($action == 'article'){
        require('controllers/ArticleController.php');
        $controller = new ArticleController();

        if ($do == "index"){
            $controller->index();
        } else if ($do == "create"){
            $controller->create();
        } else if ($do == "edit"){
            $controller->edit();
        } else if ($do == "show"){
            $controller->show();
        } else if ($do == "delete"){
            $controller->delete();
        }
    }

?>