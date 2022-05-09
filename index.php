<?php
require_once './app/controller/HomeController.php';
require_once './app/controller/admin/DashboardController.php';
require_once './app/controller/admin/CustomController.php';
require_once './vender/url_server.php';
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) {
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
    case 'product_detail':
        HomeController::product_detail();
        break;
    case 'contact':
        HomeController::contact();
        break;
    case 'form_logn_in':
        HomeController::sign_in();
        break;
        // doan nay thu test tren nhanh truongnqph14956
}
