<?php

add_action( 'after_setup_theme', 'hcf_setup' );
function hcf_setup() {
	require( get_template_directory() . '/inc/utils.php' );
	require( get_template_directory() . '/inc/template.php' );
	require( get_template_directory() . '/inc/tweaks.php' );
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
}

function hcf_enqueue_scripts() {
	global $post;
	wp_enqueue_style( 'font', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic|Oswald:300', '', '1.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'boot', get_template_directory_uri() . '/css/bootstrap.css');
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), false, true);
	wp_enqueue_script( 'boot', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '', true );
	//wp_enqueue_script( 'hcf-plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '1.0', true );
	//wp_enqueue_script( 'hcf-methods', get_template_directory_uri() . '/js/methods.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', 'jquery', '', true );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js', 'jquery', '', true );
	
	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'hcf-keyboard-image-navigation', get_template_directory_uri() . '/js/vendor/keyboard-image-navigation.js', array( 'jquery' ), '1.0' );
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action('wp_footer', 'hcf_html5shim', 21);
function dw_html5shim() { ?>
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri() . '/js/html5shiv.min.js'?>"></script><![endif]-->
<?php }

function hcf_enhanced_image_navigation( $url, $id ) {
	if ( ! is_attachment() && ! wp_attachment_is_image( $id ) )
		return $url;
	$image = get_post( $id );
	if ( ! empty( $image->post_parent ) && $image->post_parent != $id )
	$url .= '#main';
		return $url;
}
?>