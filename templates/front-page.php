<?php
/*
Template Name: Home Page
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
<div id="content" class="cf">
	<div id="inner-content" class="cf wow animated fadeIn" data-wow-duration="1s" >
		<ul class="m-all t-all l-all cf recentwork grid">
			<li class="m-all t-1of3 d-1of3">
				<figure class="effect-zoe">
					<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/imaronan_mob.jpg">
					<figcaption>
					<h2>Leith  <span>Agency</span></h2>
			<!-- 		<span class="icon-heart"></span> -->
					<span class="icon-eye"></span>
				<!-- 	<span class="icon-paper-clip"></span> -->
					<!-- <p>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
					<a href="http://localhost:8888/wordpress/leith/">View more</a>
					</figcaption>
				</figure>
			</li>
			<li class="m-all t-1of3 d-1of3"><figure class="effect-zoe">
				<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/ardardan.jpg">
				<figcaption>
				<h2>Ardardan <span>Zoe</span></h2>
			<!-- 	<span class="icon-heart"></span> -->
				<span class="icon-eye"></span>
			<!-- 	<span class="icon-paper-clip"></span> -->
			<!-- 	<p>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
				<a href="http://localhost:8888/wordpress/ardardan/">View more</a>
				</figcaption>
			</figure>
		</li>
		<li class="m-all t-1of3 d-1of3"><figure class="effect-zoe">
			<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/safe.jpg">
			<figcaption>
			<h2>Safe and Sound <span>Zoe</span></h2>
		<!-- 	<span class="icon-heart"></span> -->
			<span class="icon-eye"></span>
		<!-- 	<span class="icon-paper-clip"></span> -->
		<!-- 	<p>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
			<a href="http://localhost:8888/wordpress/safe-sound/">View more</a>
			</figcaption>
		</figure>
	</li>
	<li class="m-all t-1of3 d-1of3"><figure class="effect-zoe">
		<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/kreate.jpg">
		<figcaption>
		<h2>Creative <span>Zoe</span></h2>
		<!-- <span class="icon-heart"></span> -->
		<span class="icon-eye"></span>
		<!-- <span class="icon-paper-clip"></span> -->
	<!-- 	<p>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
		<a href="http://localhost:8888/wordpress/urbancroft/">View more</a>
		</figcaption>
	</figure>
</li>
<li class="m-all t-1of3 d-1of3"><figure class="effect-zoe">
	<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/traffic-web.jpg">
	<figcaption>
	<h2>Traffic <span>Zoe</span></h2>
<!-- 	<span class="icon-heart"></span> -->
	<span class="icon-eye"></span>
	<!-- <span class="icon-paper-clip"></span> -->
<!-- 	<p>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
	<a href="http://localhost:8888/wordpress/traffic/">View more</a>
	</figcaption>
</figure>
</li>
<li class="m-all t-1of3 d-1of3"><figure class="effect-zoe">
<img src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan_portfolio/library/images/our-haus.jpg">
<figcaption>
<h2>Our Haus <span>Zoe</span></h2>
<!-- <span class="icon-heart"></span> -->
<span class="icon-eye"></span>
<!-- <span class="icon-paper-clip"></span> -->
<!-- <p>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p> -->
<a href="http://localhost:8888/wordpress/our-haus/">View more</a>
</figcaption>
</figure>
</li>
</ul>
</div>
<div class="hire-me"><button class="blue-btn"> Hire Me </button> </div>
</div>
<?php get_footer(); ?>