<?php
/*
Plugin Name: K12NN Locale
Plugin URI: http://k12newsnetwork.com/
Description: Switch locale with a shortcode.
Version: 1.0.1
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
   	$locale = 'es_ES';

    return $locale;
}
add_filter('locale','k12nn_redefine_locale');  