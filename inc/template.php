<?php

if ( ! function_exists( 'hcf_meta_desc') ) :
function dw_meta_desc() {
	global $post; 
	$post = get_post( $post );
	setup_postdata( $post );
	if ( is_single() || is_page() ) {
		$meta_desc_value = get_post_meta( $post->ID, 'meta-desc', true );
		if ( $meta_desc_value !== '') {
			echo $meta_desc_value; 
		}
		elseif ( $meta_desc_value == '') {
			$meta_excerpt = dw_good_excerpt(115);
			echo $meta_excerpt;
		}
	}
}
endif;

if ( ! function_exists( 'hcf_good_excerpt') ) :
function hcf_good_excerpt($length) { 
	global $post;
	$text = $post->post_excerpt;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
	}
	$text = strip_shortcodes($text);
	$text = strip_tags($text);
	$text = substr($text,0,$length);
	if ( strlen($text) < 15 ) {
		$text = the_title('', ' - ', false);
	}
	$allowed_end = array('.', '!', '?', '...');
	$excerpt = reverse_strrchr($text, '.', 2);
	if( $excerpt ) {
		echo apply_filters('get_the_excerpt',$excerpt);
	} else {
		echo apply_filters('get_the_excerpt',$text);
	}
}
function reverse_strrchr($haystack, $needle, $trail) {
    return strrpos($haystack, $needle) ? substr($haystack, 0, strrpos($haystack, $needle) + $trail) : false;
}
endif;

if ( ! function_exists( 'hcf_excerpt') ) :
function hcf_excerpt($count){
	$permalink = get_permalink($post->ID);
	$excerpt = get_the_content();
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $count);
	$excerpt = $excerpt.'... <a href="'.$permalink.'">more</a>';
	return $excerpt;
}
endif;