<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Danh Sách Sản Phẩm</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Bordered Table</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>id_sp</th>
              <th>Name</th>
              <th>Price</th>
              <th>Discount</th>
              <th>image</th>
              <th>sl luu kho</th>
              <th>tg_bat_dau</th>
              <th>tg_ket_thuc</th>
              <th>option</th>
              <th>chi tiet sp</th>
              <th>images</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data_sp as $value) : ?>
              <tr>
                <td><?= $value['ma_san_pham'] ?></td>
                <td><?= $value['ten_sp'] ?></td>
                <td><?= $value['don_gia'] ?></td>
                <td><?= $value['giam_gia'] ?></td>
                <td><img src="<?= $value['images_sp'] ?>" width="100px"></td>
                <td><?= $value['sl_luu_kho'] ?></td>
                <td><?= $value['thoi_gian_bat_dau'] ?></td>
                <td><?= $value['thoi_gian_ket_thuc'] ?></td>
                <td>
                  <a href="list_option_sp?id=<?= $value['ma_san_pham'] ?>"><i class="fas fa-edit btn btn-primary"></i></a>
                </td>
                <td>
                  <a href="list_detail_sp?id=<?= $value['ma_san_pham'] ?>"><i class="fas fa-edit btn btn-primary"></i></a>
                </td>
                <td>
                  <a href="list_images_sp?id=<?= $value['ma_san_pham'] ?>"><i class="fa-solid fa-images btn btn-primary"></i></a>
                </td>
                <td>
                  <a href="edit_product?id=<?= $value['ma_san_pham'] ?>"><i class="fas fa-edit btn btn-primary"></i></a>
                  <a href="remove_product?id=<?= $value['ma_san_pham'] ?>"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>
<?php
require_once './vender/jquery_lib.php';
?>
<?php require_once('./app/views/admin/footer.php'); ?>