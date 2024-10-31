<?php
/**
 Plugin Name: Pricing Table for Elementor
 Description: Pricing Table for Elementor lets you add beautiful pricing table on your website with Elementor Page Builder. Now You can easily compare your pricing lists with the Elelementor Page Builder. All of the options are easily customizable on this pricing Table Plugin.
 Author: Plugin Devs
 Author URI: https://plugin-devs.com/
 Plugin URI: https://plugin-devs.com/product/elementor-pricing-table/
 Version: 0.9.6
 License: GPLv2
 License URI: https://www.gnu.org/licenses/gpl-2.0.html
 Domain Path: languages
 Text Domain: pricing-table-for-elementor
 */
namespace WB_PT;

// Exit if accessed directly.
 if ( ! defined( 'ABSPATH' ) ) { exit; }


/**
 * Main Class
 */
class WB_Pricing_Table
{
	
	private static $instance;

	public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new WB_Pricing_Table();
            self::$instance->init();
        }
        return self::$instance;
    }

    //Empty Construct
 	function __construct(){}

 	//initialize Plugin
 	public function init(){
 		$this->defined_constants();
 		$this->include_files();
		add_action( 'elementor/init', array( $this, 'wb_create_category') ); // Add a custom category for panel widgets
 	}

 	//Defined all constants for the plugin
 	public function defined_constants(){
 		define( 'WB_PT_PATH', plugin_dir_path( __FILE__ ) );
		define( 'WB_PT_URL', plugin_dir_url( __FILE__ ) ) ;
		define( 'WB_PT_VERSION', '0.9.6' ) ; //Plugin Version
		define( 'WB_PT_PRO_URL', 'https://plugin-devs.com/product/elementor-pricing-table/' );
		define( 'WB_PT_MIN_ELEMENTOR_VERSION', '2.0.0' ) ; //MINIMUM ELEMENTOR Plugin Version
		define( 'WB_PT_MIN_PHP_VERSION', '5.4' ) ; //MINIMUM PHP Plugin Version
		
 	}

 	//Include all files
 	public function include_files(){

 //		require_once( WB_PT_PATH . 'functions.php' );
 		require_once( WB_PT_PATH . 'includes/pricing-table-utils.php' );
 		if( is_admin() ){
 			require_once( WB_PT_PATH . 'class-plugin-deactivate-feedback.php' );	
 		}
 
 	}

 	//Elementor new category register method
 	public function wb_create_category() {
	   \Elementor\Plugin::$instance->elements_manager->add_category( 
		   	'web-builder-element',
		   	[
		   		'title' => esc_html( 'Web Builders Element', 'pricing-table-for-elementor' ),
		   		'icon' => 'fa fa-plug', //default icon
		   	],
		   	2 // position
	   );
	}

}

function wb_pricing_table_register_function(){
	$WB_Pricing_Table = WB_Pricing_Table::getInstance();
	if( is_admin() ){
		$wb_pt_feedback = new \WB_PT_Usage_Feedback(
			__FILE__,
			'webbuilders03@gmail.com',
			false,
			true
		);
	}
}
add_action('plugins_loaded', 'WB_PT\wb_pricing_table_register_function');
