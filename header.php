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
<body <?php body_class(); ?> >
	<div id="container" class="animated fadeIn ">
		
		<header class="header" role="banner">
			<div id="inner-header" class="wrap cf">
				<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
				<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><svg version="1.1" id="rv_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 130 130" enable-background="new 0 0 130 130" xml:space="preserve">
					<polygon fill="#D3D3D3" points="39.9,24.7 38.8,24.7 13.7,24.7 52.6,108.1 75.8,108.1 116.4,26 92.3,26 65,84.5 47,42.8 47,42.8
					67,42.7 75.8,24.7 49.9,24.7 "/>
				</svg></a></p>
				<?php // if you'd like to use the site description you can un-comment it below ?>
				<?php // bloginfo('description'); ?>
				
				<div class="menu-button">Menu</div>
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
			<?php  if ( !is_page('Work') ) { ?>
			<div class="page-title-section animated fadeInDown">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</div>
			
			<?php  }  else { ?>
			<?php  } ?>
			<?php  if ( is_page('Work') ) { ?>
			<div class="home-logo ">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
				<polygon fill="#FFFFFF" points="201.6,138.6 199.7,138.6 157.6,138.6 222.9,278.6 261.8,278.6 330,140.8 289.6,140.8 243.8,238.9
				213.6,168.9 213.6,168.9 247.1,168.9 261.8,138.6 218.4,138.6 "/>
				<g>
				<path fill="#FFFFFF" d="M23.1,330c1.2,0,3,0.1,4.4,1c1.1,0.7,2,2.1,2,4c0,2.7-1.8,4.8-4.5,5l5.7,8h-2.4l-5.5-7.9h-0.5v7.9h-2v-18
				H23.1z M22.3,338.4h1.3c2.5,0,4-1.2,4-3.3c0-1-0.3-2-1.4-2.6c-0.8-0.5-1.7-0.5-2.6-0.5h-1.2V338.4z"/>
				<path fill="#FFFFFF" d="M54.4,339c0-5.4,4.2-9.3,9.4-9.3s9.4,3.9,9.4,9.3c0,5.3-4.1,9.3-9.4,9.3C58.5,348.3,54.4,344.4,54.4,339z
				M56.4,339c0,4.1,3.3,7.4,7.3,7.4c4,0,7.3-3.3,7.3-7.4s-3.3-7.4-7.3-7.4C59.7,331.6,56.4,334.9,56.4,339z"/>
				<path fill="#FFFFFF" d="M98.3,348v-18.7l14,14.7V330h2v18.8l-14-14.7V348H98.3z"/>
				<path fill="#FFFFFF" d="M150.4,342.9h-7.7l-2.2,5.1h-2.2l8.3-18.8l8.1,18.8h-2.2L150.4,342.9z M149.7,341l-3-7.2l-3.1,7.2H149.7z"
				/>
				<path fill="#FFFFFF" d="M178.9,348v-18.7l14,14.7V330h2v18.8l-14-14.7V348H178.9z"/>
				<path fill="#FFFFFF" d="M221.2,330l5.1,13.7l5.1-13.7h2.2l-7.3,19.1L219,330H221.2z"/>
				<path fill="#FFFFFF" d="M266.1,342.9h-7.7l-2.2,5.1h-2.2l8.3-18.8l8.1,18.8h-2.2L266.1,342.9z M265.4,341l-3-7.2l-3.1,7.2H265.4z"
				/>
				<path fill="#FFFFFF" d="M296.5,330v16.1h5v1.9h-7v-18H296.5z"/>
				<path fill="#FFFFFF" d="M327.8,330v16.1h5v1.9h-7v-18H327.8z"/>
				<path fill="#FFFFFF" d="M366.3,331.9H359v5.3h7.1v1.9H359v7h7.3v1.9H357v-18h9.3V331.9z"/>
				<path fill="#FFFFFF" d="M393.5,330v16.1h5v1.9h-7v-18H393.5z"/>
				<path fill="#FFFFFF" d="M424.7,330v16.1h5v1.9h-7v-18H424.7z"/>
				<path fill="#FFFFFF" d="M456.8,340.3l-5.9-10.2h2.3l4.6,8l4.6-8h2.3l-6,10.2v7.7h-2V340.3z"/>
				</g>
				</svg>
			</div>
			<?php  }  else { ?>
			<div class="text-center cf">
				<p class="intro-page">
				My name is  Ronan Vallelly,  a visual designer and front end
				developer currently living in Glasgow. I love to code, design stuff and occasionally spin records. I craft beautiful, functional and simple experiences for web and mobile.
				</p>
				<?php  if ( is_page('Me') ) { ?>
				<div class="me">
					<img src="http://localhost/iamronan_redesign/wordpress/wp-content/uploads/2014/07/me.png"/>
				</div>
				<?php  } elseif ( is_page('Contact') ) { ?>
				<?php  } else { ?>
				<?php  } ?>
			</div>
			<?php  } ?>
			
			<?php  if ( is_page('Work') ) { ?>
			<p class="intro-text animated fadeInLeftBig">
			My name is <span> Ronan Vallelly </span>,  a visual designer and front end
			developer currently living in Glasgow. I love to code, design stuff and occasionally spin records. I craft beautiful, functional and simple experiences for web and mobile. Feel free to check out some of my <span> recent work </span>  below.
			</p>
			<?php  } elseif ( is_page('Contact') ) { ?>
		
			<?php  } else { ?>
			<?php  } ?>
			
			<div class="scroll-down"> <a href="#content"> <i class="fa fa-angle-down"></i> </a></div>
		</header>