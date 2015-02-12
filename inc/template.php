<?php

if ( ! function_exists( 'hcf_page_title') ) :
function hcf_page_title() {
	global $page, $paged; 
	wp_title( '|', true, 'right' ); 
	bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'hcf' ), max( $paged, $page ) );
}
endif;

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

if ( ! function_exists( 'hcf_paging_nav' ) ) :
function hcf_paging_nav() {
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 1,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; &nbsp;', 'dw' ),
		'next_text' => __( '&nbsp; &rarr;', 'dw' ),
	) );

	if ( $links ) :

	?>
	<nav class="navigation pagination paging-navigation" role="navigation">
		<div class="pagination loop-pagination">
			<?php echo $links; ?>
		</div>
	</nav>
	<?php
	endif;
}
endif;