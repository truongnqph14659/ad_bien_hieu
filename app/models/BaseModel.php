<?php
class BaseModel
{
    var $table = "";
    // auto connect database
    function __construct()
    {
        $this->conn = new PDO("mysql:root=127.0.0.1;dbname=du_an_1;charset=utf8", "root", "");
    }
    // function insert data to table
    static function Insert_Data($form_data, $db_data, $header)
    {
        $model = new static();
        $sql = "INSERT into $model->table ($db_data) VALUES ($form_data)";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        header("location:$header");
    }
    // function get data from table
    static function Get_Data()
    {
        $model = new static;
        $sql = "SELECT * FROM " . $model->table;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // function get data from table join to another table with condiotion
    static function Get_Data_Private_Sp($id)
    {
        $model = new static;
        $sql = "SELECT 	san_pham.so_luot_xem,san_pham.mo_ta_ct,san_pham.ma_san_pham,san_pham.ten_sp,san_pham.don_gia,san_pham.giam_gia,san_pham.images_sp,san_pham.sl_luu_kho,san_pham.ma_loai_sp,san_pham.thoi_gian_bat_dau,san_pham.thoi_gian_ket_thuc,san_pham.ma_option,chi_tiet_sp.ma_ct_sp,chi_tiet_sp.chung_loai,chi_tiet_sp.part_number,chi_tiet_sp.mau_sac,chi_tiet_sp.CPU,chi_tiet_sp.RAM,chi_tiet_sp.VGA,chi_tiet_sp.ROM,chi_tiet_sp.man_hinh FROM san_pham JOIN chi_tiet_sp ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham WHERE san_pham.ma_san_pham=$id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function get data from table join to another table with condiotion
    static function Get_Data_Edit($id, $rule)
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $rule=$id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // update data
    static function Update_Data($re_values, $id, $rule, $header = "#")
    {
        $model = new static;
        $sql = "UPDATE $model->table SET $re_values WHERE $id=$rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        header("Location:$header");
    }
    // function get data with condition
    static function Get_One_Condition($rule, $operator, $id)
    {
        $model = new static;
        $sql = "SELECT * FROM $model->table WHERE $id $operator '$rule'";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function delete
    static function Delete($data_delete, $id, $header)
    {
        $model = new static;
        $sql = "DELETE FROM $model->table WHERE $id=$data_delete";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $msg = 'Deleted Successfully!';
        header("Location:$header&?msg=$msg");
    }
    // function get data from table join to another table
    static function Get_Data_Sp()
    {
        $model = new static;
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_sp ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function Get_Data_Sp_Keyword($key)
    {
        $model = new static;
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_sp ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham WHERE ten_sp LIKE '%$key%'";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // function load 6 sp nổi bật
    static function top_products()
    {
        $model = new static;
        $sql = "SELECT * FROM san_pham JOIN chi_tiet_sp ON san_pham.ma_san_pham = chi_tiet_sp.ma_san_pham WHERE sl_luu_kho > 0 ORDER BY so_luot_xem DESC LIMIT 8";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function get_data_loai()
    {
        $model = new static;
        $sql = "SELECT * FROM loai_san_pham";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function get_node_data($parent_category_id)
    {
        $model = new static;
        $sql = "SELECT * FROM loai_san_pham WHERE parent_id=$parent_category_id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $output = array();
        // tìm parent_id thuộc về id category
        foreach ($result as $row) {
            $sub_array = array();
            $sub_array['text'] = '<a class="treeitem_click_a" href="product_page?key=' . $row['ten_loai'] . '">' . $row['ten_loai'] . '</a>';
            $sub_array['nodes'] = array_values($model->get_node_data($row['ma_loai_sp']));
            if (count($sub_array['nodes']) == 0) {
                unset($sub_array['nodes']);
            }
            $output[] = $sub_array;
        }
        return $output;
    }
}
