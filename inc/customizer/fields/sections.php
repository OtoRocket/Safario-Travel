<?php 
/**
 * @Packge     : safariotravel
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'safariotravel_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'safariotravel' ),
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
        'id'   => 'safariotravel_general_options_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'safariotravel' ),
            'panel'    => 'safariotravel_options_panel',
            'priority' => 1,
        ),
    ),
    /**
     * Header Section
     */
    array(
        'id'   => 'safariotravel_headertop_options_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'safariotravel' ),
            'panel'    => 'safariotravel_options_panel',
            'priority' => 2,
        ),
    ),
    /**
     * Blog Section
     */
    array(
        'id'   => 'safariotravel_blog_options_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'safariotravel' ),
            'panel'    => 'safariotravel_options_panel',
            'priority' => 3,
        ),
    ),

	/**
	 * Page Section
	 */
	array(
		'id'   => 'safariotravel_page_options_section',
		'args' => array(
			'title'    => esc_html__( 'page', 'safariotravel' ),
			'panel'    => 'safariotravel_options_panel',
			'priority' => 4,
		),
    ),
    

	/**
     * 404 Page Section
     */
    array(
        'id'   => 'safariotravel_fof_options_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'safariotravel' ),
            'panel'    => 'safariotravel_options_panel',
            'priority' => 7,
        ),
    ),
    /**
     * Footer Section
     */
    array(
        'id'   => 'safariotravel_footer_options_section',
        'args' => array(
            'title'    => esc_html__( 'Footer', 'safariotravel' ),
            'panel'    => 'safariotravel_options_panel',
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
