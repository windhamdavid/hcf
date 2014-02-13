
	<article id="post-<?php the_ID(); ?>" <?php post_class('page-content'); ?>>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'foto' ), 'after' => '</div>' ) ); ?>
			<?php edit_post_link( __( 'Edit', 'foto' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-content -->
		
	</article><!-- #post-<?php the_ID(); ?> -->
