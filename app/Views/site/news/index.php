<main id="main" class="">

    <div id="content" class="blog-wrapper blog-archive page-wrapper">
        <header class="archive-page-header">
            <div class="row">
                <div class="large-12 text-center col">
                    <h1 class="page-title is-large uppercase">
                        <span>Tin tức</span>
                    </h1>
                </div>
            </div>
        </header>

        <div class="row row-large row-divided ">

            <div class="large-12 col medium-col-first">
                <div id="row-1582493931" class="row large-columns-4 medium-columns- small-columns-1 has-shadow row-box-shadow-1 row-box-shadow-2-hover row-masonry" data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
                    <?php if (!empty($news)) : ?>
                        <?php foreach ($news as $item) : ?>
                            <div class="col post-item">
                                <div class="col-inner">
                                    <a href="<?= site_url("tin-tuc/") . $item->slug . ".html" ?>" class="plain">
                                        <div class="box box-text-bottom box-blog-post has-hover">
                                            <div class="box-image">
                                                <div class="image-cover" style="padding-top:56%;">
                                                    <img width="300" height="205" src="<?= base_url("uploads/images/") . $item->image ?>" class="attachment-medium size-medium wp-post-image" alt="" />
                                                </div>
                                            </div>
                                            <div class="box-text text-left">
                                                <div class="box-text-inner blog-post-inner">
                                                    <h5 class="post-title is-large"><?= $item->name ?></h5>
                                                    <div class="is-divider"></div>
                                                    <p class="from_the_blog_excerpt"><?= $item->description ?></p>
                                                </div>
                                            </div>
                                            <div class="badge absolute top post-date badge-circle">
                                                <?php
                                                $date1 = explode(" ", $item->update_at);
                                                $date2 = explode("-", $date1[0]);
                                                ?>
                                                <div class="badge-inner">
                                                    <span class="post-date-day"><?= $date2[2] ?></span><br>
                                                    <span class="post-date-month is-xsmall">Th <?= $date2[1] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>

                <div class="pagination pag_center"><?= $this->pagination->create_links() ?></div>
            </div>
        </div>
    </div>
</main>