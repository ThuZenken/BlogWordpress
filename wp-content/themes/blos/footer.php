<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blos
 */

?>

	<footer id="colophon" class="footer-area">
     <div class="col-md-12 text-center">
		<div class="site-info">
	      <p><?php echo 
		   /* translators: %s: CMS name, i.e. WordPress. */
		  esc_html( get_theme_mod( 'copyright_section_text' )); ?></p>
		</div><!-- .site-info -->
       </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
