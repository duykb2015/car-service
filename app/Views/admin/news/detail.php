<div class="wrapper">
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quản Lý Tin Tức</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= admin_url('services') ?>">Quay lại</a></li>
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
                                            <div class="col-6">
                                                <div class="error">
                                                    <label>Tên tin tức</label>
                                                    <input type="text" name="name" id="title" class="form-control" onkeyup="ChangeToSlug()" value="<?= isset($detail->name) ? $detail->name : set_value('name') ?>">
                                                    <small class="err-msg"><?= form_error('name') ?></small>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="error">
                                                    <label>Slug</label>
                                                    <input id="slug" type="text" name="slug" class="form-control" value="<?= isset($detail->slug) ? $detail->slug : set_value('slug') ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="error">
                                                    <label>Mô tả</label>
                                                    <textarea type="text" name="description" class="form-control"><?= isset($detail->description) ? $detail->description : set_value('description') ?> </textarea>
                                                    <small class="err-msg"><?= form_error('description') ?></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Nội dung</label>
                                                <textarea name="content"><?= isset($detail->content) ? $detail->content : set_value('content') ?></textarea>
                                                <script>
                                                    CKEDITOR.replace('content', {
                                                        filebrowserBrowseUrl:      '<?= public_url() ?>/ckfinder/ckfinder.html',
                                                        filebrowserImageBrowseUrl: '<?= public_url() ?>/ckfinder/ckfinder.html?type=Images',
                                                        filebrowserUploadUrl:      '<?= public_url() ?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                                        filebrowserImageUploadUrl: '<?= public_url() ?>/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
                                                    });
                                                </script>
                                                <small class="err-msg"><?= form_error('content') ?></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <?php if (isset($detail->image)) : ?>
                                                <div class="col-9">
                                                    <label>Hình ảnh</label>
                                                    <input type="file" name="image" class="form-control">
                                                </div>
                                                <div class="col-3">
                                                    <label>Hình ảnh hiện tại</label>
                                                    <a href="<?= base_url("uploads/services/") . $detail->image ?>" class="form-control"><?= $detail->image ?></a>
                                                </div>
                                            <?php else : ?>
                                                <div class="col-12">
                                                    <div class="error">
                                                        <label>Hình ảnh</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" name="status">
                                            <option <?= isset($detail->status) && $detail->status == 1 ? 'selected' : '' ?> value="1">Hiển thị</option>
                                            <option <?= isset($detail->status) && $detail->status == 0 ? 'selected' : '' ?> value="0">Xoá</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                                    <a href="<?= admin_url('services') ?>" class="btn btn-default">Hủy</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>