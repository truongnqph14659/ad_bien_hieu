<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Danh Sách Loại Hàng</h1>
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
              <th>ID</th>
              <th>Name</th>
              <th>Parent_id</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data_categorys as $value) : ?>
              <tr>
                <td><?= $value['ma_loai_sp'] ?></td>
                <td><?= $value['ten_loai'] ?></td>
                <td><?= $value['parent_id'] ?></td>
                <td>
                  <a href="edit_category?ma_loai_sp=<?= $value['ma_loai_sp'] ?>"><i class="fas fa-edit btn btn-primary"></i></a>
                  <a href="remove_category?ma_loai_sp=<?= $value['ma_loai_sp'] ?>" onclick="return confirm('muốn xóa loại sản phẩm này?');"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
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