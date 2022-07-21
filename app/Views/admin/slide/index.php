<div class="wrapper">
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản Lí Slide</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= admin_url('slide/detail') ?>">Thêm slide</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Hình ảnh silde</th>
                                        <th>Ngày cập nhật</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($slide)) : ?>
                                        <?php foreach ($slide as $item) : ?>
                                            <tr>
                                                <td><?= $item->id ?></td>
                                                <td><a href="<?= base_url("uploads/images/") . $item->image ?>"><?= $item->image ?></a></td>
                                                <td><?= $item->update_at ?></td>
                                                <td width="50px" style="text-align:center;"><a href="<?= admin_url('slide/detail/') . $item->id ?>">Sửa</a></td>
                                                <td width="50px" style="text-align:center;"><a href="<?= admin_url('slide/delete/') . $item->id ?>">Xóa</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td style="text-align:center;" colspan="11">Trống - <a href="<?= admin_url('slide/detail') ?>">Thêm mới</a></td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>