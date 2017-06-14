<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php bloginfo('description');?> | <?php bloginfo('name');?>
		</title>
		<!--Begin the stylesheets-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/contact.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/flexslider.css" />
		
		<!--End the stylesheets-->
		
		<!--Meta info-->
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="<? echo get_the_excerpt();?>"/>
		<!--End meta-->
		
		<!--Begin scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet"> 
		<!--End scripts-->
		
		<!-- Begin Flex Slider -->
		<script type="text/javascript" charset="utf-8">
  		$(window).load(function() { // enable upon window load
   		$('.flexslider').flexslider();
		});// call the flexslider function
		</script>
		<!--End responsive nav-->
		
		<!--WP head function-->
		<?php wp_head();?>
		<!-- End the WP head function-->
		
	</head>
	<body <?php body_class(); ?>>
    <div class="site">
		<header>
			<h1 class="logo"><a href="<?php echo get_settings('home');?>">Megan McKinley</a></h1>
		</header>
		
		<!--Begin the WP menu-->
<div id="main-nav">
    <?php wp_nav_menu(array('theme_location' => 'main', 'container' => '')); ?>
</div>
		
<small>header.php</small>
<div id="content">