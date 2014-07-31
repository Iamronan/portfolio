<?php
/*
Template Name: About
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
					
I am a highly motivated digital designer and front end developer with over 8 years experience working in commercial and freelance environments. I am a creative thinker who loves to embrace new ideas and technology. I am always inspired by the visual world around me and strive to reflect this through my design. I am versatile, love to experiment and constantly strive to share my knowledge with others.
					</p>
					
					<p class="wow  animated fadeInLeft" >
					I am extremely passionate about the web and I love to design and craft beautiful, usable, cross browser responsive websites using the latest web technologies including HTML5, SASS, CSS3, Jquery and Wordpress.

					</p>

<p> 	 </p>
				



						<p class="wow  animated fadeInLeft" >
				
Away from my iMac you will most likely find me at the front of a classroom, drinking coffee, in the kitchen, or tweaking synthisisers.

					</p>


				</li>
				<li class="m-all t-1of2 d-1of2">
					<img class="wow  animated fadeInRight" src="<?php echo bloginfo('url'); ?>/wp-content/themes/iamronan/library/images/studio.png">


					<div class="hire-me wow  animated fadeInUp"><button class="blue-btn"> CV </button> </div>
					
				</li>
				
			</ul>



<div class="tools m-all t-all d-all">

<h2 class="wow  animated fadeIn cf"> Tools of the Trade  </h2>

<ul class="wow  animated fadeIn cf"> 

 <li><i class="devicon-grunt-plain"></i></li>

	 <li><i class="devicon-html5-plain"></i></li>

	<li><i class="devicon-illustrator-line"></i></li>

	<li> <i class="devicon-gulp-plain"></i></li>

    <li> <i class="devicon-wordpress-plain"></i></li>

      <li><i class="devicon-css3-plain"></i></li>

    <li><i class="devicon-sass-plain"></i> </li>

    <li> <i class="devicon-photoshop-line"></i></li>

    <li><i class="devicon-jquery-plain"></i></li>
          <li><i class="devicon-git-plain"></i></li>


 
</div>


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