<?php get_header(); ?>

<div class="top_img">
    <div class="img_text">
        <h2>お問い合わせ</h2>
        <p>CONTACT</p>
        <div class="img_line">
            <img src="<?php echo esc_url(get_theme_file_uri('images/top_img_line.png')); ?>">
        </div>
    </div>
</div>
</header>
<main>

    <section class="contact_form">
    <h3>ご依頼、ご相談はこちらからお問い合わせください。</h3>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        endif; ?>

    </section>

</main>
<?php get_footer(); ?>