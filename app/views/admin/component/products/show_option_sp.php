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
                            <th>Mã Option</th>
                            <th>Đơn Gía</th>
                            <th>số lượng</th>
                            <th>giảm giá</th>
                            <th>ngày bắt đầu</th>
                            <th>ngày kết thúc</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_options_sp as $value) : ?>
                            <tr>
                                <td><?= $value['ma_option'] ?></td>
                                <td><?= $value['don_gia'] ?></td>
                                <td><?= $value['sl_luu_kho'] ?></td>
                                <td><?= $value['giam_gia'] ?></td>
                                <td><?= $value['thoi_gian_bat_dau'] ?></td>
                                <td><?= $value['thoi_gian_ket_thuc'] ?></td>
                                <td>
                                    <a href="edit_option_sp?id_sp=<?= $value['ma_san_pham'] ?>&id_option=<?= $value['ma_option'] ?>"><i class="fas fa-edit btn btn-primary"></i></a>
                                    <a href="remove_option_sp?id_sp=<?= $value['ma_san_pham'] ?>&id_option=<?= $value['ma_option'] ?>"><i class="fas fa-trash-alt btn btn-danger"></i></a>
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