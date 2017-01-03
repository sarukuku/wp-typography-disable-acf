<?php
/**
 * Plugin Name:     wp-Typography Disable ACF Integration
 * Plugin URI:      https://github.com/sarukuku/wp-typography-disable-acf
 * Description:     Disables wp-Typographys built-in Advanced Custom Fields integration.
 * Author:          Joonas Salovaara
 * Author URI:      https://github.com/sarukuku
 * Version:         1.0.0
 *
 * @package         Wp_Typography_Disable_Acf
 */

if (!function_exists('add_filter') || !defined('WP_PLUGIN_DIR')) {
  // WordPress is probably not bootstrapped.
  exit;
}

add_filter( 'typo_disable_filtering', function( $disable, $filter_group ) { 
  if ( 'acf' === $filter_group ) { 
      $disable = true;
  }
  return $disable;
}, 10, 2 );
