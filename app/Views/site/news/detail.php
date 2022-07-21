<?php if (empty($detail)) redirect("service") ?>
<main id="main" class="">
    <div id="content" class="blog-wrapper blog-single page-wrapper">
        <div class="row row-large row-divided ">

            <?php $this->load->view("site/static/left", $this->data) ?>
            <div class="large-9 col medium-col-first">

                <article id="post-751" class="post-751 post type-post status-publish format-standard has-post-thumbnail hentry category-cham-soc-xe-lam-dep category-dich-vu category-quy-trinh-bao-duong-noi-that">
                    <div class="article-inner has-shadow box-shadow-1 box-shadow-2-hover">
                        <header class="entry-header">
                            <div class="entry-header-text entry-header-text-top text-left">

                                <h1 class="entry-title"><?= $detail->name ?></h1>
                                <div class="entry-divider is-divider small"></div>

                            </div><!-- .entry-header -->

                            <div class="entry-image relative">
                                <img width="779" height="585" src="<?= base_url("uploads/images/") . $detail->image ?>" class="attachment-large size-large wp-post-image" alt="service image" sizes="(max-width: 779px) 100vw, 779px" />
                                <div class="badge absolute top post-date badge-circle">
                                    <?php
                                    $date1 = explode(" ", $detail->create_at);
                                    $date2 = explode("-", $date1[0]);
                                    ?>
                                    <div class="badge-inner">
                                        <span class="post-date-day"><?= $date2[2] ?></span><br>
                                        <span class="post-date-month is-small">Th <?= $date2[1] ?></span>
                                    </div>
                                </div>
                            </div><!-- .entry-image -->
                        </header><!-- post-header -->
                        <div class="entry-content single-page">

                            <?= $detail->content ?>

                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>