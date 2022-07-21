<div class="wrapper">
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản Lý Hình Ảnh</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= admin_url('images') ?>">Quay lại</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="form-group">
                                        <div class="row">
                                            <?php if (!empty($images)) : ?>
                                                <div class="col-10">
                                                    <label for="image">Hình ảnh</label>
                                                    <input type="file" name="image" class="form-control" accept="image/png, image/jpeg">
                                                </div>
                                                <div class="col-2">
                                                    <label for="image">Hình ảnh hiện tại</label>
                                                    <a href="<?= base_url("uploads/images/") . $images->image ?>" class="form-control"><?= $images->image ?></a>
                                                </div>
                                            <?php else : ?>
                                                <div class="col-12">
                                                    <label for="image">Hình ảnh</label>
                                                    <input type="file" name="image" class="form-control" accept="image/png, image/jpeg">
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" name="status">
                                            <option <?= isset($images->status) && $images->status == 1 ? 'selected' : '' ?> value="1">Hiển thị</option>
                                            <option <?= isset($images->status) && $images->status == 0 ? 'selected' : '' ?> value="0">Xoá</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                                    <a href="<?= admin_url('images') ?>" class="btn btn-default">Huỷ</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>