//Routing: Ptich Request
<?php
// B1: Bắt giá trị controller và action
$controller = isset($_GET['controller']) ?   $_GET['controller'] : 'home';
$action     = isset($_GET['action']) ?       $_GET['action'] : 'index';
