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
              <th>image</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $value) : ?>
              <tr>
                <td><?= $value['ma_san_pham'] ?></td>
                <td><?= $value['ten_sp'] ?></td>
                <td><?= $value['images_sp'] ?></td>
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