<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tạo tài khoản</h1>
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
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <form action="Insert_User" method="POST" enctype="multipart/form-data" id="quickForm" novalidate="novalidate">
              <div class="d-flex">
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="ten_sp" class="form-label">Họ và tên</label>
                    <input type="text" class="form-control" id="ten_sp" name="name" placeholder="nhập vào họ và tên">
                  </div>
                  <div class="mb-3">
                    <label for="don_gia" class="form-label">Email</label>
                    <input type="email" class="form-control" id="don_gia" name="email" placeholder="nhập vào email">
                  </div>
                  <div class="mb-3">
                    <label for="sl_luu_kho" class="form-label">Password</label>
                    <input type="password" class="form-control" id="sl_luu_kho" name="password" placeholder="nhập vào password">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="sdt" placeholder="nhập vào std">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
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
<!-- lấy script từ vender -->
<?php
require_once './vender/src_script_admin.php';
?>

<?php
require_once './app/views/admin/footer.php';
?>