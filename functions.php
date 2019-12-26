<?php

if ( ! function_exists( 'amazing_setup' ) ) :

	function amazing_setup() {
		
		load_theme_textdomain( 'amazing', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'amazing' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'amazing_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'amazing_setup' );


function amazing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amazing_content_width', 640 );
}
add_action( 'after_setup_theme', 'amazing_content_width', 0 );

function amazing_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'amazing' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'amazing' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'amazing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function amazing_scripts() {
	wp_enqueue_style( 'amazing-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amazing_scripts' );


require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function amazing_section_title_shortcode($atts) {
	extract(shortcode_atts( array(
		'title' => '',
		'description' => ''
	), $atts ));

	$amazing_section_title_markup = '';

	if(!empty($title)) {
		$amazing_section_title_markup = "<h2>$title</h2>";
	}

	if(!empty($description)) {
		$amazing_section_title_markup .= "<p>$description</p>";
	}

	return $amazing_section_title_markup;
}

add_shortcode( 'amazing_section_title', 'amazing_section_title_shortcode' );

 
add_action('init', 'your_init', 99 );
 
function your_init() {
 
	if (function_exists('kc_add_map')) { 
	    kc_add_map(
	        array(

	            'kc_icon' => array(
	                'name' => 'Mehedi',
	                'description' => __('Display single icon', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'Custom Components',
	                'params' => array(
	                    array(
	                        'name' => 'icon',
	                        'label' => 'Select Icon',
	                        'type' => 'icon_picker',
	                        'admin_label' => true,
	                    ),
	                    array(
	                        'name' => 'icon_size',
	                        'label' => 'Icon Size',
	                        'type' => 'text',
	                        'admin_label' => true,
	                        'description' => __('Enter font-size for icon such as: 15px, 1em ..etc..', 'KingComposer')
	                    ),
	                    array(
	                        'name' => 'icon_color',
	                        'label' => 'Icon Color',
	                        'type' => 'color_picker',
	                        'admin_label' => true,
	                        'description' => __('Set color for icon', 'KingComposer')
	                    )
	                )
	            ),  // End of elemnt kc_icon 

	        )
	    ); // End add map


	    add_shortcode( 'kc_icon', 'kc_icon_php_func' );

	    function kc_icon_php_func() {
	    	echo 'blah blah';
	    }
	
	} // End if

}  
