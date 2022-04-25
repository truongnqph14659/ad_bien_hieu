<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Danh Sách Đơn Hàng</h1>
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
        <h3 class="card-title">Bordered Table</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>user_name</th>
              <th>phone</th>
              <th>Status</th>
              <th>Đang xử lý</th>
              <th>Đóng gói</th>
              <th>Đang vận chuyển</th>
              <th>Đã giao</th>
              <th>Đã hủy</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data_orders as $key => $value) : ?>
              <tr>
                <td>1</td>
                <td><?= $value['user_name'] ?></td>
                <td><?= $value['sdt'] ?></td>
                <td>
                  <?php
                  if ($value['status_order'] == 'x') : ?>
                    <?php echo 'Đang xử lý'; ?>
                  <?php elseif ($value['status_order'] == 'y') : ?>
                    <?php echo 'Đóng gói'; ?>
                  <?php elseif ($value['status_order'] == 'z') : ?>
                    <?php echo 'Đã giao'; ?>
                  <?php elseif ($value['status_order'] == 's') : ?>
                    <?php echo 'Đang vận chuyển'; ?>
                  <?php elseif ($value['status_order'] == 'c') : ?>
                    <?php echo 'Đã hủy'; ?>
                  <?php endif; ?>
                </td>
                </td>
                <td class="td_status">
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="checked" data-id="<?= $value['id_order'] ?>" data-status="x" <?= $value['status_order'] == 'x' ? 'checked' : '' ?> value="60">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="checked" data-id="<?= $value['id_order'] ?>" data-status="y" <?= $value['status_order'] == 'y' ? 'checked' : '' ?> value="60">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="checked" data-id="<?= $value['id_order'] ?>" data-status="s" <?= $value['status_order'] == 's' ? 'checked' : '' ?> value="60">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="checked" data-id="<?= $value['id_order'] ?>" data-status="z" <?= $value['status_order'] == 'z' ? 'checked' : '' ?> value="60">
                    </div>
                  </div>
                </td>
                <td>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="radio" class="checked" data-id="<?= $value['id_order'] ?>" data-status="c" <?= $value['status_order'] == 'c' ? 'checked' : '' ?> value="60">
                    </div>
                  </div>
                </td>
                <td>
                  <span class="badge badge-success"><a href="order_detail?id=<?= $value['id_order'] ?>"><i class="fas fa-eye" style="color: #ffff;"></i></a></span>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
require_once './vender/jquery_lib.php';
?>
<script>
  $('.checked').each((index, data) => {
    data.addEventListener('click', () => {
      var id = $(data).data('id');
      var status = $(data).data('status')
      $.ajax({
        url: "update_status",
        method: "GET",
        data: {
          id: id,
          status: status
        },
        success: function(data) {
          // alert(data);
          location.reload();
        }
      });
    });
  });
</script>
<?php
require_once './app/views/admin/footer.php';
?>