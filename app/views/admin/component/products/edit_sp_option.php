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
                    Quản Lý Sản Phẩm
                </div>
            </div>
            <form class="mx-auto py-1" action="update_option_sp?id_sp=<?= $id_sp ?>&id_option=<?= $id_option ?>" method="post" enctype="multipart/form-data" name="products">
                <div class="col-lg-12">
                    <div class="form-check">
                        <div class="form_input_data">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">đơn giá</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput" name="don_gia" value="<?= $data_options_sp['don_gia'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">số lượng lưu kho</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput" name="sl_luu_kho" value="<?= $data_options_sp['sl_luu_kho'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">giảm giá</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput" name="giam_gia" value="<?= $data_options_sp['giam_gia'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">thời gian bắt đầu</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput" name="thoi_gian_bat_dau" value="<?= $data_options_sp['thoi_gian_bat_dau'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">thời gian kết thúc</label>
                                    <input type="date" class="form-control" id="formGroupExampleInput" name="thoi_gian_ket_thuc" value="<?= $data_options_sp['thoi_gian_ket_thuc'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
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
<script>
    var check_box = document.querySelectorAll('.form-check-input')
    check_box.forEach((option) => {
        option.addEventListener('click', () => {
            const div_opton = option.parentElement.querySelector('.form_input_data')
            div_opton.classList.toggle('d-flex')
        })
    })
</script>

<?php
require_once './app/views/admin/footer.php';
?>