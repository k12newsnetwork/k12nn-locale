<?php
/*
Plugin Name: K12NN Locale
Plugin URI: http://k12newsnetwork.com/
Description: Switch locale with a shortcode.
Version: 1.1.1
Author: Bradford Knowlton
Author URI: http://bradknowlton.com
License: GPL2

GitHub Plugin URI: https://github.com/k12newsnetwork/k12nn-locale
*/


/*
Plugin Name: Change locale at runtime
Plugin URI: http://wordpress.stackexchange.com/questions/49451/change-locale-at-runtime
*/

function k12nn_redefine_locale($locale) {
   	global $k12nn_locale;
   	$locale = $k12nn_locale;

    return $locale;
}
  

function bartag_func( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'locale' => 'en_US',
    ), $atts );

    global $k12nn_locale;

    $k12nn_locale = $a['locale']

    add_filter('locale','k12nn_redefine_locale');

    $return = do_shortcode( $content );

    remove_filter('locale','k12nn_redefine_locale');

    return $return;
}
add_shortcode( 'bartag', 'bartag_func' );


