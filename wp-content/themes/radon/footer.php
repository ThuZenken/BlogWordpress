<?php 
/**
 * The template for displaying the footer
 */

$radon_obj = new Radon_settings_array();

$option = wp_parse_args(  get_option( 'radon_option', array() ), $radon_obj->default_data() ); ?>

	<section id="rdn-footer" role="contentinfo">
		
		<?php if( is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3')): ?>

		<div class="rdn-footer-top">

			<div class="container">

				<div class="row">

					<div class="col-md-3 col-sm-6">
						<?php 
						if(is_active_sidebar('footer-1')):
							dynamic_sidebar('footer-1');
						endif;
						?>
					</div>

					<div class="col-md-3 col-sm-6">
						<?php 
						if(is_active_sidebar('footer-2')):
							dynamic_sidebar('footer-2');
						endif;
						?>
					</div>

					<div class="col-md-3 col-sm-6">
						<?php 
						if(is_active_sidebar('footer-3')):
							dynamic_sidebar('footer-3');
						endif;
						?>
					</div>

					<div class="col-md-3 col-sm-6">
						<?php 
						if(is_active_sidebar('footer-4')):
							dynamic_sidebar('footer-4');
						endif;
						?>
					</div>

				</div>
				
				<?php if( $option['footer_socialicon_enable'] == true ): ?>

				<div class="rdn-footer-social">
					
					<?php if( $option['footer_socialicon_title'] != '' ): ?>
					<h1 class="footer-social-title wow animated fadeInUp"><?php echo $option['footer_socialicon_title']; ?></h1>
					<?php endif; ?>
					
					<ul class="footer-social-icons">
						<?php if( $option['header-facebook-url'] != ''){ ?>
						<li><a href="<?php echo $option['header-facebook-url']; ?>" <?php if( $option['header-social-target']==true ){ echo 'target="_blank"'; } ?> data-toggle="tooltip" title="Facebook" data-placement="bottom"><i class="fab fa-facebook-f"></i></a></li>
						<?php } ?>

						<?php if( $option['header-twitter-url'] != ''){ ?>
						<li><a href="<?php echo $option['header-twitter-url']; ?>" <?php if( $option['header-social-target']==true ){ echo 'target="_blank"'; } ?> data-toggle="tooltip" title="Twitter" data-placement="bottom"><i class="fab fa-twitter"></i></a></li>
						<?php } ?>

						<?php if( $option['header-linkedin-url'] != ''){ ?>
						<li><a href="<?php echo $option['header-linkedin-url']; ?>" <?php if( $option['header-social-target']==true ){ echo 'target="_blank"'; } ?> data-toggle="tooltip" title="Linked In" data-placement="bottom"><i class="fab fa-linkedin-in"></i></a></li>
						<?php } ?>

						<?php if( $option['header-googleplus-url'] != ''){ ?>
						<li><a href="<?php echo $option['header-googleplus-url']; ?>" <?php if( $option['header-social-target']==true ){ echo 'target="_blank"'; } ?> data-toggle="tooltip" title="Google Plus" data-placement="bottom"><i class="fab fa-google-plus-g"></i></a></li>
						<?php } ?>
					</ul>

				</div>

				<?php endif; ?>
				
			</div>
				
		</div>

		<?php endif; ?>
		
		<?php if( $option['footer_copyright'] != '' || $option['footer_menu']==true): ?>
		
		<div class="rdn-footer-bottom">

			<div class="container">

				<div class="row">

					<div class="col-md-6 col-sm-6">

						<div class="rdn-copyright">

							<?php if($option['footer_copyright'] != ''): ?>
							<p><?php echo esc_html( $option['footer_copyright'] ); ?></p>
							<?php endif; ?>

						</div>

					</div>

					<div class="col-md-6 col-sm-6">

						<?php if($option['footer_menu']==true): ?>

						<ul class="rdn-footer-menu" aria-label="<?php _e( 'footer', 'radon' ); ?>>

							<?php  

							wp_nav_menu( 
								array(  
									'theme_location' => 'footer',
									'menu_id'        =>'FooterMenu',
								   'fallback_cb'     => 'radon_fallback_page_menu',
									'walker'         => new radon_nav_walker()
								)
							);

							?>

						</ul>

						<?php endif; ?>

					</div>

				</div>

			</div>

		</div>

		<?php endif; ?>

	</section>
	
</div>
 
<a href="#" class="rdn_page_scroll"><i class="fa fa-chevron-up"></i></a>

<?php wp_footer(); ?>

</body>
</html>