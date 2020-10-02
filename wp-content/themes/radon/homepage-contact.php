<?php

$radon_obj = new Radon_settings_array();

$option = wp_parse_args(  get_option( 'radon_option', array() ), $radon_obj->default_data() ); 

if($option['contact_section_enable']==true): ?>

	<section id="contact">

		<div class="container">
			
			<div class="row">
			
				<?php if($option['contact_section_title']!=''): ?>
				<h2 class="section-title wow animated fadeInUp"><?php echo esc_html( $option['contact_section_title'] ); ?></h2>
				<?php endif; ?>
				
				<?php if($option['contact_section_description']!=''): ?>
				<p class="section-desc wow animated fadeInUp"><?php echo esc_html( $option['contact_section_description'] ); ?></p>
				<?php endif; ?>

			</div>

			<?php if( is_active_sidebar('homepage-contact') ) : ?>

			<div class="row home_contact_info">

				<?php dynamic_sidebar('homepage-contact'); ?>

			</div>

			<?php endif; ?>

		</div>

	</section>
	
<?php endif; ?>