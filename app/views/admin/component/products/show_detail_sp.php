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
                            <th>chung_loai</th>
                            <th>part_number</th>
                            <th>mau_sac</th>
                            <th>CPU</th>
                            <th>RAM</th>
                            <th>VGA</th>
                            <th>ROM</th>
                            <th>man_hinh</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data_detail_sp['chung_loai'] ?></td>
                            <td><?= $data_detail_sp['part_number'] ?></td>
                            <td><?= $data_detail_sp['mau_sac'] ?></td>
                            <td><?= $data_detail_sp['CPU'] ?></td>
                            <td><?= $data_detail_sp['RAM'] ?></td>
                            <td><?= $data_detail_sp['VGA'] ?></td>
                            <td><?= $data_detail_sp['ROM'] ?></td>
                            <td><?= $data_detail_sp['man_hinh'] ?></td>
                            <td>
                                <a href="edit_detail_sp?id=<?= $data_detail_sp['ma_san_pham'] ?>"><i class="fas fa-edit btn btn-primary"></i></a>
                            </td>
                        </tr>
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