<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />
				
	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
	
	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-icon.png" />
	
	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/images/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
	
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<!-- Start the main container -->
	<div id="container" class="container" role="document">
	
	<header class="row">
	
	<img class="twelve columns text-center" src="http://images.alertsforallergies.com/header-alerts.png" alt="Alerts for Allergies"></header>
		
		<!-- Row for blog navigation -->
	<div class="row">
    <nav class=" pretty navbar clearfix" id="basicnav">
      <a href="#" class="toggle" data-for="#basicnav > ul"><img src="http://images.alertsforallergies.com/icon_nav_toggle.gif" /></a>
    	<ul>
    		<li><a href="/index.php">Home</a></li>
    		<li><a href="/products">Products</a>
    			<div class="dropdown">
    				<ul>
    					<li><a href="#">Lunch Bags</a></li>
    					<li><a href="#">Tattoos</a></li>
    					<li><a href="#">Chef Cards</a></li>
    					<li><a href="#">Stickers</a></li>
    					<li><a href="#">Signs</a></li>
    				</ul>
    			</div>
    		</li>
    		<li><a href="/blog">Blog</a></li>
    		<li><a href="/contact">Contact</a></li>
    		<li><a href="/about">About</a></li>
    		<li><a href="resources">Resources</a></li>
    		<li>
      		<div class="field">
      			<p class="text search oval"><input type="search" placeholder="Search" /></p>
      		</div>
    		</li>
    	</ul>
    </nav>
  </div>

		
		<!-- Row for main content area -->
		<div id="main" class="row">