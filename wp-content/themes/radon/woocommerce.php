<?php 

get_header();

radon_breadcrumbs();

?>
	<section class="rdn-main-content">

		<div class="container">

			<div class="row">
				
				<div class="col-md-8">
				
				<?php woocommerce_content(); ?>
				
				</div>
				
				<?php get_sidebar('woocommerce'); ?>
				
			</div>

		</div>

	</section>
	
<?php get_footer(); ?>