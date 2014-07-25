

			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright m-all t-1of3 d-1of3">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

					<ul class="social">
                 
                    <li> <a href="#"> <i class="fa fa-twitter"></i> </a> </li>
                     <li> <a href="#"> <i class="fa fa-dribbble"></i> </a> </li>
                   
                    <li> <a href="#"> <i class="fa fa-linkedin"></i> </a> </li>
                     <li> <a href="#"> <i class="fa fa-google-plus"></i> </a> </li>
                </ul>

				</div>

			</footer>


		</div>


		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<script type="text/javascript">

jQuery(document).ready(function($) {
		

			// initialize FlexNav
			$(".flexnav").flexNav();
		});


		</script>

	</body>

</html> <!-- end of site. what a ride! -->
