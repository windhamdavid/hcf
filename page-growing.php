<?php /* Template Name: Growing Soon */ ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php hcf_page_title(); ?></title>
<meta name="description" content="Holy City Farms - Wadmalaw Island, South Carolina"/>
<link rel="shortcut icon" href="favicon.ico?v4">
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
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
					<a class="page-scroll" href="#page-top">Holy City Farms</a>
					<p class="location"><a class="page-scroll" href="#page-top">Wadmalaw Island <span class="star"> &#9733; </span> South Carolina</a></p>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="#intro">Farm</a></li>
					<li><a class="page-scroll" href="#portfolio">Tomatoes</a></li>
					<li><a class="page-scroll" href="#about">About</a></li>
					<li><a class="page-scroll" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<header>
		<div class="container">
			<div class="intro-text">	
				<div class="intro-lead-in">Local, Year Round,</div>
				<img src="<?php echo get_template_directory_uri();?>/img/hcf.png" width="400" alt="Holy City Farms"/>
				<div class="intro-heading">and Delicious!</div>
				<!--<a href="#intro" class="page-scroll btn btn-xl">Call to Action</a>-->
			</div>
		</div>
	</header>

	<section class="header-text">
		
	</section>

<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Our Philosopy</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-6 col-md-offset-3">
					<span class="fa-stack fa-4x">
						<i class="fa fa-circle fa-stack-2x text-primary"></i>
						<i class="fa fa-rocket fa-stack-1x fa-inverse"></i>
					</span>
				<h4 class="service-heading">Hydroponic Farming</h4>
				<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
			</div>
		</div>
	</div>
</section>

<section id="portfolio" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-offset-3 text-center">
				<h2 class="section-heading">Tomatoes</h2>
				<h3 class="section-subheading text-muted">The earliest reference to tomatoes being grown in North America is from 1710, when herbalist William Salmon reported seeing them in what is today South Carolina.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#Modal1" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
						<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri();?>/img/toms1.jpg" class="img-responsive" alt="Tomato"/>
				</a>
				<div class="portfolio-caption">
					<h4>Title</h4>
					<p class="text-muted">Description</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#Modal2" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri();?>/img/toms2.jpg" class="img-responsive" alt="Tomato"/>
				</a>
				<div class="portfolio-caption">
					<h4>Title</h4>
					<p class="text-muted">Description</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#Modal3" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri();?>/img/toms3.jpg" class="img-responsive" alt="Tomato"/>
				</a>
				<div class="portfolio-caption">
					<h4>Title</h4>
					<p class="text-muted">Description</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#Modal1" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri();?>/img/toms4.jpg" class="img-responsive" alt="Tomato"/>
				</a>
				<div class="portfolio-caption">
					<h4>Title</h4>
					<p class="text-muted">Description</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#Modal2" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri();?>/img/toms5.jpg" class="img-responsive" alt="Tomato"/>
				</a>
				<div class="portfolio-caption">
					<h4>Title</h4>
					<p class="text-muted">Description</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="#Modal3" class="portfolio-link" data-toggle="modal">
					<div class="portfolio-hover">
						<div class="portfolio-hover-content">
							<i class="fa fa-plus fa-3x"></i>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri();?>/img/toms6.jpg" class="img-responsive" alt="Tomato"/>
				</a>
				<div class="portfolio-caption">
					<h4>Title</h4>
					<p class="text-muted">Description</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">About Us</h2>
				<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="team-member">
					<img src="<?php echo get_template_directory_uri();?>/img/elizabeth.jpg" class="img-responsive img-circle" alt="Elizabeth Ransford"/>
					<h4>Elizabeth Ransford</h4>
					<p class="text-muted">A Short Description</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="team-member">
					<img src="<?php echo get_template_directory_uri();?>/img/shawn-web.jpg" class="img-responsive img-circle" alt="Shawn Ransford"/>
					<h4>Shawn Ransford</h4>
					<p class="text-muted">CTE - Chief Tomato Engineer</p>
					<ul class="list-inline social-buttons">
						<li class="fb"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="twit"><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class="plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="team-member">
					<img src="<?php echo get_template_directory_uri();?>/img/staff.jpg" class="img-responsive img-circle" alt="Staff"/>
					<h4>Support Staff</h4>
					<p class="text-muted">A Short Description</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 text-center">
				<p class="large text-muted">Holy City Farms is a family owned and operated farm. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
			</div>
		</div>
	</div>
</section>

<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Contact</h2>
				<h4 class="text-muted">We sell our tomatoes at these locations: Lorem ipsum dolor sit amet consectetur.</h3>
				<h4 class="text-muted">Phone: (843) 670-2516</h3>
				<h4 class="section-subheading text-muted">Email: shawn@holycityfarms.com</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name *" id="name" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" placeholder="Website *" id="phone" required data-validation-required-message="Please enter a URL.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button type="submit" class="btn btn-xl">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<aside class="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="facebook-widg" style="width:90%;height:500px;margin:20px;">
					<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHoly-City-Farms-LLC%2F353401847244&amp;width=650&amp;height=500&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:650px; height:500px;" allowTransparency="true"></iframe>
				</div>
			</div>
			<div class="col-md-6">
				<div class="twitter-widg" style="width:90%;height:500px;margin:20px;">
					<a class="twitter-timeline" href="https://twitter.com/HolyCityFarms" data-widget-id="386520590795825152">Tweets by @HolyCityFarms</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
		</div>

	</div>
</aside>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<span class="copyright">&copy; </span>
			</div>
			<div class="col-md-4">

			</div>
			<div class="col-md-4">
				<div class="footer-brand">
					<a class="page-scroll" href="#page-top">Holy City Farms</a>
					<p class="location"><a class="page-scroll" href="#page-top">Wadmalaw Island <span class="star"> &#9733; </span> South Carolina</a></p>
				</div>
			</div>
		</div>
	</div>
</footer>

<div class="portfolio-modal modal fade" id="Modal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal">
			<div class="lr"><div class="rl"></div></div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Title</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img src="<?php echo get_template_directory_uri();?>/img/toms1.jpg" class="img-responsive" alt="Tomato"/>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
						<ul class="list-inline">
							<li>List Item</li>
							<li>List Item</li>
							<li>List Item</li>
						</ul>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="portfolio-modal modal fade" id="Modal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal"><div class="lr"><div class="rl"></div></div></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Title</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img src="<?php echo get_template_directory_uri();?>/img/toms2.jpg" class="img-responsive" alt="Tomato"/>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="portfolio-modal modal fade" id="Modal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
		<div class="close-modal" data-dismiss="modal"><div class="lr"><div class="rl"></div></div></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="modal-body">
						<h2>Title</h2>
						<p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
						<img src="<?php echo get_template_directory_uri();?>/img/toms3.jpg" class="img-responsive" alt="Tomato"/>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>