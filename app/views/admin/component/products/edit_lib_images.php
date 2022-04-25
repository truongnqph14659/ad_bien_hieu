<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Cập Nhật Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="bg-white">
                        <div class="card-header">
                            <h3 class="card-title">Hãy chắc chắc rằng bạn nhập đúng <small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="mx-auto py-1" action="update_lib_image?id_sp=<?= $data_lib_img['ma_san_pham'] ?>&id_img=<?= $data_lib_img['id_img_sp'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="d-flex">
                                <div class=" col-lg-5">
                                    <div class="mb-3">
                                        <label for="images_sp" class="form-label">Kho ảnh</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="lib_image_sp" id="images_sp">
                                            <img src="<?= $data_lib_img['images'] ?>" width="100px">
                                            <input type="text" class="form-control" value="<?= $data_lib_img['images'] ?>" name="lib_image_sp_old" id="images_sp" hidden>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" name="them_vao">Thay đổi</button>
                            <button class="btn btn-primary" type="reset">Nhập lại</button>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div>
    </div>
</div>
<?php
require_once './vender/src_script_admin.php';
?>
<script>
    const check_db = document.querySelector('.check_db');
    const check_none_db = document.querySelector('.check_no_db');
    const image_input = document.getElementById('images_sp_db');
    check_db.addEventListener('click', () => {
        if (check_db.checked == true) {
            image_input.disabled = false
        }
    })
    check_none_db.addEventListener('click', () => {
        if (check_none_db.checked == true) {
            image_input.disabled = true
        }
    })
</script>
<?php
require_once './app/views/admin/footer.php';
?>