<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合同会社R&G</title>
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('css/reset.css')); ?>">
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('css/03style.css')); ?>">
    <?php if(is_single()): ?>
        <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('css/03-03style.css')); ?>">
    <?php elseif(is_page()): ?>
        <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('css/03-02style.css')); ?>">
    <?php endif?>
    <script src="<?php echo esc_url(get_theme_file_uri('js/jquery-3.5.1.min.js')); ?>"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header_top">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?> ">
                    <div class="logo_img">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/logo_img.png')); ?>">
                    </div>
                    <div class="logo_title">
                        <h1>合同会社R&G</h1>
                        <p>Rise and Grow</p>
                    </div>
                </a>
            </div>
            <div class="business_hours">
                <div class="tel">
                    <img src="<?php echo esc_url(get_theme_file_uri('images/tel_mark.png')); ?>">
                    <a href="tel:0120-123-4568">0120-123-4568</a>
                </div>
                <div class="holiday">
                    <p>定休：土日祝</p>
                </div>
            </div>
            <div class="inquiry">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                    <div class="inquiry_box">
                        お問い合わせ
                    </div>
                </a>
            </div>
            <div class="menu_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- sp-navi -->
            <div class="hb_menu is_none">
                <div class="header_top">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <div class="logo_img">
                                <img src="<?php echo esc_url(get_theme_file_uri('images/logo_img.png')); ?>">
                            </div>
                            <div class="logo_title">
                                <h1>合同会社R&G</h1>
                                <p>Rise and Grow</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="hb_menu-area">
                    <div class="menu__item">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <div>ホーム</div>
                            <div>></div>
                        </a>
                    </div>
                    <div class="menu__item">
                        <a href="#">
                            <div>事業案内</div>
                            <div>></div>
                        </a>
                    </div>
                    <div class="menu__item">
                        <a href="#">
                            <div>補助金・助成金を探す</div>
                            <div>></div>
                        </a>
                    </div>
                    <div class="menu__item">
                        <a href="#">
                            <div>サービス実例</div>
                            <div>></div>
                        </a>
                    </div>
                    <div class="menu__item">
                        <a href="#">
                            <div>会社概要</div>
                            <div>></div>
                        </a>
                    </div>
                    <div class="menu__item">
                        <a href="#">
                            <div>よくある質問</div>
                            <div>></div>
                        </a>
                    </div>
                </div>
                <div class="hb_footer">
                    <div class="hb_tel">
                        <img src="<?php echo esc_url(get_theme_file_uri('images/tel_mark.png')); ?>">
                        <a href="tel:0120-123-4568">0120-123-4568</a>
                    </div>
                    <div class="hb_inquiry">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                            <div class="inquiry_box">
                                お問い合わせ
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="navi_area">
            <li class="navi">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hover">
                    <h3 class="nani_ja">ホーム</h3>
                    <p class="navi_en">HOME</p>
                </a>
            </li>
            <li class="navi">
                <a href="#" class="hover">
                    <h3 class="nani_ja">事業内容</h3>
                    <p class="navi_en">BUSINESS</p>
                </a>
            </li>
            <li class="navi">
                <a href="#" class="hover">
                    <h3 class="nani_ja">補助金・助成金を探す</h3>
                    <p class="navi_en">SUBSIDY</p>
                </a>
            </li>
            <li class="navi">
                <a href="#" class="hover">
                    <h3 class="nani_ja">サービス実例</h3>
                    <p class="navi_en">SERVICE</p>
                </a>
            </li>
            <li class="navi">
                <a href="#" class="hover">
                    <h3 class="nani_ja">会社概要</h3>
                    <p class="navi_en">COMPANY</p>
                </a>
            </li>
            <li class="navi">
                <a href="#" class="hover">
                    <h3 class="nani_ja">よくある質問</h3>
                    <p class="navi_en">FAQ</p>
                </a>
            </li>
        </ul>