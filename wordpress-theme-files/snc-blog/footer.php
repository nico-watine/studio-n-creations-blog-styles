<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package SNC Blog
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer" role="contentinfo">

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'modernize' ); ?>">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'sns-menu',
						'depth'          => 1,
						'link_before'    => '<svg viewBox="0 0 64 64" class="icon"><use xlink:href="">',
						'link_after'     => '</use></svg>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<div class="footer__info">
			<span class="colophon">&copy; Studio N Creations 2020</span>
		</div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>
