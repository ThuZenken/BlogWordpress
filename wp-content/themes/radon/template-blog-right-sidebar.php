<?php 
/**
 * Template Name: Blog Right Sidebar
 */

$obj = new Radon_settings_array();

$option = wp_parse_args(  get_option( 'radon_option', array() ), $obj->default_data() );

get_header(); 

radon_breadcrumbs(); ?>
	
	<section class="rdn-main-content">

		<div class="container">

			<div class="row">
				
				<div class="col-md-8">

				<?php 

				global $paged;

				$paged  = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;

				$args = array( 'post_type' => 'post','paged'=>$paged);

				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ):

					while( $loop->have_posts() ): $loop->the_post();

						radon_blog_style1();

					endwhile;

				else:

					get_template_part('content','none');

				endif;
									

				// pagination function

				$obj = new Radon_pagination();

				$obj->Radon_page($paged,$loop);
					
				wp_reset_postdata();

				?>

				</div>
				
				<?php get_sidebar(); ?>
				
			</div>

		</div>

	</section>
	
<?php get_footer(); ?>