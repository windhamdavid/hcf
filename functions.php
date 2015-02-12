<?php

add_action( 'after_setup_theme', 'hcf_setup' );
function hcf_setup() {

	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 700;
	add_editor_style();
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	register_nav_menus( array(
			'primary' => __( 'Footer Navigation', 'hcf' )
		) );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured' , 700, 300, true );
	add_image_size( 'home-thumbnail' , 220, 150, true );
	add_image_size( 'single-thumbnail' , 700, 350, true );

	add_action( 'wp_enqueue_scripts', 'hcf_enqueue_scripts' );
	add_action( 'wp_print_styles', 'hcf_deregister_styles', 100 );
	add_action( 'comment_form_before', 'hcf_enqueue_comment_reply_script' );
	add_filter( 'use_default_gallery_style', '__return_false' );
	add_filter( 'wp_title', 'hcf_title', 10, 2 );
}


function hcf_enqueue_scripts() {
	global $post;
	wp_enqueue_style( 'hcf-fonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic|Oswald:300', '', '1.0', 'all' );
	wp_enqueue_style( 'hcf-style', get_stylesheet_uri(), false, '1.2', 'all' );
	wp_enqueue_script( 'jquery' );
	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'hcf-keyboard-image-navigation', get_template_directory_uri() . '/js/vendor/keyboard-image-navigation.js', array( 'jquery' ), '1.0' );
	}
	wp_enqueue_script( 'hcf-plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'hcf-methods', get_template_directory_uri() . '/js/methods.js', array( 'jquery' ), '1.0', true );
}

function hcf_deregister_styles() {
	wp_deregister_style( 'wp-pagenavi' );
}

function hcf_enqueue_comment_reply_script() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function hcf_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'foto' ), max( $paged, $page ) );

	return $title;
}


function hcf_enhanced_image_navigation( $url, $id ) {
	if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
		return $url;

	$image = get_post( $id );
	if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
		$url .= '#main';

	return $url;
}


function foto_widgets_init() {
	
	register_widget( 'foto_author_bio' );
	
    register_sidebar(array(
		'name'          => __( 'Home Widget', 'foto'),
		'description'   => __( 'This sidebar appears on the right side of your site on home page', 'foto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	));
	
	register_sidebar(array(
		'name'          => __( 'Footer Left Widget', 'foto'),
		'description'   => __( 'This sidebar appears on the footer of your site', 'foto' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	));
	
	register_sidebar(array(
		'name'          => __( 'Footer Center Widget', 'foto'),
		'description'   => __('This sidebar appears on the footer of your site', 'foto'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	));
	
	register_sidebar(array(
		'name'          => __( 'Footer Right Widget', 'foto'),
		'description'   => __('This sidebar appears on the footer of your site', 'foto'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	));
	
	register_sidebar(array(
		'name'          => __( 'Page Widget', 'foto'),
		'description'   => __('This sidebar appears on the footer of your site', 'foto'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	));
	
}
?>