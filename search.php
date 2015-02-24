<?php get_header(); ?>

		<section id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>


			<?php else : ?>

				<?php get_template_part( 'no-results', 'search' ); ?>

			<?php endif; ?>

		</section>

<?php get_footer(); ?>