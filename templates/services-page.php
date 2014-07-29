<?php
/*
Template Name: Services
*
* This is your custom page template. You can create as many of these as you need.
* Simply name is "page-whatever.php" and in add the "Template Name" title at the
* top, the same way it is here.
*
* When you create your page, you can just select the template and viola, you have
* a custom page template to call your very own. Your mother would be so proud.
*
* For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap cf">
		<div id="main" class="m-all t-3of3 d-7f7 cf " role="main">
			<ul class="m-all t-all l-all cf grid icons">
				<li class="m-all t-1of3 d-1of3 wow animated fadeInRight">
					<img src="http://localhost/iamronan_redesign/wordpress/wp-content/uploads/2014/07/coffee.png">
					<h2> Branding <h2>
				</li>
				<li class="m-all t-1of3 d-1of3 wow animated fadeInRight">
					<img src="http://localhost/iamronan_redesign/wordpress/wp-content/uploads/2014/07/ux.png">
					<h2> UX/UI <h2>
				</li>
				<li class="m-all t-1of3 d-1of3 wow animated fadeInRight">
					<img src="http://localhost/iamronan_redesign/wordpress/wp-content/uploads/2014/07/chart.png">
					<h2> Design for Print<h2>
				</li>
				<li class="m-all t-1of3 d-1of3 wow animated fadeInLeft">
					<img src="http://localhost/iamronan_redesign/wordpress/wp-content/uploads/2014/07/mobile.png">
					<h2> Responsive Web Design<h2>
				</li>
				<li class="m-all t-1of3 d-1of3 wow animated fadeInLeft">
					<img src="http://localhost/iamronan_redesign/wordpress/wp-content/uploads/2014/07/bash.png">
					<h2> Front-end Development <h2>
				</li>
				<li class="m-all t-1of3 d-1of3 wow animated fadeInLeft">
					<img src="http://localhost/iamronan_redesign/wordpress/wp-content/uploads/2014/07/cms.png">
					<h2> CMS <h2>
				</li>
			</ul>
			<div class="hire-me"><button class="blue-btn"> Hire Me </button> </div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php endwhile; else : ?>
			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>
			<?php endif; ?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>