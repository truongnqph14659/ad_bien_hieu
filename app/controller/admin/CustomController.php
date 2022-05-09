<?php
require_once('./app/models/BaseModel.php'); 
class CustomController
{
    public function index()
    {
        $conn = new BaseModel;
        $result = $conn->Get_Data();
        var_dump($result);
        die;
        require_once('app/views/admin/component/Dashboard/Dashboard.php');
    }
}
