<div class="wrapper">
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản Lý Slide</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= admin_url('slide') ?>">Quay lại</a></li>
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
                                            <?php if (isset($slide)) : ?>
                                                <div class="col-10">
                                                    <label for="image">Hình ảnh slide</label>
                                                    <input type="file" name="image" class="form-control" accept="image/png, image/jpeg">
                                                    <small style="color:red"><?= form_error('image') ?></small>
                                                    <small style="color:red"><?= !empty($error) ?  $error : "" ?></small>
                                                </div>
                                                <div class="col-2">
                                                    <label for="image">Slide hiện tại</label>
                                                    <a href="<?= base_url("uploads/images/") . $slide->image ?>" class="form-control"><?= $slide->image ?></a>
                                                </div>
                                            <?php else : ?>
                                                <div class="col-12">
                                                    <label for="image">Hình ảnh slide</label>
                                                    <input type="file" name="image" class="form-control" accept="image/png, image/jpeg">
                                                    <small style="color:red"><?= form_error('image') ?></small>
                                                    <small style="color:red"><?= !empty($error) ?  $error : "" ?></small>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                                    <a href="<?= admin_url('slide') ?>" class="btn btn-default">Huỷ</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>