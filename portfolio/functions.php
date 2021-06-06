<?php 
function custom_theme_setup(){
    //head内にフィールドリンクを出力
    add_theme_support('automatic-feed-links');
    //タイトルタグを動的に出力
    add_theme_support('title-tag');
}
//ウィジット
function portfolio_widgets() {

	register_sidebar(
		array(
			'name'          => 'sidebar1',
			'id'            => 'widget_area',
			'before_widget' => '<div class="category">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar_title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => 'sidebar2',
			'id'            => 'search_area',
			'before_widget' => '<div class="category">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="sidebar_title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'portfolio_widgets' );
//サムネイル
add_action('init',function(){
	add_theme_support('post-thumbnails');
	
});