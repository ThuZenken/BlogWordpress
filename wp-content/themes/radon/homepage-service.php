<?php
$radon_obj = new Radon_settings_array();
$option = wp_parse_args(  get_option( 'radon_option', array() ), $radon_obj->default_data() ); 

$class = '';

if( $option['service_section_backgorund_color'] != '' ){

	$class = "homepage_section_color";
}

if( $option['service_section_image'] != '' ){

	$class = "homepage_section_image";
}
?>
<?php if($option['service_section_enable']==true): ?>
	<section id="service" class="<?php echo esc_attr( $class ); ?>" style="background:url('<?php echo esc_url( $option['service_section_image'] ); ?>') fixed center no-repeat <?php echo esc_attr( $option['service_section_backgorund_color'] ); ?>;">
		<div class="rdn-section-body">
			<div class="container">
				<div class="row">
				
					<?php if($option['service_section_title']!=''): ?>
					<h2 class="section-title wow animated fadeInUp"><?php echo esc_html( $option['service_section_title'] ); ?></h2>
					<?php endif; ?>
					
					<?php if($option['service_section_description']!=''): ?>
					<p class="section-desc wow animated fadeInUp"><?php echo esc_html( $option['service_section_description'] ); ?></p>
					<?php endif; ?>

				</div>
				
				<?php if( is_active_sidebar('sidebar-service') ) : ?>

				<div class="row sidebar-service">

					<?php dynamic_sidebar('sidebar-service'); ?>

				</div>
				
				<?php endif; ?>
				
			</div>

		</div>

	</section>
	
<?php endif; ?>