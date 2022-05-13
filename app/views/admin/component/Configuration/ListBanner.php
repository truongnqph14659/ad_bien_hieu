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
              <th>ảnh</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <!-- fake data -->
            <?php foreach ($data as $key => $value) : ?>
              <tr>
                <td><img src="<?= url_img . $value['img_banner'] ?>" alt="" style="width:100px"></td>
                <td>
                  <span class="badge badge-success"><a href="edit_banner?id=<?= $value['id_banner'] ?>"><i class="fas fa-edit" style="color: #ffff;"></i></a></span>
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