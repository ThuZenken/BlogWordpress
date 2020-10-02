<?php
/**
 * Template for displaying search forms in Blos
 *
 * @package WordPress
 * @subpackage Blos
 * @since 1.0
 * @version 1.0
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:','blos' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'blos' ); ?>"  value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
	</label>
	<button type="submit" class="search-submit"><span class="screen-reader-text_1"><?php echo esc_html_e( 'Search','blos' ); ?></span></button>

</form>


