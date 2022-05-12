<?php
require_once './app/models/BaseModel.php';
class HomeController extends BaseModel
{
    var $table = 'loai_san_pham';
    static function trang_chu()
    {
        $model =  new static;
        $data_aside = $model->data_aside();
        $loai = $model->get_data_loai();
        $array = [];
        $sub_array = [];
        foreach ($loai as $values) {
            if ($values['parent_id'] == 0) {
                $array[$values['slug']] = $model->Get_Condition($values['ma_loai_sp'], '=', 'parent_id');
            }
        }
        foreach ($array as $order => $values) {
            $sub_array[$order] = $model->Get_Condition_Sp($values);
        }

        // phần này sẽ thay đổi lại khi hoàn thiện database
        $banners = $model->Get_Data('banner_img');
        include './app/views/Home/index.php';
    }
    static function treeview()
    {
        $parent_category_id = 0;
        $data = HomeController::get_data_loai();
        foreach ($data as $row) {
            $data_resault = HomeController::get_node_data($parent_category_id);
        }
        echo json_encode(array_values($data_resault));
    }
    static function products()
    {
        $model =  new static;
        $data_aside = $model->data_aside();
        $total_pages = isset($_GET['key']) == true ? $model->records_page_key($_GET['key']) : $model->records_page();
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 20;
        $total_page = ceil($total_pages['total'] / $limit);
        if ($current_page > $total_page) {
            $current_page = $total_page;
        } else if ($current_page < 1) {
            $current_page = 1;
        }
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        if (!isset($_GET['key'])) {
            $data_sp = $model->result_page($start, $limit);
        } else {
            $key = htmlentities($_GET['key'], ENT_QUOTES);
            $data_sp = $model->result_page_key($start, $limit, $key);
        }
        include './app/views/Home/product.php';
    }
    static function product_detail()
    {
        $model =  new static;
        $data_aside = $model->data_aside();
        $data_sp = $model->Get_Data_Sp();
        $id_sp = htmlentities($_GET['id_sp'], ENT_QUOTES);
        $data_private = $model->Get_Data_Private_Sp($id_sp);
        include './app/views/Home/detail_product.php';
    }
    static function contact()
    {
        $model =  new static;
        $data_aside = $model->data_aside();
        include './app/views/Home/contact.php';
    }
    // sign_in
    static function sign_in()
    {
        include './app/views/Home/sign_in.php';
    }
    // form_register
    static function form_register()
    {
        require_once './app/views/Home/register.php';
    }
    // login acc admin
    static function login()
    {
        if (isset($_POST['signin'])) {
            $user_name = htmlentities($_POST['user_name'], ENT_QUOTES);
            $user_password = htmlentities($_POST['user_password'], ENT_QUOTES);
            $model =  new static;
            $user = $model->Get_Condition_User("$user_name", '=', 'email');
            if ($user) {
                // $hash_pass = password_hash($user_password, PASSWORD_DEFAULT);
                // echo $hash_pass;
                // die;
                if (password_verify($user_password, $user['password'])) {
                    $_SESSION['user_account'] = [
                        'user_id' => $user['user_id'],
                        'user_name' => $user['user_name'],
                        'user_image' => $user['image'],
                        'user_email' => $user['email'],
                        'user_password' => $user['password'],
                        'user_role' => $user['role']
                    ];
                    $user['role'] == 1 ? header("location:Dashboard") : header("location:index.php");
                    die;
                }
                header("location:form_logn_in?msg=Sorry");
            } else {
                header("location:form_logn_in?msg=Hold_on");
            }
        } else {
            header("location:form_logn_in?msg=Hold_on");
        }
    }
}
