<?php /* Template Name: Growing Soon */ ?>

<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="favicon.ico">
<title><?php wp_title(); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed container">
	<?php do_action( 'foto_before' ); ?>
	
	<header id="masthead" class="site-header clearfix" role="banner">
	
		<div class="site-branding col-16">
			<?php if( of_get_option('foto_custom_logo') ) :
					
				$logotag  = (is_home() || is_front_page())? 'h1':'div';?>
					<<?php echo $logotag; ?> class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img alt="<?php bloginfo('name'); ?>" src="<?php echo esc_url( of_get_option('foto_custom_logo') ); ?>"><span><?php bloginfo('name'); ?></span></a></<?php echo $logotag; ?>>
				<?php
				
			else :
			
				$titletag  = (is_home() || is_front_page())? 'h1':'div'; // only display h1 tag on home page, SEO reason ?>
					<<?php echo $titletag; ?> class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></<?php echo $titletag; ?>>
					<div class="site-tagline"><?php bloginfo( 'description' ); ?></div>
					
			<?php endif; ?>
		</div><!-- end .site-branding -->
			
		
		<?php do_action( 'foto_header' ); ?>
		
	</header><!-- #masthead .site-header -->
	
	<?php do_action( 'foto_after_header' ); ?>
	
	<section class="header-text">
	<br /><br /><br /><br />
		<?php 
			$tag  	= ( is_home() || is_front_page() )? 'p':'h1'; 
			$class  = ( is_singular() )? 'entry-title':'page-title'; 
		?>
		<<?php echo $tag; ?> class="<?php echo $class; ?> col-18">
			<?php foto_page_title(); ?>
		</<?php echo $tag; ?>>
		
	</section><!-- end .header-text -->
	
	<?php do_action( 'foto_before_main' ); ?>
	
	<div id="main" class="main-content clearfix">
		
		<?php do_action( 'foto_main' ); ?>
		<?php do_action( 'foto_before_content_page' ); ?>
		<img src="http://www.holycityfarms.com/wp-content/uploads/2013/10/growing-soon.jpg" title="Holy City Farms - Growing Soon"atl="Holy City Farms - Growing Soon">
		<section id="content" class="site-content" role="main">
			<?php do_action( 'foto_before_article_page' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<br /><br /><br /><br />
				<?php get_template_part( 'content', 'page' ); ?>
				
				<br /><br />
					<div class="facebook-widg" style="float:left; width:400px;margin:20px;">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHoly-City-Farms-LLC%2F353401847244&amp;width=650&amp;height=300&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:650px; height:300px;" allowTransparency="true"></iframe>
					</div>
					
					<div class="twitter-widg" style="float:right; width:400px;max-height:300px;margin:20px;">
						<a class="twitter-timeline" href="https://twitter.com/HolyCityFarms" data-widget-id="386520590795825152">Tweets by @HolyCityFarms</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
			<?php do_action( 'foto_after_article_page' ); ?>
		</section><!-- end #content .site-content -->
		<?php do_action( 'foto_after_content_page' ); ?>
	</div><!-- #main -->
	
	<?php do_action( 'foto_after_main' ); ?>
	
	<?php get_sidebar('footer'); ?>
	
	<?php do_action( 'foto_after_footer' ); ?>
	
	<div id="site-credit" class="site-info clearfix">
		<div class="credits col-8">
			<img src="http://www.holycityfarms.com/wp-content/uploads/2013/10/holycityfarmstom.png" style="float:left;margin:0 10px 0 0;"width="40" title="Holy City Farms" alt="Holy City Farms">
			<p>&copy; Copyright <?php echo date('Y'); ?> &nbsp;<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></p>
			<p>Wadmalaw Island, South Carolina</p>
		</div>

		<div class="col-16 last">
			<div class="site-social">
				<?php if( of_get_option('foto_rss_custom') ) { ?>
					<span class="feed"><a href="<?php echo esc_url( of_get_option('foto_rss_custom') ); ?>" title="<?php esc_attr_e('Subscribe our rss feed', 'foto'); ?>"><?php _e('Rss Feed', 'foto'); ?></a></span>
				<?php } else { ?>
					<!--<span class="feed"><a href="<?php echo get_feed_link( 'rss2' ); ?>" title="<?php esc_attr_e('Subscribe our rss feed', 'foto'); ?>"><?php _e('Rss Feed', 'foto'); ?></a></span>-->
				<?php }
				
				if( of_get_option('foto_gplus_username') ) { ?>
					<span class="gplus"><a href="<?php echo esc_url( of_get_option('foto_gplus_username') ); ?>" title="<?php esc_attr_e('Add me to your circle', 'foto'); ?>"><?php _e('Google Plus', 'foto'); ?></a></span>
				<?php } if( of_get_option('foto_fb_username') ) { ?>
					<span class="fb"><a href="<?php echo esc_url( of_get_option('foto_fb_username') ); ?>" title="<?php esc_attr_e('Add me as your friend', 'foto'); ?>"><?php _e('Facebook', 'foto'); ?></a></span>
				<?php } if( of_get_option('foto_twitter_username') ) { ?>
					<span class="tw"><a href="<?php echo esc_url( of_get_option('foto_twitter_username') ); ?>" title="<?php esc_attr_e('Follow Me', 'foto'); ?>"><?php _e('Twitter', 'foto'); ?></a></span>
				<?php } ?>
			</div><!-- end .site-social -->
		</div><!-- end .header-right-area -->
	</div><!-- end #site-credit .site-info -->
	
	<?php do_action( 'foto_after' ); ?>
</div><!-- end #page .hfeed -->

<?php wp_footer(); ?>

</body>
</html>