<?php
/*
Template Name:Ardardan
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
		<div id="main" class="m-all t-3of3 d-7f7 cf" role="main">
			<ul class="m-all t-all l-all cf ">
				<li class="m-all t-1of2 d-1of2">
					<p class="wow  animated fadeInLeft">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
					</p>
					
					<p class="wow  animated fadeInLeft" >
					nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
					</p>
				</li>
				<li class="m-all t-1of2 d-1of2">
					<img class="wow  animated fadeInRight" src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/studio.png">
					
				</li>
				
			</ul>
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