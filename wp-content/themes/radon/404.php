<?php 
/**
 * This template for displayin Eorro Message
 */

get_header(); ?>

	<section class="rdn-main-content">

		<div class="container">

			<div class="row">
				
				<div class="col-md-8">
				
					<header class="page-header">

						<h1 class="page-title"><?php _e('404 Error','radon') ?></h1>

					</header>
						
					<article class="error-404 not-found post">

						<header class="entry-header">

							<h2 class="entry-title"><?php _e( 'Sorry! This page not founds.', 'radon' ); ?></h2>

						</header>

						<div class="entry-content">

							<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'radon' ); ?></p>

							<br>

							<?php get_search_form(); ?>

							<br>							
							<br>

						</div>

					</article>

				</div>
				
				<?php get_sidebar(); ?>
				
			</div>

		</div>

	</section>
	
<?php get_footer(); ?>