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
    case 'product':
        HomeController::products();
        break;
    case 'product_detail':
        HomeController::product_detail();
        break;
    case 'contact':
        HomeController::contact();
        break;
    case 'form_logn_in':
        HomeController::sign_in();
        break;
    case 'sign_in':
        HomeController::login();
        break;
    case 'logn_out':
        unset($_SESSION['user_account']);
        header('location: index.php');
        break;
        // doan nay thu test tren nhanh truongnqph14956
}
