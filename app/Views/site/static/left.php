<div class="post-sidebar large-3 col">
    <div id="secondary" class="widget-area " role="complementary">
        <aside id="flatsome_recent_posts-4" class="widget flatsome_recent_posts"> <span class="widget-title "><span>Bài viết mới</span></span>
            <div class="is-divider small"></div>
            <ul>
                <?php if (!empty($relative_post)) : ?>
                    <?php foreach ($relative_post as $item) : ?>
                        <li class="recent-blog-posts-li">
                            <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                <div class="flex-col mr-half">
                                    <div class="badge post-date  badge-circle">
                                        <?php
                                        $date1 = explode(" ", $item->create_at);
                                        $date2 = explode("-", $date1[0]);
                                        ?>
                                        <div class="badge-inner">
                                            <span class="post-date-day"><?= $date2[2] ?></span><br>
                                            <span class="post-date-month is-xsmall">Th <?= $date2[1] ?></span>
                                        </div>
                                    </div>
                                </div><!-- .flex-col -->
                                <div class="flex-col flex-grow">
                                    <a href="<?= site_url($link) . $item->slug . ".html" ?>" title="<?= $item->name ?>"><?= $item->name ?></a>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                <?php else : ?>
                    <li>Trống</li>
                <?php endif ?>
            </ul>
        </aside>
    </div>
</div>