<?php
require_once('./app/models/BaseModel.php'); 
require_once('Recusive.php'); 
class ConfigurationController extends BaseModel
{
    public function index()
    {
        $conn = new CustomController;
        $data=$conn->Get_Data('banner_img');
        require_once('app/views/admin/component/Configuration/ListBanner.php');
    }
    public function edit_banner()
    {
        $id = $_GET['id'];
        $conn = new CustomController;
        $data=$conn->Where('banner_img WHERE id_banner = '.$id.'');
        require_once('app/views/admin/component/Configuration/Editbanner.php');
    }
    public function Created_Banner()
    {
        require_once('app/views/admin/component/Configuration/Created_Banner.php');
    }
    public function update_banner()
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
        $result = $conn->update('banner_img', ["img_banner='$avatar'"], 'id_banner= "' . $id . '"');
        header('location:list_Banner');
    }
    public function insert_banner()
    {
        extract($_POST);
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $avatar = $file['name'];
            move_uploaded_file($file['tmp_name'], "public/images_stores/images/" . $avatar);
        }
        $conn = new CustomController;
        $result = $conn->insert('banner_img', ["img_banner='$avatar'"]);
        header('location:list_Banner');
    }
}
