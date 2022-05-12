<?php
require_once('./app/models/BaseModel.php'); 
require_once('Recusive.php'); 
class CategoryController extends BaseModel
{
    public function index()
    {
        $conn = new CustomController;
        $data=$conn->Get_Data('loai_san_pham');
        require_once('app/views/admin/component/Category/list.php');
    }
    public function Created_Category()
    {
        $htmlOption = $this->getCategory($category = '');
        require_once('app/views/admin/component/Category/add-form.php');
    }
    public function getCategory($prend_id){
        if (isset($_GET['ma_loai_sp'])) {
            $id = $_GET['ma_loai_sp'];
        }else{
            $id = null;
        }
        $conn = new CustomController;
        $result = $conn->Get_Data('loai_san_pham');
        $Recusive = new Recusive($result,$id_dm = $id);
        $htmlOption = $Recusive->categories($prend_id);
        return $htmlOption;
    }
    public function edit_category()
    {
        $id = $_GET['ma_loai_sp'];
        $conn = new CustomController;
        $result = $conn->Where('loai_san_pham WHERE ma_loai_sp = "'.$id.'"');
        $htmlOption = $this->getCategory($category = $result['parent_id']);
        require_once('app/views/admin/component/Category/edit-form.php');
    }
    public function save_category()
    {
        extract($_POST);
        $conn = new CustomController;
        $conn->insert('loai_san_pham',["ten_loai='$name',parent_id = '$select',slug='$name'"]);
        header('location:list_Category');
    }
    public function remove_category()
    {
        $id = $_GET['ma_loai_sp'];
        $conn = new CustomController;
        $result = $conn->delete('loai_san_pham','ma_loai_sp="'.$id.'"');
        header('location:list_Category');
    }
    public function update_category()
    {
        extract($_POST);
        $conn = new CustomController;
        $result = $conn->update('loai_san_pham',["ten_loai='$name',parent_id = '$categories_id',slug='$name'"],'ma_loai_sp = "'.$id.'"');
        header('location:list_Category');
    }
}
