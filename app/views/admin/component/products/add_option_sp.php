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
            <form class="mx-auto py-1" action="insert_option_sp?ma_sp=<?= $_GET['ma_sp'] ?>" method="post" enctype="multipart/form-data" name="products">
                <div class="col-lg-12">
                    <label for="dac_biet" class="form-label">Option</label>
                    <?php foreach ($data_options as $values) : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="option_sp[]" value="<?= $values['ma_option'] ?>" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <?= $values['RAM'] . " / " . $values['ROM'] . " / " .  $values['VGA'] ?>
                            </label>
                            <div class="form_input_data d-none">
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">đơn giá</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput" name="don_gia[]" placeholder="nhập vào đơn giá">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">số lượng lưu kho</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput" name="sl_luu_kho[]" placeholder="số lượng lưu kho">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">giảm giá</label>
                                        <input type="number" class="form-control" id="formGroupExampleInput" name="giam_gia[]" placeholder="giảm giá">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">thời gian bắt đầu</label>
                                        <input type="date" class="form-control" id="formGroupExampleInput" name="thoi_gian_bat_dau[]" placeholder="nhập vào ngày bắt đầu">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">thời gian kết thúc</label>
                                        <input type="date" class="form-control" id="formGroupExampleInput" name="thoi_gian_ket_thuc[]" placeholder="nhập vào ngày kết thúc">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="btn btn-primary" type="submit" name="them_vao">Next</button>
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
            var div_opton = option.parentElement.querySelector('.form_input_data')
            div_opton.querySelectorAll('.form-control').forEach(selector_input => {
                selector_input.value = "";
            });
            div_opton.classList.toggle('d-flex')
        })
    })
    // chưa tìm hiểu chi tiết cái này bận quá lắp tạm làm đc vc là ko rồi
    window.addEventListener("pageshow", function(event) {
        var perfEntries = performance.getEntriesByType("navigation");
        if (perfEntries[0].type === "back_forward") {
            location.reload();
        }
    });
</script>

<?php
require_once './app/views/admin/footer.php';
?>