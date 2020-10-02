<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blos
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
<div class="col-md-4">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</div>
</aside><!-- #secondary -->
