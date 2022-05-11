<?php
require_once('./app/models/BaseModel.php'); 
class ProductsController extends BaseModel
{
    public function index()
    {
        $conn = new CustomController;
        $data=$conn->Get_Data('san_pham');
        require_once('app/views/admin/component/products/list.php');
    }
    public function edit_product(Type $var = null)
    {
            $id = $_GET['id'];
            // echo $id;
            $conn = new CustomController;
            $data=$conn->Where('san_pham WHERE ma_san_pham = "'.$id.'"');
            // var_dump($data);
            // $code = '123456789qazwsxedcrfvtgbyhnujmikolp';
            // $code = str_shuffle($code);
            // $code = substr($code, 0, 10);
            // var_dump($code);
            require_once('app/views/admin/component/products/edit_detail_sp.php');
    }
    public function Created_products()
    {
        require_once('app/views/admin/component/products/add_ct_sp.php');
    }
    public function insert_ct_sp()
    {
        $conn = new CustomController;
        extract($_POST);
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $avatar = $file['name'];
            move_uploaded_file($file['tmp_name'],"public/dist/img/".$avatar);
        }
        $code = '123456789qazwsxedcrfvtgbyhnujmikolp';
        $code = str_shuffle($code);
        $code = substr($code, 0, 10);
        $conn->insert('san_pham',["ma_san_pham='$code',ten_sp='$name',images_sp='$avatar',mo_ta_ct='$content',ma_loai_sp=23"]);
        header('location:list_products');
    }
    public function remove_product()
    {
        $id = $_GET['id'];
        // var_dump($id);
        // die;
        $conn = new CustomController;
        $result = $conn->delete('san_pham','ma_san_pham="'.$id.'"');
        header('location:list_products');
    }
}
