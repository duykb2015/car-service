<?php $user = $this->session->userdata("name") ?>
<aside class="main-sidebar sidebar-dark-primary elevation-3">
    <a href="<?= admin_url() ?>" class="brand-link">
        <img src="<?= public_url('admin') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-2 pb-2 mb-2 d-flex">
            <div class="image">
                <img src="<?= public_url('admin') ?>/dist/img/user2-160x160.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <p style="color:white"><?= !empty($user) ? $user : "Anonymous" ?> | <a href="<?= admin_url("login/sign_out") ?>">Đăng xuất</a></p>
            </div>
        </div>

        <nav class="10">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url('admin') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Bảng Điều Khiển
                        </p>
                    </a>
                </li>
                <!-- Slide Management -->
                <li class="nav-item <?= $this->uri->rsegment(1) == "slide" ? "menu-is-opening menu-open" : "" ?>">
                    <a href="#" class="nav-link <?= $this->uri->rsegment(1) == "slide" ? "active" : "" ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Slide
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= admin_url('slide/index') ?>" class="nav-link <?= $this->uri->rsegment(1) == "slide" && $this->uri->rsegment(2) == "index" ? "active" : "" ?>">
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class=" nav-item">
                            <a href="<?= admin_url('slide/add') ?>" class="nav-link <?= $this->uri->rsegment(1) == "slide" && $this->uri->rsegment(2) == "add" ? "active" : "" ?>">
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?= $this->uri->rsegment(1) == "images" ? "menu-is-opening menu-open" : "" ?>">
                    <a href="#" class="nav-link <?= $this->uri->rsegment(1) == "images" ? "active" : "" ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Hình ảnh
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= admin_url('images/index') ?>" class="nav-link <?= $this->uri->rsegment(1) == "images" && $this->uri->rsegment(2) == "index" ? "active" : "" ?>">
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class=" nav-item">
                            <a href="<?= admin_url('images/detail') ?>" class="nav-link <?= $this->uri->rsegment(1) == "images" && $this->uri->rsegment(2) == "detail" ? "active" : "" ?>">
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Product Management -->
                <li class="nav-item <?= $this->uri->rsegment(1) == "services" ? "menu-is-opening menu-open" : "" ?>">
                    <a href="#" class="nav-link <?= $this->uri->rsegment(1) == "services" ? "active" : "" ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Dịch vụ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= admin_url('services/index') ?>" class="nav-link <?= $this->uri->rsegment(1) == "services" && $this->uri->rsegment(2) == "index" ? "active" : "" ?>">
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class=" nav-item">
                            <a href="<?= admin_url('services/detail') ?>" class="nav-link <?= $this->uri->rsegment(1) == "services" && $this->uri->rsegment(2) == "detail" ? "active" : "" ?>">
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item <?= $this->uri->rsegment(1) == "news" ? "menu-is-opening menu-open" : "" ?>">
                    <a href="#" class="nav-link <?= $this->uri->rsegment(1) == "news" ? "active" : "" ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Tin tức
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= admin_url('news/index') ?>" class="nav-link <?= $this->uri->rsegment(1) == "news" && $this->uri->rsegment(2) == "index" ? "active" : "" ?>">
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class=" nav-item">
                            <a href="<?= admin_url('news/detail') ?>" class="nav-link <?= $this->uri->rsegment(1) == "news" && $this->uri->rsegment(2) == "detail" ? "active" : "" ?>">
                                <p>Thêm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>