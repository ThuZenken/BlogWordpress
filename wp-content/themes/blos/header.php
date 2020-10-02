<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
 
  <body <?php body_class(); ?>> 
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blos' ); ?></a>

	     <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"><?php esc_html_e ( 'Toggle navigation', 'blos' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                
						<div class="site-branding" >
		              	  <?php
			             the_custom_logo();
			              if ( is_front_page() && is_home() ) :
				           ?>
				            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				           <?php
			              else :
				          ?>
				         <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			        	<?php
		            	endif;
			            $blos_description = get_bloginfo( 'description', 'display' );
			           if ( $blos_description || is_customize_preview() ) :
				         ?>
			           	<p class="site-description"><?php echo esc_html($blos_description); /* WPCS: xss ok. */ ?></p>
			             <?php endif; ?>
		              </div><!-- .site-branding -->		
				

 				  
				   </div> 
				  
              
                <div id="navbar" class="collapse navbar-collapse">

			<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'menu_class' => 'nav navbar-nav pull-right',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
				
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>             