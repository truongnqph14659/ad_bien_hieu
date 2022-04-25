<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Option</h1>
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
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mã Option</th>
                            <th>RAM</th>
                            <th>ROM</th>
                            <th>VGA</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data_options as $value) : ?>
                            <tr>
                                <td><?= $value['ma_option'] ?></td>
                                <td><?= $value['RAM'] ?></td>
                                <td><?= $value['ROM'] ?></td>
                                <td><?= $value['VGA'] ?></td>
                                <td>
                                    <a href="edit_option?id_option=<?= $value['ma_option'] ?>"><i class="fas fa-edit btn btn-primary"></i></a>
                                    <a href="remove_option?id_option=<?= $value['ma_option'] ?>"><i class="fas fa-trash-alt btn btn-danger"></i></a>
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