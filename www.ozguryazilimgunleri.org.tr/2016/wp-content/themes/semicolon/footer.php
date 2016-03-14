<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>

	</div><!-- #content -->

	<div style="border-bottom:1px solid #EBEBEB; margin-top: 50px; margin-bottom: -40px"></div>

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
		<div class="widget-area">
			<div class="footer-sidebar">
				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			</div>
		</div>
		<?php endif; ?>

		<div class="site-info">
			<?php if ( has_action( 'semicolon_credits' ) ) : ?>
				<?php do_action( 'semicolon_credits' ); ?>
			<?php else : ?>
				<?php _e( 'Altyapı: <a href="http://wordpress.org">WordPress</a> - Tema: <a href="http://kovshenin.com/themes/semicolon/">Semicolon</a>' ); ?>
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
