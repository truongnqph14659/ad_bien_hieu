<?php
require_once './app/controller/HomeController.php';
require_once './vender/url_server.php';
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        HomeController::trang_chu();
        break;
    case 'fetch_loai_treeview':
        HomeController::treeview();
        break;
        // doan nay thu test tren nhanh truongnqph14956
}
