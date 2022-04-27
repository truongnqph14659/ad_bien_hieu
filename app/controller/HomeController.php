<?php
require_once './app/models/BaseModel.php';
class HomeController extends BaseModel
{
    static function trang_chu()
    {
        $model =  new static;
        $data_sp = isset($_GET['key']) == false ? $model->Get_Data_Sp() : $model->Get_Data_Sp_Keyword($_GET['key']);
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
        $data_sp = isset($_GET['key']) == false ? $model->Get_Data_Sp() : $model->Get_Data_Sp_Keyword($_GET['key']);
        include './app/views/Home/product.php';
    }
}
