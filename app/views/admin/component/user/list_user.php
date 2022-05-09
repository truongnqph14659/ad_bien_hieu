<?php require_once('./app/views/admin/header.php'); ?>
<link rel="stylesheet" href="<?= server_port ?>plugins/fontawesome-free/css/all.min.css">
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Danh Sách Tài Khoản</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>user name</th>
              <th>Email</th>
              <th>Avatar</th>
              <th>vai tro</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <!-- fake data -->
            <?php foreach ($data as $key => $value) : ?>
              <tr>
                <td><?= $value['user_name'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><img src="<?= $value['image'] ?>" class="user_image" style="width:50px"></td>
                <td>
                  <?php
                  if ($value['role'] == 1) {
                    echo $vai_tro = 'quản trị viên';
                  } else {
                    echo $vai_tro = 'khách hàng';
                  }
                  ?>
                </td>
                <td>
                  <span class="badge badge-success"><a href="edit_acount?id=<?= $value['user_id'] ?>"><i class="fas fa-edit" style="color: #ffff;"></i></a></span>
                  <?php if ($value['role'] == 0) : ?>
                    <span class="badge bg-danger" data-id="<?= $value['user_id'] ?>" style="cursor: pointer;"><a href="remove_acount?id=<?= $value['user_id'] ?>"><i class="fa-solid fa-trash-can"></i></a></span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
</div>
<script src="<?= server_port ?>du_an_1/public/plugins/jquery/jquery.min.js"></script>
<script src="<?= server_port ?>du_an_1/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= server_port ?>du_an_1/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="du_an_1/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<?php require_once('./app/views/admin/footer.php'); ?>