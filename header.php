<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(''); ?></title>
	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>
	<?php // drop Google Analytics Here ?>
	<?php // end analytics ?>
	<script type="text/javascript" src="//use.typekit.net/lra5yib.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body <?php body_class(); ?>>

	
	<div id="container" class="animated fadeIn ">
		
		<!-- header section including small logo & menu -->
		<header class="header" role="banner">

			<div id="inner-header" class="wrap cf">
				<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
				<a href="<?php bloginfo('url'); ?>" rel="nofollow"><p id="logo" class="h1"></p> </a>
				<?php // if you'd like to use the site description you can un-comment it below ?>
				<?php // bloginfo('description'); ?>
				
				<div class="menu-button animated fadeInDown">Menu</div>
				<nav role="navigation">
					<?php wp_nav_menu(array(
					'container' => false,                           // remove nav container
					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
					'menu_class' => 'nav top-nav flexnav cf',               // adding custom nav class
					'theme_location' => 'main-nav',                 // where it's located in the theme
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '',                             // after each link
					'depth' => 0,                                   // limit the depth of the nav
					'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>
				</nav>
			</div>

			<!-- page title -->
			<div class="page-title-section animated fadeInDown">
				<?php if(is_page('Work')):?>
				
				<?php elseif (is_home('Journal')):?>
				<h1 class="page-title">Journal</h1>
				<?php elseif (is_page('Me')):?>
				<h1 class="page-title">Me</h1>
				<?php elseif (is_page('Services')):?>
				<h1 class="page-title">Services</h1>
				<?php else:?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php endif;?>
			</div>
			
		<!-- 	main svg logo with png fallback -->
			<?php  if ( is_page('Work') ) :?>
			<div class="home-logo ">

				<div class="icon-iamronan">
			    </div>		
		
			</div>

           <div>

			<p class="mobile-text">
			Hi! My name is <span> Ronan Vallelly </span>,  a digital designer and front end
			developer currently living in Glasgow. I craft beautiful, functional and simple experiences for web and mobile. Feel free to check out some of my <span> recent work </span>  below.
			</p>

          <!--   header info -->

			<?php elseif (is_page('Me')):?>
			<div class="text-center cf">
				<p class="intro-page ">
				Hi I'm Ronan Vallelly,  a coffee loving digital designer and front end developer based in Glasgow. Currently crafting pixels at Traffic Design Consultants. You can ind my full profile below.
				</p>
				<div class="me">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/me.png"/>
				</div>
				<?php elseif (is_home('Journal')):?>
				<div class="text-center cf">
					<p class="intro-page ">
					Ocassional ramblings, tutorials and articles on all things digital. May include a recipe or two, photos of my pet greyhound and food selfies - if your lucky. Opinions my own.
					</p>
				</div>
				<?php elseif (is_single()):?>
				<div class="text-center cf">
					<p class="intro-page ">
					Ocassional ramblings, tutorials and articles on all things digital. May include a recipe or two, photos of my pet greyhound and food selfies - if your lucky. Opinions my own.
					</p>
				</div>
				<?php elseif (is_page('Services')):?>
				
				<div class="text-center cf">
					<p class="intro-page ">
					With expereince in both  design and digital, I can offer you and your business a variety of services. Wether it's a new logo, responsive website or the full branding package, I can help. For a full list of my services please see below.
					</p>
				
				<?php elseif (is_page('Traffic')):?>
				<div class="text-center web-header animated fadeIn cf">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/traffic-design-case-study.png" class="case-study-header">
				</div>
				<?php elseif (is_page('Our Haus')):?>
				<div class="text-center web-header animated fadeIn cf">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/our-haus-case-study.png" class="case-study-header">
				</div>
				<?php elseif (is_page('Urbancroft')):?>
				<div class="text-center web-header animated fadeIn cf">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/urbancroft-case-study.png" class="case-study-header">
				</div>
				<?php elseif (is_page('Ardardan')):?>
				<div class="text-center web-header animated fadeIn cf">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/ardardan-case-study.png" class="case-study-header">
				</div>
				<?php elseif (is_page('Leith')):?>
				<div class="text-center web-header animated fadeIn cf">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/leith-case-study.png" class="case-study-header">
				</div>
				<?php elseif (is_page('Safe & Sound')):?>
				<div class="text-center web-header animated fadeIn cf">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/safe-case-study.png" class="case-study-header">
				</div>
				<?php else:?>
				
				<?php endif;?>
			</div>
			
		<!-- animated info on home page -->
			
			<?php  if ( is_page('Work') ) { ?>
			<p class="intro-text animated fadeInLeftBig">
			My name is <span> Ronan Vallelly </span>,  a visual designer and front end
			developer currently living in Glasgow. I love to code, design stuff and occasionally spin records. I craft beautiful, functional and simple experiences for web and mobile. Feel free to check out some of my <span> recent work </span>  below.
			</p>
			<?php  } elseif ( is_page('Contact') ) { ?>
			
			<?php  } else { ?>
			<?php  } ?>
			
		  <div class="scroll-down  animated bounce"> <a href="#content"> <i class="fa fa-angle-down"></i> </a></div>


		</header>