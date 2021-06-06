<?php get_header(); ?>
<div class="top_img">
    <div class="img_text">
        <h2>補助金・助成金を探す</h2>
        <p>SUBSIDY</p>
        <div class="img_line">
            <img src="<?php echo esc_url(get_theme_file_uri('images/top_img_line.png')); ?>">
        </div>
    </div>
</div>
</header>
<!-- main -->
<main>
<!-- sidebar -->
<?php get_sidebar(); ?>
    
    <!-- article-area -->
    <div class="article_area">
        <?php
        $categories = get_the_category();
        if ($categories) {
            echo '<ul class="post-categories">';
            foreach ($categories as $category) {
                echo '<li>' . $category->name . '</li>';
            }
            echo '</ul>';
        }
        ?>
        <div class="article_title">
            <h3><?php the_title(); ?></h3>
        </div>
        <div class="article_img">
            <img src="<?php echo esc_url(get_theme_file_uri('images/service__item-img.png')); ?>">
        </div>
        <?php the_content(); ?>
        <!-- pagenation -->
        <div class="pagenation">
            <div class="prev">
                <?php previous_post_link('%link', '≪ PREV'); ?>
            </div>
            <div class="index">
                <a href="index.html">INDEX</a>
            </div>
            <div class="next">
                <?php next_post_link('%link', 'NEXT ≫'); ?>
            </div>
        </div>
        <ul class="ft_category">
            <li class="category_title">
                <h2>CATEGORY</h2>
            </li>
            <div class="category_item_area">
                <li class="category_item">
                    <a href="#">
                        <p>補助金</p>
                    </a>
                </li>
                <li class="category_item">
                    <a href="#">
                        <p>助成金</p>
                    </a>
                </li>
                <li class="category_item border-none">
                    <a href="#">
                        <p>ファンド</p>
                    </a>
                </li>
            </div>
            <li class="category_title">
                <h2>SEARCH</h2>
            </li>
            <div class="serach_box_area">
                <li class="serach_box">
                    <a href="#">
                        <img src="img/serch.jpg">
                    </a>
                    <input type="search" class="site_search" aria-label="Search through site content">
                </li>
            </div>
        </ul>
    </div>
</main>
<?php get_footer(); ?>