<?php
/**
 * Shopper functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shopper
 */

/**
 * Assign the shopper version to a var
 */
$shopper_theme              = wp_get_theme( 'shopper' );
$shopper_version = $shopper_theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	
	$content_width = 980; /* pixels */
}

$shopper = (object) array(
	'version' => $shopper_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require_once 'inc/class-shopper.php',
	'customizer' => require_once 'inc/customizer/class-shopper-customizer.php',
);


require_once 'inc/shopper-functions.php';
require_once 'inc/shopper-template-hooks.php';
require_once 'inc/shopper-template-functions.php';
require_once 'inc/customizer/include-kirki.php';
require_once  'inc/customizer/class-shopper-pro-kirki.php';

if ( is_admin() ) {
	
	$shopper->admin = require 'inc/admin/class-shopper-admin.php';
}

/**
 * All for WooCommerce functions
 */
if ( shopper_is_woocommerce_activated() ) {
	
	$shopper->woocommerce = require_once 'inc/woocommerce/class-shopper-woocommerce.php';

	require_once 'inc/woocommerce/shopper-wc-template-hooks.php';
	require_once 'inc/woocommerce/shopper-wc-template-functions.php';
}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );