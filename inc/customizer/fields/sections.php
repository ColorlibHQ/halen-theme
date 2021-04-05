<?php 
/**
 * @Packge     : Halen
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'halen_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'halen' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'halen_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'halen' ),
            'panel'    => 'halen_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'halen_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'halen' ),
            'panel'    => 'halen_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'halen_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'halen' ),
            'panel'    => 'halen_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'halen_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'halen' ),
            'panel'    => 'halen_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'halen_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'halen' ),
            'panel'    => 'halen_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'halen_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'halen' ),
            'panel'    => 'halen_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'halen_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'halen' ),
            'panel'    => 'halen_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'halen_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'halen' ),
            'panel'    => 'halen_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>