<?php
/**
 * Plugin Name: Quotes Slider
 * Plugin URI: http://cleverlittlelies.com
 * Description: Quotes slider for homepage of cleverlittlelies.com
 * Version: 0.9.0
 * Author: Sunil Williams
 * Author URI: http://sunil.co.nz
 * License: GPL2
 */

/**
 * include CPT definition
 */

define( "QUOTESDIRURL" ,  plugin_dir_url(__FILE__))  ;

define( "QUOTESDIR" ,   plugin_dir_path(__FILE__)  ) ;


include(   QUOTESDIR . '/cpt/quotes-cpt.php') ;


/**
 * enqueue assets
 */

function cll_quotes_assets()
{
    /*  swiper  dependencies */
    wp_enqueue_script('swiper-js-min',  QUOTESDIRURL   .    '/js/swiper.jquery.min.js', array('jquery' ) ) ;


    /* our own assets */
    wp_enqueue_style('swiper-styles',    QUOTESDIRURL .   '/css/swiper.css') ;
    wp_enqueue_style('cll-quote-styles',    QUOTESDIRURL .   '/css/cll-quote.css') ;
    wp_enqueue_script('quotes-js',   QUOTESDIRURL    .  'js/quotes.js', array( ) ) ;
}
add_action('wp_enqueue_scripts',     'cll_quotes_assets')  ;


/**
 *  set up the shortcode
 */
function cll_quotes_shortcode()
{

    /**
     * if device is mobile then redirect to ticking site
     */

    $html = include (QUOTESDIR   . '/templates/quotes_loop.php' ) ;
    echo $html  ;

    return ;
}
add_shortcode( 'cleverlies-quotes-slideshow', 'cll_quotes_shortcode' ) ;
