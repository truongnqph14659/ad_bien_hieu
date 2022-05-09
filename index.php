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
    case 'list_user':
        $ctr = new CustomController();
        $ctr->index();
        break;
    // case 'fetch_loai_treeview':
    //     HomeController::treeview();
    //     break;
    // case 'product':
    //     HomeController::products();
    //     break;
        // doan nay thu test tren nhanh truongnqph14956
}
