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
            <form class="mx-auto py-1" action="update_product" method="POST" enctype="multipart/form-data">
              <div class="d-flex">
                <div class="col-lg-5">
                  <input type="text" class="form-control" id="formGroupExampleInput" name="ma_sp" value="<?= $data_sp['ma_san_pham'] ?>" hidden>
                  <div class="mb-3">
                    <label for="ten_sp" class="form-label">Tên Sản Phẩm</label>
                    <input type="text" class="form-control" id="ten_sp" name="ten_sp" value="<?= $data_sp['ten_sp'] ?>">
                  </div>
                  <div class="mb-3">
                    <label for="don_gia" class="form-label">Đơn Gía</label>
                    <input type="number" class="form-control" id="don_gia" name="don_gia" value="<?= $data_sp['don_gia'] ?>">
                  </div>
                  <div class="mb-3">
                    <label for="sl_luu_kho" class="form-label">SL lưu kho</label>
                    <input type="number" class="form-control" id="sl_luu_kho" name="sl_luu_kho" value="<?= $data_sp['sl_luu_kho'] ?>">
                  </div>
                  <div class="mb-3">
                    <label for="ngay_nhap" class="form-label">Thời gian bắt đầu</label>
                    <input type="date" class="form-control" id="ngay_nhap" name="ngay_bat_dau" value="<?= $data_sp['thoi_gian_bat_dau'] ?>">
                  </div>
                  <div class="mb-3">
                    <label for="ngay_ket" class="form-label">Thời gian kết thúc</label>
                    <input type="date" class="form-control" id="ngay_ket" name="ngay_ket" value="<?= $data_sp['thoi_gian_ket_thuc'] ?>">
                  </div>
                </div>
                <div class=" col-lg-5">
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Giảm Gía</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" name="giam_gia" value="<?= $data_sp['giam_gia'] ?>">
                  </div>
                  <div class="mb-3">
                    <label for="images_sp" class="form-label">Ảnh Sản Phẩm</label>
                    <div class="input-group mb-3">
                      <input type="file" class="form-control" name="images_sp" id="images_sp">
                      <img src="<?= $data_sp['images_sp'] ?>" width="100px">
                      <input type="text" class="form-control" value="<?= $data_sp['images_sp'] ?>" name="images_sp_old" id="images_sp" hidden>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="dac_biet" class="form-label">Đặc biêt</label>
                    <div class="input-group mb-3">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input check_db" type="radio" <?= $data_sp['dac_biet'] == 1 ? "checked" : "" ?> name="dac_biet" id="inlineRadio1" value="1">
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
                      <input type="file" class="form-control" name="images_sp_db" id="images_sp_db">
                      <?php if (strlen($data_sp['images_banner_sp']) > 0) : ?>
                        <div class="m-2">
                          <img src="<?= $data_sp['images_banner_sp'] ?>" width="100px">
                        </div>
                        <input type="text" class="form-control" value="<?= $data_sp['images_banner_sp'] ?>" name="images_sp_db_old" id="images_sp" hidden>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="ma_loai_sp" class="form-label">Loại Sản Phẩm</label>
                    <select class="form-select" aria-label="Default select example" name="ma_loai_sp">

                      <?php foreach ($loai_cap_2 as $values) : ?>
                        <?php
                        $selected = $data_sp['ma_loai_sp'] == $values['ma_loai_sp'] ? "selected" : "";
                        ?>
                        <option <?= $selected ?> value="<?= $values['ma_loai_sp'] ?>"><?= $values['ten_loai'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-lg-10">
                <div class="mb-3">
                  <label for="mo_ta_chi_tiet" class="form-label">Mô Tả Chi Tiết</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mo_ta_chi_tiet">
                  <?php echo $data_sp['mo_ta_ct'] ?>
                  </textarea>
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