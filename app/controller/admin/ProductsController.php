<?php
require_once('./app/models/BaseModel.php');
require_once('Recusive.php');
class ProductsController extends BaseModel
{
    public function index()
    {
        $conn = new CustomController;
        $data = $conn->Get_Data('san_pham');
        require_once('app/views/admin/component/products/list.php');
    }
    public function edit_product($var = null)
    {
        $id = $_GET['id'];
        $conn = new CustomController;
        $data = $conn->where('san_pham WHERE ma_san_pham = "' . $id . '"');
        $htmlOption = $this->getCategoryChild($category = $data['ma_loai_sp']);
        require_once('app/views/admin/component/products/edit_detail_sp.php');
    }
    public function getCategory($prend_id)
    {
        if (isset($_GET['ma_loai_sp'])) {
            $id = $_GET['ma_loai_sp'];
        } else {
            $id = null;
        }
        $conn = new CustomController;
        $result = $conn->Get_Data('loai_san_pham');
        $Recusive = new Recusive($result, $id_dm = $id);
        $htmlOption = $Recusive->categories($prend_id);
        return $htmlOption;
    }
    public function getCategoryChild($category = '')
    {
        $recusion = '';
        $conn = new CustomController;
        $result = $conn->Get_Data('loai_san_pham');
        foreach ($result as $value) {
            if ($value['parent_id'] != 0) {
                $select = $value['ma_loai_sp'] == $category ? 'selected' : '';
                $recusion .= "<option $select value='" . $value['ma_loai_sp'] . "'>" . $value['ten_loai'] . "</option >";
            }
        }
        return $recusion;
    }

    public function Created_products()
    {
        $htmlOption = $this->getCategoryChild();
        require_once('app/views/admin/component/products/add_ct_sp.php');
    }
    public function insert_ct_sp()
    {
        $conn = new CustomController;
        extract($_POST);
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $avatar = $file['name'];
            move_uploaded_file($file['tmp_name'], "public/images_stores/images/" . $avatar);
        }
        $num_nhan_xet = '12345679';
        $num_hoi_dap = '1234';
        $nhan_xet = str_shuffle($num_nhan_xet);
        $nhan_xet = substr($nhan_xet, 0, 1);
        $hoi_dap = str_shuffle($num_hoi_dap);
        $hoi_dap = substr($hoi_dap, 0, 1);
        $flag = true;
        while ($flag) {
            $code = '123456789';
            $code = str_shuffle($code);
            $code = substr($code, 0, 4);
            $data = $conn->Where('san_pham WHERE ma_san_pham = "' . $code . '"');
            if (!$data) {
                $conn->insert('san_pham', ["ma_san_pham=$code,ten_sp='$name',images_sp='$avatar',mo_ta_ct='$content',nhan_xet=$nhan_xet,hoi_dap=$hoi_dap,ma_loai_sp=$categories_id"]);
                $flag = false;
            }
        }

        header('location:list_products');
    }
    public function remove_product()
    {
        $id = $_GET['id'];
        // var_dump($id);
        // die;
        $conn = new CustomController;
        $result = $conn->delete('san_pham', 'ma_san_pham="' . $id . '"');
        header('location:list_products');
    }
    public function update_ct_sp()
    {
        extract($_POST);
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $avatar = $file['name'];
            move_uploaded_file($file['tmp_name'], "public/dist/img/" . $avatar);
        } else {
            $avatar = $cu;
        }
        $conn = new CustomController;
        $result = $conn->update('san_pham', ["ten_sp='$name',images_sp='$avatar',mo_ta_ct='$content',ma_loai_sp=$categories_id"], 'ma_san_pham = "' . $id . '"');
        header('location:list_products');
    }
}
