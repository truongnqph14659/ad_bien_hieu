<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Option</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    Quản Lý Option
                </div>
            </div>
            <form class="mx-auto py-1" action="Option_Creating" method="post" enctype="multipart/form-data" name="products">
                <div class="col-lg-6">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">RAM</label>
                        <input type="text" class="form-control don_gia" id="formGroupExampleInput" name="RAM" placeholder="nhập vào RAM">
                    </div>


                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">ROM</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="ROM" placeholder="nhập vào ROM">
                    </div>


                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">VGA</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="VGA" placeholder="nhập vào VGA">
                    </div>

                </div>
                <button class="btn btn-primary" type="submit" name="them_vao">Next</button>
                <button class="btn btn-primary" type="reset">Nhập lại</button>
        </div>
        </form>
    </div>
    <!--  -->
</div>
</div>
<?php
require_once './vender/src_script_admin.php';
?>
<?php
require_once './app/views/admin/footer.php';
?>