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
	
	 <!--Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>
  
  <!--Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

	
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
	<link href='http://fonts.googleapis.com/css?family=Marmelad' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<!-- Start the main container -->
	<div id="container" class="container" role="document">
	
<header>
	<div class="row clearfix">
	<img class="sixteen columns header" src="http://images.alertsforallergies.com/alerts-header.png" alt="Alerts for Allergies"/>
	</div>	

		<!-- Row for blog navigation -->
	<div class="row">
    <nav class="navbar clearfix" id="basicnav">
      <a href="#" class="toggle" data-for="#basicnav > ul"><img src="http://images.alertsforallergies.com/icon_nav_toggle.gif" /></a>
    	<ul>
    		<li><a href="/index.php">Home</a></li>
    		<li><a href="/products">Products</a>
    			<div class="dropdown">
    				<ul>
    					<li><a href="/products/stickers">Stickers</a></li>
    					<li><a href="/products/lunch-bags">Lunch Bags</a></li>
    					<li><a href="/products/chef-cards">Chef Cards</a></li>
    					<li><a href="/products/tattoos">Tattoos</a></li>
    					<li><a href="/products/signs">Signs</a></li>
    				</ul>
    			</div>
    		</li>
    		<li><a href="/blog">Blog</a></li>
    		<li><a href="/contact">Contact</a></li>
    		<li><a href="/about">About</a></li>
    		<li><a href="/faqs">FAQ's</a></li>
    	<!--<li>
      		<div class="social-icons"><a href="http://www.facebook.com/alertsforallergies/"><img title="Facebook social icon" src="http://www.peanutfreezone.com/wp-content/uploads/facebook-logo-webtreatsetc-150x150.png" alt="Facebook social icon" width="40" height="40" /></a>

<a href="http://www.alertsforallergies.com/feed"><img title="rss " src="http://www.peanutfreezone.com/wp-content/uploads/rss-basic-webtreatsetc-150x150.png" alt="Really Simple Syndicate" width="40" height="40" /></a>

<a href="mailto:stacey@alertsforallergies.com"><img title="mail" src="http://www.peanutfreezone.com/wp-content/uploads/mail-webtreatsetc-150x150.png" alt="Email social icon" width="40" height="40" /></a>
      		</div>
      		</li>-->
    	</ul>
    </nav>
  </div>
</header>



		
		<!-- Row for main content area -->
		<div id="main" class="row">