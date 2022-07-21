<div class="wrapper">
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Danh sách</h1>
                        <?php if ($this->session->flashdata('message')) : ?>
                            <ol class="breadcrumb float-sm-right">
                                <small><?= $this->session->flashdata('message') ?></small>
                            </ol>
                        <?php endif ?>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= admin_url('services/detail') ?>">Thêm</a></li>
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
                                        <th>Tên</th>
                                        <th>Slug</th>
                                        <th>Mô tả</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày cập nhật</th>
                                        <th colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($list)) : ?>
                                        <?php foreach ($list as $item) : ?>
                                            <tr>
                                                <td><?= $item->name ?></td>
                                                <td><?= $item->slug ?></td>
                                                <td><?= $item->description ?></td>
                                                <td><?= $item->create_at ?></td>
                                                <td><?= $item->update_at ?></td>
                                                <td width="50px" style="text-align:center;"><a href="<?= admin_url('services/detail/') . $item->id ?>">Sửa</a></td>
                                                <td width="50px" style="text-align:center;"><a href="<?= admin_url('services/delete/') . $item->id ?>">Xóa</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td style="text-align:center;" colspan="11">Trống - <a href="<?= admin_url('services/detail') ?>">Thêm mới</a></td>
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