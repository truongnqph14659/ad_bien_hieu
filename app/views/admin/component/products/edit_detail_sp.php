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
                    Quản Lý Chi Tiết Sản Phẩm
                </div>
            </div>
            <form class="mx-auto py-1" action="update_ct_sp?id=<?= $data_detail_sp['ma_ct_sp'] ?>" method="post" enctype="multipart/form-data" name="products">
                <div class="d-flex">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="chung_loai" class="form-label">Chủng Loại</label>
                            <input type="text" class="form-control" id="chung_loai" name="chung_loai" value="<?= $data_detail_sp['chung_loai'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="part_number" class="form-label">Part number</label>
                            <input type="text" class="form-control" id="part_number" name="part_number" value="<?= $data_detail_sp['part_number'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="mau_sac" class="form-label">Màu sắc</label>
                            <input type="text" class="form-control" id="mau_sac" name="mau_sac" value="<?= $data_detail_sp['mau_sac'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Màn hình</label>
                            <input type="number" class="form-control" id="formGroupExampleInput2" name="man_hinh" value="<?= $data_detail_sp['man_hinh'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">CPU</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="CPU" value="<?= $data_detail_sp['CPU'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">RAM</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="RAM" value="<?= $data_detail_sp['RAM'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">ROM</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="ROM" value="<?= $data_detail_sp['ROM'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">VGA</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" name="VGA" value="<?= $data_detail_sp['VGA'] ?>">
                        </div>
                    </div>
                    <input type="number" class="form-control" id="formGroupExampleInput2" name="ma_san_pham" value="<?= $data_detail_sp['ma_san_pham'] ?>" hidden>
                </div>
                <button class="btn btn-primary" type="submit" name="them_vao">Thay Đổi</button>
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