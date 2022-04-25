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
      <form class="mx-auto py-1" action="insert_san_pham" method="post" enctype="multipart/form-data" name="products">
        <div class="d-flex">
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Mã sản phẩm</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="auto number" disabled>
            </div>
            <div class="mb-3">
              <label for="ten_sp" class="form-label">Tên Sản Phẩm</label>
              <input type="text" class="form-control" id="ten_sp" name="ten_sp" placeholder="nhập vào tên sản phẩm">
            </div>
            <div class="mb-3">
              <label for="don_gia" class="form-label">Đơn Gía</label>
              <input type="number" class="form-control" id="don_gia" name="don_gia" placeholder="nhập vào đơn giá">
            </div>
            <div class="mb-3">
              <label for="sl_luu_kho" class="form-label">SL lưu kho</label>
              <input type="number" class="form-control" id="sl_luu_kho" name="sl_luu_kho" placeholder="nhập vào sl lưu kho">
            </div>
            <div class="mb-3">
              <label for="ngay_nhap" class="form-label">Thời gian bắt đầu</label>
              <input type="date" class="form-control" id="ngay_nhap" name="ngay_bat_dau" placeholder="nhập vào ngày bắt đầu giảm giá">
            </div>
            <div class="mb-3">
              <label for="ngay_ket" class="form-label">Thời gian kết thúc</label>
              <input type="date" class="form-control" id="ngay_ket" name="ngay_ket" placeholder="nhập vào ngày kết thúc">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Giảm Gía</label>
              <input type="number" class="form-control" id="formGroupExampleInput2" name="giam_gia" placeholder="nhập vào giảm giá">
            </div>
            <div class="mb-3">
              <label for="images_sp" class="form-label">Ảnh Sản Phẩm</label>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="images_sp" id="images_sp">
              </div>
            </div>
            <div class="mb-3">
              <label for="dac_biet" class="form-label">Đặc biêt</label>
              <div class="input-group mb-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input check_db" type="radio" name="dac_biet" id="inlineRadio1" value="1">
                  <label class="form-check-label" for="inlineRadio1">đặc biệt</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input check_no_db" type="radio" name="dac_biet" id="inlineRadio2" value="0">
                  <label class="form-check-label" for="inlineRadio2">không đặc biệt</label>
                </div>
                <label for="dac_biet" class="form-label"></label>
              </div>
            </div>
            <div class="mb-3">
              <label for="images_sp" class="form-label">Ảnh banner san phẩm đặc biệt</label>
              <div class="input-group mb-3">
                <input type="file" class="form-control" name="images_sp_db" id="images_sp_db" disabled>
              </div>
            </div>
            <div class="mb-3">
              <label for="ma_loai_sp" class="form-label">Loại Sản Phẩm</label>
              <select class="form-select" aria-label="Default select example" name="ma_loai_sp">
                <option disabled selected value>Chọn Loại Hàng</option>
                <?php foreach ($loai_cap_2 as $values) : ?>
                  <option value="<?= $values['ma_loai_sp'] ?>"><?= $values['ten_loai'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="mb-3">
            <label for="mo_ta_chi_tiet" class="form-label">Mô Tả Chi Tiết</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mo_ta_chi_tiet"></textarea>
          </div>
        </div>
        <button class="btn btn-primary" type="submit" name="them_vao">Next</button>
        <a class="btn btn-primary" href="danh_sach_san_pham" role="button">Danh sách</a>
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