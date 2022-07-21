<?php
$home = "menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-24";
$home_active = "menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-16 current_page_item active menu-item-24";

$about = "menu-item menu-item-type-post_type menu-item-object-page menu-item-22";
$about_active = "menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-18 current_page_item active menu-item-22";

$services = "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-723 has-dropdown";
$service_active = "menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item menu-item-has-children active  menu-item-723 has-dropdown";

$news = "menu-item menu-item-type-taxonomy menu-item-object-category  menu-item-25";
$news_active = "menu-item menu-item-type-taxonomy menu-item-object-category current-menu-item active  menu-item-25";

$contact = "menu-item menu-item-type-post_type menu-item-object-page  menu-item-23";
$contact_active = "menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-20 current_page_item active  menu-item-23";

?>

<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">

        <div id="top-bar" class="header-top hide-for-sticky">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                        <li class="html custom html_topbar_left">
                            <p class="mona_html showroom">77 chuyên dùng 9, P.Phũ Mỹ, Q.7, Tp.HCM</p>
                        </li>
                        <li class="html custom html_topbar_right">
                            <p class="mona_html hotline"><a href="tel:0337803128">033 780 3128</a></p>
                        </li>
                        <li class="html custom html_nav_position_text_top">
                            <p class="mona_html clock">Thời gian làm việc: Thứ 2 - 6 (9h - 18h)</p>
                        </li>
                    </ul>
                </div>

                <div class="flex-col show-for-medium flex-grow">
                    <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                        <li class="html custom html_topbar_left">
                            <p class="mona_html showroom">319 - C16 Lý Thường Kiệt, P.15, Q.11, Tp.HCM</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

                <div id="logo" class="flex-col logo">
                    <a href="<?= site_url("trang-chu") ?>" title="AutoSer" rel="home">
                        <img width="430" height="91" src="<?= public_url("site") ?>/wp-content/uploads/2019/01/logo-mona-1.png" class="header_logo header-logo" alt="AutoSer" />
                        <img width="430" height="91" src="<?= public_url("site") ?>/wp-content/uploads/2019/01/logo-mona-1.png" class="header-logo-dark" alt="AutoSer" />
                    </a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">

                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left
            flex-grow">
                    <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                        <li class="header-block">
                            <div class="header-block-block-1">
                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 50px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img width="64" height="64" src="<?= public_url("site") ?>/wp-content/uploads/2019/01/chat.png" class="attachment-medium size-medium" alt="chat" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p>
                                            <span style="font-size: 90%;">
                                                <strong>
                                                    <a href="tel:0337803128" style="color: #1c63b8;">0337803128</a>
                                                </strong>
                                            </span><br />
                                            <span style="font-size: 90%;">
                                                <a style="color: #777;" href="mailto:duyx4545@gmail.com">
                                                    <span class="__cf_email__" data-cfemail="0367666e6c6d6b766d7766716443646e626a6f2d606c6e">duyx4545@gmail.com</span>
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-block">
                            <div class="header-block-block-2">
                                <div class="icon-box featured-box icon-box-left text-left">
                                    <div class="icon-box-img" style="width: 50px">
                                        <div class="icon">
                                            <div class="icon-inner">
                                                <img width="64" height="64" src="<?= public_url("site") ?>/wp-content/uploads/2019/01/alarm-clock.png" class="attachment-medium size-medium" alt="clock" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-text last-reset">
                                        <p><span style="font-size: 90%; color: #1c63b8;"><strong>9h00 - 18h00</strong></span><br />
                                            <span style="font-size: 90%; color: #777">Từ thứ 2 đến thứ 6</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                        <li class="html header-button-1">
                            <div class="header-button">
                                <a href="tel:0337803128" class="button primary is-outline is-large">
                                    <span>GỌI DỊCH VỤ</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div>
        <div id="wide-nav" class="header-bottom wide-nav nav-dark hide-for-medium">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav header-nav header-bottom-nav nav-left nav-uppercase">
                        <li id="menu-item-24" class="<?= uri_string(1)  == "trang-chu" || uri_string(1) == "" ? $home_active : $home ?>"><a href="<?= site_url("trang-chu") ?>" class="nav-top-link">Trang chủ</a></li>
                        <li id="menu-item-22" class="<?= uri_string(1)  == "gioi-thieu" ? $about_active : $about ?>"><a href="<?= site_url("gioi-thieu") ?>" class="nav-top-link">Giới thiệu</a></li>
                        <li id="menu-item-723" class="<?= uri_string(1) == "dich-vu" ? $service_active : $services ?>"><a href="<?= site_url("dich-vu") ?>" class="nav-top-link">Dịch vụ</a></li>
                        <li id="menu-item-25" class="<?= uri_string(1)  == "tin-tuc"  ? $news_active : $news ?>"><a href="<?= site_url("tin-tuc") ?>" class="nav-top-link">Tin tức</a></li>
                        <li id="menu-item-23" class="<?= uri_string(1)  == "lien-he" ? $contact_active : $contact ?>"><a href="<?= site_url("lien-he") ?>" class="nav-top-link">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>