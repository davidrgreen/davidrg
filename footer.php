<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>
	</div> <?php /* Closes #content */ ?>

	<?php /*
	<div class="footer-widgets">
		<div class="wrap">
			<section class="one-half first">
			</section>
			<section class="one-half">
			</section>
		</div>
	</div>
	*/ ?>

</div> <?php /* Closes site-container */ ?>
<footer id="colophon" class="site-footer clearfix" role="contentinfo">
	<div class="wrap">
	<nav id="site-navigation" class="footer-navigation" role="navigation">
		<div class="wrap">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '__return_false' ) ); ?>
		</div>
	</nav>
	&copy; <?php echo date( 'Y' ); ?> David Green. All Rights Reserved.
	<div class="small-diamond"></div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
