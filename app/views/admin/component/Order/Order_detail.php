<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Chi tiết đơn hàng</h1>
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
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!--  fake data  -->

          <?php foreach ($data_orders as $key => $value) : ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Tên sản phẩm</label>
                <!-- <input type="text" id="inputName" class="form-control" value="AdminLTE"> -->
                <p><?= $value['ten_sp'] . ' ' . $value['RAM'] . '-' . $value['ROM'] ?></p>
              </div>
              <div class="form-group">
                <label for="inputDescription">Price</label>
                <p><?php echo number_format($value['don_gia']) ?>đ</p>
              </div>
              <div class="form-group">
                <label for="inputDescription">image</label>
                <p><img src="" class="user_image" style="width:50px"></p>
              </div>
              <div class="form-group">
                <label for="inputStatus">quantity</label>
                <p><?php echo $value['so_luong'] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- /.card-body -->
        </div>

        <!-- /.card -->
      </div>
      <div class="col-md-6">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Budget</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="inputEstimatedBudget">Name</label>
              <p>tên người nhận :<strong><?= $data_orders[0]['user_name'] ?></strong></p>
            </div>
            <div class="form-group">
              <label for="inputSpentBudget">Phone Number</label>
              <p>số điện thoại :<strong><?= $data_orders[0]['sdt'] ?></strong></p>
            </div>
            <div class="form-group">
              <label for="inputEstimatedDuration">Address</label>
              <p><?= $data_orders[0]['dia_chi'] . ',' . $data_orders[0]['xa_phuong'] . ',' . $data_orders[0]['quan_huyen'] . ',' . $data_orders[0]['tinh_thanh'] ?></strong></p>
            </div>
            <div class="form-group">
              <label for="inputEstimatedDuration">Note</label>
              <p>Ghi chú :<strong></strong></p>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="card card-success">
          <div class="card-header">
          </div>
          <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
              <p>Tổng Đơn Hàng : <strong><?= count($data_orders) ?></strong> </p>
              <p>Thành tiền: <strong>
                  <?php
                  $thanh_tien = 0;
                  foreach ($data_orders as $value) {
                    $thanh_tien += $value['thanh_tien'];
                  }
                  echo number_format($thanh_tien);
                  ?>đ
                </strong></p>
            </div>
          </div>
        </div>
        <!-- /.card -->
        <!-- /.card -->
      </div>
    </div>
  </div>
</div>
<?php
require_once './vender/jquery_lib.php';
?>
<?php require_once('./app/views/admin/footer.php'); ?>