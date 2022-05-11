<?php
require_once './app/controller/HomeController.php';
require_once './app/controller/admin/DashboardController.php';
require_once './app/controller/admin/CustomController.php';
require_once './app/controller/admin/ProductsController.php';
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
        // admin
    case 'Dashboard':
        $ctr = new DashboardController();
        $ctr->index();
        break;
    case 'edit_acount':
        $ctr = new CustomController();
        $ctr->edit_acount();
        break;
    case 'list_user':
        $ctr = new CustomController();
        $ctr->index();
        break;
    case 'Created_account':
        $ctr = new CustomController();
        $ctr->Created_account();
        break;
    case 'list_products':
        $ctr = new ProductsController();
        $ctr->index();
        break;
    case 'edit_product':
        $ctr = new ProductsController();
        $ctr->edit_product();
        break;
    case 'Created_products':
        $ctr = new ProductsController();
        $ctr->Created_products();
        break;
    case 'insert_ct_sp':
        $ctr = new ProductsController();
        $ctr->insert_ct_sp();
        break;
    case 'remove_product':
        $ctr = new ProductsController();
        $ctr->remove_product();
        break;
    case 'edit_product':
        $ctr = new ProductsController();
        $ctr->edit_product();
        break;
        
        // doan nay thu test tren nhanh truongnqph14956
}
