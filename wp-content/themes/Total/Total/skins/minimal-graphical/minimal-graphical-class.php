<?php
/**
 * Minimal Graphical Skin Class
 *
 * @package WordPress
 * @subpackage Total
 * @since Total 1.3
*/


if ( !class_exists( "Total_MG_Skin" ) ) {

	class Total_MG_Skin {

		// Constructor
		function __construct() {
			add_action( 'wp_enqueue_scripts', array( &$this, 'load_styles') );
		}

		// Load Styles
		public function load_styles() {
			if ( wp_script_is( 'wpex-woocommerce', 'enqueued' ) ) {
				wp_enqueue_style( 'minimal-graphical-skin', WPEX_SKIN_DIR_URI .'/minimal-graphical/minimal-graphical-style.css', array( 'wpex-style', 'wpex-woocommerce' ), '1.0', 'all' );
			} else {
				wp_enqueue_style( 'minimal-graphical-skin', WPEX_SKIN_DIR_URI .'/minimal-graphical/minimal-graphical-style.css', array( 'wpex-style' ), '1.0', 'all' );
			}
		}

	}

}

// Start Class
$wpex_skin_class = new Total_MG_Skin();