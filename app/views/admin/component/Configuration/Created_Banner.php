<?php require_once('./app/views/admin/header.php'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm Sản Phẩm</h1>
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
                    Quản Lý Chi Tiết Sản Phẩm
                </div>
            </div>
            <form class="mx-auto py-1" action="insert_banner" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                <div class="d-flex">
                    <div class="col-lg-4">
                        
                        
                        <div class="mb-3">
                            <label for="mau_sac" class="form-label">ảnh sản phẩm</label>
                            <input type="file" class="form-control" id="mau_sac" name="image" placeholder="nhập vào màu sắc">
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary" type="submit" name="them_vao">Next</button>
                <button class="btn btn-primary" type="reset">Nhập lại</button>
            </form>
        </div>
        <!--  -->
    </div>
</div>
<script src="public/resources/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content')
</script>
<?php
require_once './vender/src_script_admin.php';
?>

<?php
require_once './app/views/admin/footer.php';
?>