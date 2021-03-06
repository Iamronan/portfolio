<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="wrap cf">
		<div id="main" class="m-all t-3of3 d-7of7 cf" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf, wow , animated, fadeInLeft' ); ?> role="article">

				<i class="fa fa-comment blog-icon"></i>
				<header class="article-header">
					<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p class="byline vcard">
					<?php printf( __( 'Posted', 'bonestheme' ) . ' <time class="updated" datetime="%1$s" pubdate>%2$s</time> ' , get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
					</p>
				</header>
				
				<section class="entry-content cf">
					<div class="blog-excerpt-text m-all t-2of3 d-5of7 cf">
						<?php the_excerpt(); ?>
					</div>
					<div class="blog-excerpt-text m-all t-1of3 d-2of7 cf">
<? if( has_post_thumbnail( ) ): ?>
    
        <img title="image title" alt="thumb image" class="wp-post-image" 
             src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
   
<? endif; ?>


					</div>
				</section>
				<footer class="article-footer cf">
					
				</footer>
			</article>
			<?php endwhile; ?>
			<?php bones_page_navi(); ?>
			<?php else : ?>
			<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
				</section>
				<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
				</footer>
			</article>
			<?php endif; ?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>