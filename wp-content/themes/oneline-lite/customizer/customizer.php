<?php
    //  = Default Theme Customizer Settings  =
function oneline_lite_customize_register( $wp_customize ) { 
          $obj = New Oneline_Lite_Popup();

class oneline_lite_Control extends WP_Customize_Control{
    public function render_content() {
        switch ( $this->type ) {
            default:

            case 'heading':
                echo '<span class="customize-control-title">' . $this->title . '</span>';
                break;

            case 'custom_message' :
                echo '<p class="description">' . $this->description . '</p>';
                break;

            case 'hr' :
                echo '<hr />';
                break;
        }
    }
}


//  =============================
//  = Genral Settings     =
//  =============================
$wp_customize->get_section('title_tagline')->title = esc_html__('General Setting', 'oneline-lite');
   $wp_customize->get_section('title_tagline')->priority = 3;
   $wp_customize->add_setting('title_disable', array(
        'default'           => 'enable',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('title_disable', array(
        'label'    => __('Display Site Title & Tagline', 'oneline-lite'),
        'section'  => 'title_tagline',
        'settings' => 'title_disable',
         'type'       => 'checkbox',
        'choices'    => array(
            'enable' => 'Display Site Title & Tagline',
        ),
    )); 


// Home Page Settings
 $wp_customize->add_section('section_default_home', array(
        'title'    => __('One click Homepage Setup', 'oneline-lite'),
        'priority' => 1,
    ));
   $wp_customize->add_setting('default_home', array(
        'sanitize_callback' => 'oneline-lite_sanitize_text',
    ));
   $wp_customize->add_control( new oneline_lite_Control( $wp_customize, 'default_home',
            array(
        'section'  => 'section_default_home',
        'type'        => 'custom_message',
        'description' => wp_kses_post( 'Click button to set theme default home page. You can modify this page from customize panel. Check this doc : <a target="_blank" href="https://themehunk.com/docs/oneline-lite-theme/"> View Documentation</a>. <a class="activate-now button-primary button-large flactvate">Activating homepage...</a><div class="loader"></div><strong class="flactvate-activating">It may take few seconds...</strong>','oneline-lite' ).$obj->active_plugin()
    )));



  
/** Footer Section ***/
//social icon        
       $wp_customize->add_section('social_option', array(
            'title'    => __('Footer Social Icon', 'oneline-lite'),
            'priority' => 4,
            'panel'    =>'theme_optn'
            ));
       $wp_customize->add_setting('social_link_facebook', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_facebook', array(
        'label'    => __('Facebook URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_facebook',
         'type'       => 'text',
        ));

         $wp_customize->add_setting('social_link_youtube', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_youtube', array(
        'label'    => __('Youtube URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_youtube',
         'type'       => 'text',
        ));

        $wp_customize->add_setting('social_link_instagram', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_instagram', array(
        'label'    => __('Instagram URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_instagram',
         'type'       => 'text',
        ));

        $wp_customize->add_setting('social_link_skype', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_skype', array(
        'label'    => __('Skype URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_skype',
         'type'       => 'text',
        ));

        $wp_customize->add_setting('social_link_linkedin', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_linkedin', array(
        'label'    => __('LinkedIn URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_linkedin',
         'type'       => 'text',
        ));
        $wp_customize->add_setting('social_link_pintrest', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('social_link_pintrest', array(
        'label'    => __('Pintrest URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_pintrest',
         'type'       => 'text',
        ));
        $wp_customize->add_setting('social_link_twitter', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage'
        ));
        $wp_customize->add_control('social_link_twitter', array(
        'label'    => __('Twitter URL', 'oneline-lite'),
        'section'  => 'social_option',
        'settings' => 'social_link_twitter',
         'type'       => 'text',
        ));
// custom 
$wp_customize->remove_section( 'header_image', array(
  'title'          => __( 'Header Background Image', 'oneline-lite' ),
  'theme_supports' => 'custom-header',
  'priority'       => 40,
  'panel' =>'theme_optn',
) );        
$wp_customize->get_section('colors')->title = esc_html__('Body Background Color', 'oneline-lite');
$wp_customize->get_section('colors')->priority = 60;
$wp_customize->get_section('colors')->panel = 'theme_optn';
// custom background
$wp_customize->add_section( 'background_image', array(
  'title'          => __( 'Body Background Image', 'oneline-lite' ),
  'theme_supports' => 'custom-background',
  'priority'       => 80,
  'panel' =>'theme_optn',
) );     
}
add_action('customize_register','oneline_lite_customize_register');
// custom class
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'oneline_lite_Custom_Content' ) ) :
class oneline_lite_Custom_Content extends WP_Customize_Control {

    // Whitelist content parameter
    public $content = '';

    /**
     * Render the control's content.
     *
     * Allows the content to be overriden without having to rewrite the wrapper.
     *
     * @since   1.0.0
     * @return  void
     */
    public function render_content() {
        if ( isset( $this->label ) ) {
            echo '<span class="customize-control-title">' . $this->label . '</span>';
        }
        if ( isset( $this->content ) ) {
            echo $this->content;
        }
        if ( isset( $this->description ) ) {
            echo '<span class="description customize-control-description">' . $this->description . '</span>';
        }
    }
}
endif;
?>