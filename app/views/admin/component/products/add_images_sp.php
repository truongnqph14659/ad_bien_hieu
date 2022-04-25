<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Sản Phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    Quản Lý ảnh
                </div>
            </div>
            <form class="mx-auto py-1" action="insert_multi_images?id_sp=<?= $_GET['ma_sp'] ?>" method="post" enctype="multipart/form-data">
                <div class="d-flex">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Mã sản phẩm</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $_GET['ma_sp'] ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Anh sản phẩm</label>
                            <input type="file" class="form-control" name="images_sp[]" id="formGroupExampleInput" multiple="multiple" placeholder="thêm ảnh chi tiết sản phẩm">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="them_vao">Hoàn Thành</button>
                <button class="btn btn-primary" type="reset">Nhập lại</button>
            </form>
        </div>
        <!--  -->
    </div>
</div>
<?php
require_once './vender/src_script_admin.php';
?>

<?php
require_once './app/views/admin/footer.php';
?>