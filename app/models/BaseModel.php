<?php
class BaseModel
{
    var $table = "";
    // auto connect database
    private $conn;
    function __construct()
    {
        $this->conn = new PDO("mysql:root=127.0.0.1;dbname=quangcao;charset=utf8", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    // function insert data to table
    // function get data from table
    static function Get_Data($table = '')
    {
        $model = new static;
        $sql = "SELECT * FROM " . $table;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // function get data from table join to another table with condiotion
    static function Get_Data_Private_Sp($id)
    {
        $model = new static;
        $sql = "SELECT 	* FROM san_pham WHERE ma_san_pham=:id";
        $stmt = $model->conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function get data with condition
    static function Get_Condition_User($rule, $operator, $id)
    {
        $model = new static;
        $sql = "SELECT * FROM user  WHERE $id $operator :rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->bindValue(':rule', $rule, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // function get data with condition
    static function Get_Condition($rule, $operator, $id)
    {
        $model = new static;
        $sql = "SELECT ma_loai_sp FROM $model->table  WHERE $id $operator :rule";
        $stmt = $model->conn->prepare($sql);
        $stmt->bindValue(':rule', $rule, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function Get_Condition_Sp($array)
    {
        $model = new static;
        $new_arr = [];
        foreach ($array as $order => $values) {
            $ma_loai = $values['ma_loai_sp'];
            $sql = "SELECT * FROM san_pham WHERE ma_loai_sp=:ma_loai";
            $stmt = $model->conn->prepare($sql);
            $stmt->bindValue(':ma_loai', $ma_loai, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($data != null) {
                foreach ($data as $values) {
                    array_push($new_arr, $values);
                }
            }
        }
        return $new_arr;
    }
    // function delete

    // function get data from table join to another table
    static function Get_Data_Sp()
    {
        $model = new static;
        $sql = "SELECT * FROM san_pham";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function Get_Data_Sp_Keyword($key)
    {
        $model = new static;
        $sql = "SELECT * FROM san_pham WHERE ten_sp LIKE '%$key%'";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // function load 2sp thu???c m???i lo???i
    static function data_aside()
    {
        $model = new static;
        $sql = "SELECT * FROM loai_san_pham";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $loai = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data_loai = [];
        foreach ($loai as $values) {
            if ($values['parent_id'] == 0) {
                $data_loai[] = $values['ten_loai'];
            }
        }
        $results = [];
        foreach ($data_loai as $order => $values) {
            $sql = "SELECT * FROM san_pham WHERE ten_sp like '%$values%' limit 2";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
            $sp = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($sp as $values) {
                $results[] = $values;
            }
        }
        return $results;
    }

    // l???y t???t c??? s???n ph???m t??nh to??n ph??n trang
    static function records_page()
    {
        $model = new static;
        $sql = "SELECT count(ma_san_pham) as total FROM san_pham";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    static function records_page_key($key_search)
    {
        $model = new static;
        if (is_numeric($key_search)) {
            $sql = "SELECT count(ma_san_pham) as total FROM san_pham WHERE ma_san_pham=$key_search";
        } else {
            $sql = "SELECT count(ma_san_pham) as total FROM san_pham WHERE ten_sp LIKE '%$key_search%'";
        }
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // $result = mysqli_query($conn, "SELECT * FROM news LIMIT $start, $limit");
    static function result_page($start, $limit)
    {
        $model = new static;
        $sql = "SELECT * FROM san_pham LIMIT :start, :limit";
        $stmt = $model->conn->prepare($sql);
        $stmt->bindValue(':start', $start, PDO::PARAM_INT);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    static function result_page_key($start, $limit, $key_search)
    {
        $model = new static;
        if (is_numeric($key_search)) {
            $sql = "SELECT * FROM san_pham WHERE ma_san_pham=$key_search LIMIT $start,$limit";
        } else {
            $sql = "SELECT * FROM san_pham WHERE ten_sp LIKE '%$key_search%' LIMIT $start,$limit";
        }
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
        $sql = "SELECT * FROM loai_san_pham WHERE parent_id=:parent_category_id";
        $stmt = $model->conn->prepare($sql);
        $stmt->bindValue(':parent_category_id', $parent_category_id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $output = array();
        // t??m parent_id thu???c v??? id category
        foreach ($result as $row) {
            $sub_array = array();
            $sub_array['text'] = '<a class="treeitem_click_a" href="product?key=' . $row['ten_loai'] . '">' . $row['ten_loai'] . '</a>';
            $sub_array['nodes'] = array_values($model->get_node_data($row['ma_loai_sp']));
            if (count($sub_array['nodes']) == 0) {
                unset($sub_array['nodes']);
            }
            $output[] = $sub_array;
        }
        return $output;
    }
    // insert acc
    static function Insert_User($form_data, $db_data)
    {
        $model = new static();
        $sql = "INSERT into user ($db_data) VALUES ($form_data)";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        header("location:index.php");
    }
    static function Where($table = '')
    {
        $model = new static;
        $sql = "SELECT * FROM " . $table;
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    static function insert($table, $a = [])
    {
        $model = new static;
        $b = implode($a);
        $sql = "INSERT INTO $table SET $b";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
    }
    static function delete($table = '', $data)
    {
        $model = new static;
        try {
            $sql = "DELETE FROM $table WHERE $data";
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
        } catch (\Throwable $th) {
            echo "L???i: " . $th->getMessage();
        }
    }
    static function update($table, $a = [], $data)
    {
        $b = implode($a);
        try {
            $model = new static;
            $sql = "UPDATE $table SET $b WHERE $data";
            // var_dump($sql);
            // die;
            $stmt = $model->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (\Throwable $th) {
            echo "L???i: " . $th->getMessage();
        }
    }
}
