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
        $data_sp = $model->Get_Data_Sp();
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
            $data_sp = $model->result_page_key($start, $limit, $_GET['key']);
        }
        // $data_sp = isset($_GET['key']) == false ? $model->Get_Data_Sp() : $model->Get_Data_Sp_Keyword($_GET['key']);
        include './app/views/Home/product.php';
    }
    static function product_detail()
    {
        $model =  new static;
        $data_aside = $model->data_aside();
        $data_sp = $model->Get_Data_Sp();
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
}
