<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>


		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation site-info" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu site-title',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation site-info" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text site-title">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>
			<nav class="main-navigation site-info">
				<div class="menu-top-menu-container site-title">
					<ul class="primary-menu">
						<li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="one" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
						<li><a href="https://www.facebook.com/A1LabArts/"> Like Us on <span class="dashicons dashicons-facebook"></span> </a></li>
						<li><a href="https://paralleldesign.net/">Design</a></li>
						<li><a href="mailto:contact@a1labarts.com?Subject=Hello%20A1labarts">Contact Us</a></li>
					</ul>
				</div>
			</nav>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<!--<span class="site-title">
					<a class="one" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<a class="two" href="https://www.facebook.com/A1LabArts/"> Like Us on <span class="dashicons dashicons-facebook"></span> </a>
					<a class="two" href="http://cordial-emily.com/">Design</a>
					<a class="three" href="mailto:contact@a1labarts.com?Subject=Hello%20A1labarts">Contact Us</a>
			  </span>-->
				<a class="givingassist" href="https://givingassistant.org/np#a1labarts"><img src="http://www.a1labarts.com/wp-content/uploads/2017/08/giving_assistant_givva_4.png" alt="Giving Assistant" /></a>
				<!--<div class="" style="width:100%;">
					<a style="display: block;margin: 1.75em auto;width: 50%;float: right;" href="http://www.grassroots.org" data-mce-href="http://www.grassroots.org"><img src="http://www.a1labarts.com/wp-content/uploads/2016/06/Grassroots.org-logo.2.png" class="grassroots" alt="grassroots.org logo" data-mce-src="http://www.grassroots.org/newwp/wp-content/uploads/2015/09/logo-square.png" /></a>
					<a style="display: block;margin: 1.75em auto;width: 50%;float: left;" href="http://tnartscommission.org/"><img src="http://www.a1labarts.com/wp-content/uploads/2016/05/tac.1.png" alt="Tennessee Arts Commission logo" /></a>
				</div> -->
			</div><!-- .site-info -->
			<nav class="main-navigation site-info">
				<div class="menu-top-menu-container site-title">
					<ul class="primary-menu">
						<li><a href="http://www.grassroots.org" data-mce-href="http://www.grassroots.org"><img src="http://www.a1labarts.com/wp-content/uploads/2016/06/Grassroots.org-logo.2.png" class="grassroots" alt="grassroots.org logo" data-mce-src="http://www.grassroots.org/newwp/wp-content/uploads/2015/09/logo-square.png" /></a></li>
						<li><a href="http://tnartscommission.org/"><img src="http://www.a1labarts.com/wp-content/uploads/2016/05/tac.1.png" alt="Tennessee Arts Commission logo" /></a></li>
					</ul>
				</div>
			</nav>
			<h6 class="footer-copyr">&copy; 1995 – <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></h6>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
