<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php hcf_page_title(); ?></title>
<meta name="description" content="<?php hcf_meta_desc();?>"/>
<?php wp_head(); ?>
</head>
<body id="page-top" class="index hfeed">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</button>
				<div class="top-tom">
					<img src="<?php echo get_template_directory_uri();?>/img/tom.png" width="100" alt="Holy City Farms"/>
				</div>
				<div class="navbar-brand">
					<a class="page-scroll" href="<?php echo home_url( '/' ); ?>">Holy City Farms</a>
					<p class="location"><a class="page-scroll" href="#page-top">Wadmalaw Island <span class="star"> &#9733; </span> South Carolina</a></p>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
			</div>
		</div>
	</nav>

	<section class="header-text">
		
	</section>
