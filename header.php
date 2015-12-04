<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php // wp_head(); // wordpress head functions ?>

		<link href="<?php theHTML5BoilerplateDirectory(); ?>css/normalize.css" rel="stylesheet">
		<link href="<?php theSkeletonDirectory(); ?>css/skeleton.css" rel="stylesheet">
		<link href="<?php theActiveThemeDirectory(); ?>css/main.css" rel="stylesheet">
		<link href="<?php theFontAwesomeDirectory(); ?>css/font-awesome.min.css" rel="stylesheet">

		<script src="<?php theHTML5BoilerplateDirectory(); ?>js/vendor/modernizr-2.8.3.min.js"></script>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<div class="nav-bar">
			<div class="container">
				<div class="row">
					<div class="three columns">
						<div class="logo"></div>
						<div class="home"><a href="<?php echo site_url(); ?>">Metod</a></div>
					</div>
					<nav class="nine columns">
						<ul class="u-pull-right">
							<?php
								// get all the pages from 'main' category
								$main_pages = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'main', 'posts_per_page' => 200 ) );

								foreach($main_pages as $main_page) // for each school within schools
								{
									
									$main_URL = get_page_link($main_page->ID);
									$main_name = $main_page->post_title;
									// showMeTheGoods($school_name);
									echo '<li><a href="' . $main_URL . '">' . $main_name . '</a></li>';
								}	
							?>
				            <li><a href="#me">Me</a></li>
				        </ul>
			        </nav>
					<a class="hamburger">+</a>
				</div>
			</div>
		</div>
