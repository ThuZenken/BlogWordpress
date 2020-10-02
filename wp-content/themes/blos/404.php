<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blos
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="page-content2">
				
				    <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blos' ); ?></h1>

					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'blos' ); ?></p>
                    
				  <div class="h-btn text-center">
			   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-back"><?php esc_html_e( 'Home Back', 'blos' ); ?></a>
                </div>
				</div><!-- .page-content -->

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
