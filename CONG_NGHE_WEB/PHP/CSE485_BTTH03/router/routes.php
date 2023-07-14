<?php
include_once 'Router.php';
$router = new Router();
$router->get('/CSE485_BTTH03/', 'ArticleController@index');
$router->get('/CSE485_BTTH03/', 'ArticleController@create');

