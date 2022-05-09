<?php
require_once('./app/models/BaseModel.php'); 
require_once('./app/models/database.php'); 
class CustomController extends BaseModel
{
    public function index()
    {
        $conn = new CustomController;
        $data=$conn->Get_Data('user');
        require_once('app/views/admin/component/user/list_user.php');
    }
    public function edit_acount()
    {
        $id = $_GET['id'];
        $conn = new CustomController;
        $data=$conn->Get_Data('user WHERE user_id = '.$id.'');
        require_once('app/views/admin/component/user/EditCustom.php');
    }
}
