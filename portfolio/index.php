<?php get_header(); ?>
<div class="top_img">
    <div class="img_text">
        <h2>サービス実例</h2>
        <p>SERVICE</p>
        <div class="img_line">
            <img src="<?php echo esc_url(get_theme_file_uri('images/top_img_line.png')); ?>">
        </div>
    </div>
</div>
</header>
<main>
    <?php get_sidebar(); ?>
    <div class="news_area">
        <div class="info">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <article class="info_area">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full'); ?>
                            <div class="category_mark">
                                <?php
                                $category = get_the_category();
                                echo $category[0]->cat_name;
                                ?>
                            </div>

                            <h2 class="info_title"><?php the_title(); ?></h2>
                            <div class="info_text">
                                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                                </p>
                            </div>
                        </a>
                    </article>
            <?php
                }
            }
            ?>
        </div>
        <ul class="page_num">
            <li class="page_no">
                <a href="#">&laquo;</a>
            </li>
            <li class="page_no">
                <a href="#">1</a>
            </li>
            <li class="page_no">
                <a href="#">2</a>
            </li>
            <li class="page_no">
                <a href="#">3</a>
            </li>
            <li class="page_no">
                <a href="#">4</a>
            </li>
            <li class="page_no">
                <a href="#">5</a>
            </li>
            <li class="page_no">
                <a href="#">&raquo;</a>
            </li>
        </ul>
        <ul class="ft_category">
            <?php if (is_active_sidebar('widget_area')) : ?>

                <?php dynamic_sidebar('widget_area'); ?>

            <?php endif; ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>