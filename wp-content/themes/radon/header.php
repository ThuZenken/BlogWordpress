<?php 
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php esc_url( bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
<?php wp_head(); ?>	
<head>
<body id="home" <?php body_class(); ?>>

<?php if( is_page_template('template-homepage-parallax.php') ){ ?>

<div class="preloader">

	<div class="status">&nbsp;</div>

</div>

<?php } 

$radon_obj = new Radon_settings_array();

$option = wp_parse_args(  get_option( 'radon_option', array() ), $radon_obj->default_data() ); ?>

<div id="rdn-wrapper">
	
	<?php if( $option['top-header-hide'] == false ) : ?>

	<section id="rdn-top-header" role="banner">

		<div class="container">

			<div class="row">

				<div class="col-md-6 col-sm-6">

					<ul class="rdn-header-contact">

						<?php if( $option['header-left-text1'] !='' ){ ?>

						<li>
							<a href="tel:<?php echo $option['header-left-text1']; ?>"><i class="fa <?php echo $option['header-left-icon1']; ?>"></i><?php echo $option['header-left-text1']; ?></a>
						</li>

						<?php } ?>

						<?php if( $option['header-left-text2'] !='' ){ ?>

						<li>
							<a href="mailto:<?php echo $option['header-left-text2']; ?>"><i class="fa <?php echo $option['header-left-icon2']; ?>"></i><?php echo $option['header-left-text2']; ?></a>
						</li>

						<?php } ?>

					</ul>

				</div>

				<div class="col-md-6 col-sm-6">

					<ul class="rdn-header-social pull-sm-none">
						
						<?php if( $option['header-facebook-url'] != ''){ ?>

						<li>
							<a href="<?php echo $option['header-facebook-url']; ?>" <?php if( $option['header-social-target']==true ){ echo 'target="_blank"'; } ?> data-toggle="tooltip" title="Facebook" data-placement="bottom"><i class="fab fa-facebook-f"></i></a>
						</li>

						<?php } ?>

						<?php if( $option['header-twitter-url'] != ''){ ?>

						<li>
							<a href="<?php echo $option['header-twitter-url']; ?>" <?php if( $option['header-social-target']==true ){ echo 'target="_blank"'; } ?> data-toggle="tooltip" title="Twitter" data-placement="bottom"><i class="fab fa-twitter"></i></a>
						</li>

						<?php } ?>

						<?php if( $option['header-linkedin-url'] != ''){ ?>

						<li>
							<a href="<?php echo $option['header-linkedin-url']; ?>" <?php if( $option['header-social-target']==true ){ echo 'target="_blank"'; } ?> data-toggle="tooltip" title="Linked In" data-placement="bottom"><i class="fab fa-linkedin-in"></i></a>
						</li>

						<?php } ?>

						<?php if( $option['header-googleplus-url'] != ''){ ?>

						<li>
							<a href="<?php echo $option['header-googleplus-url']; ?>" <?php if( $option['header-social-target']==true ){ echo 'target="_blank"'; } ?> data-toggle="tooltip" title="Google Plus" data-placement="bottom"><i class="fab fa-google-plus-g"></i></a>
						</li>

						<?php } ?>

					</ul>

				</div>

			</div>

		</div>

	</section>

	<?php endif; ?>
	
	<section id="rdn-menu">

		<nav class="navbar navbar-default" role="navigation" aria-label="<?php _e( 'Primary', 'radon' ); ?>">

			<div class="container">
				
				<div class="navbar-header">
						
					<?php if( has_custom_logo() ){ 

						the_custom_logo();
						
					} else { 
						echo '<a class="site-title-area" href="'.esc_url( home_url( '/' ) ).'" rel="home"><span class="site-title">'.get_bloginfo("name").'</span><span class="site-description">'.get_bloginfo("description").'</span></a>';
					} ?>
					
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
							<span class="sr-only"><?php _e('Toggle navigation','radon'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					
				</div>
				
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<div class="row">
						<?php 
							wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav pull-sm-none',
							'fallback_cb' => 'radon_fallback_page_menu',
							'walker' => new radon_nav_walker() ) 
							); 
						?>
					</div>
				</div>
				
			</div>

		</nav>

	</section>