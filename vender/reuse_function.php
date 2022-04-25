<?php
function insert_img($image)
{
    $image_currently = "";
    if ($image['size'] > 0) {
        $image_currently = uniqid() . $image['name'];
        move_uploaded_file($image['tmp_name'], '/ad_bien_hieu/public/images_stores/images/' . $image_currently);
        $image_currently = $image_currently;
    }
    return $image_currently;
}
function check_data_option($arr)
{
    $new_arr = array();
    foreach ($arr as $value) {
        if ($value !== '') {
            $new_arr[] = $value;
        }
    }
    return $new_arr;
}
