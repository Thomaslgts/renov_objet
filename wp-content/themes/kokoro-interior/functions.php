<?php

if ( ! function_exists( 'kokoro_interior_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kokoro_interior_setup() {
    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'kokoro_interior_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif;
add_action( 'after_setup_theme', 'kokoro_interior_setup' );

// ----------------------------------------------------------------------------------
//	Register Front-End Styles And Scripts
// ----------------------------------------------------------------------------------

function kokoro_interior_enqueue_child_styles() {
 
    wp_enqueue_style( 'kokoro-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'kokoro-interior-style', get_stylesheet_directory_uri() . '/style.css', array( 'kokoro-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'kokoro_interior_enqueue_child_styles' );

/**
 *
 * Load Google Fonts
 *
 */
function kokoro_interior_google_fonts_url(){
	
    $fonts_url  = '';
    $Prata = _x( 'on', 'Prata font: on or off', 'kokoro-interior' );
    $Lora = _x( 'on', 'Lora font: on or off', 'kokoro-interior' );
 
    if ( 'off' !== $Prata || 'off' !== $Lora ){

        $font_families = array();
 
        if ( 'off' !== $Prata ) {

            $font_families[] = 'Prata';

        }

        if ( 'off' !== $Lora ) {

            $font_families[] = 'Lora';

        }
        
        $query_args = array(

            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

    }
 
    return esc_url_raw( $fonts_url );
}

function kokoro_interior_enqueue_googlefonts() {

    wp_enqueue_style( 'kokoro-interior-googlefonts', kokoro_interior_google_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'kokoro_interior_enqueue_googlefonts' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
// Custom excerpt max charlength
function kokoro_interior_the_excerpt_max_charlength($charlength)
{
    $excerpt = get_the_excerpt();
    $charlength++;

    if ( mb_strlen( $excerpt ) > $charlength ) {
        $subex = mb_substr( $excerpt, 0, $charlength - 5 );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            echo esc_html(mb_substr( $subex, 0, $excut ));
        } else {
            echo esc_attr($subex);
        }
        echo '&nbsp;...';
    } else {
        echo esc_attr($excerpt);
    }
}

/* Remove Wordpress version */
remove_action("wp_head", "wp_generator");