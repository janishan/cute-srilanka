<?php
/**
 * Options Framework
 *
 * @package   Options Framework
 * @author    Devin Price <devin@wptheming.com>
 * @license   GPL-2.0+
 * @link      http://wptheming.com
 * @copyright 2010-2014 WP Theming
 *
 * @wordpress-plugin
 * Plugin Name: Options Framework
 * Plugin URI:  http://wptheming.com
 * Description: A framework for building theme options.
 * Version:     1.9.1
 * Author:      Devin Price
 * Author URI:  http://wptheming.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: optionsframework
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Don't load if optionsframework_init is already defined
if (is_admin() && ! function_exists( 'optionsframework_init' ) ) :

function optionsframework_init() {

	//  If user can't edit theme options, exit
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	// Loads the required Options Framework classes.
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-framework.php';
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-framework-admin.php';
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-interface.php';
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-media-uploader.php';
	require plugin_dir_path( __FILE__ ) . 'includes/class-options-sanitization.php';

	// Instantiate the options page.
	$options_framework_admin = new Options_Framework_Admin;
	$options_framework_admin->init();

	// Instantiate the media uploader class
	$options_framework_media_uploader = new Options_Framework_Media_Uploader;
	$options_framework_media_uploader->init();

}

add_action( 'init', 'optionsframework_init', 20 );

endif;


/**
 * Helper function to return the theme option value.
 * If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * Not in a class to support backwards compatibility in themes.
 */
if ( ! function_exists( 'of_get_option' ) ) :
function of_get_option( $name, $default = false ) {

	$option_name = '';

	// Gets option name as defined in the theme
	if ( function_exists( 'optionsframework_option_name' ) ) {
		$option_name = optionsframework_option_name();
	}

	// Fallback option name
	if ( '' == $option_name ) {
		$option_name = get_option( 'stylesheet' );
		$option_name = preg_replace( "/\W/", "_", strtolower( $option_name ) );
	}

	// Get option settings from database
	$options = get_option( $option_name );

	// Return specific option
	if ( isset( $options[$name] ) ) {
		return $options[$name];
	}

	return $default;
}
endif;



// require_once dirname( __FILE__ ) . '/d5eximport.php';

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( ! is_plugin_active( 'd5eximport/d5eximport.php' ) ) {
  //plugin is activated
  
  function eximpnot_options( $options ){
		$options[] = array(
			'name' => 'Export/Import',
			'type' => 'heading'
		);
		$options[] = array(
			'desc' => '
			<div class="speciald5op speciallf">
			<strong>For using This Feature you should read <a href="'. esc_url('https://d5creation.com/theme-options-export-import').'" target="_blank">This Article</a> First !</strong>			
			<p style=" color:red; font-size: 17px;">The Plugin <b>D5 Theme Options Export/Import</b> is not Installed/Activated. Please Install and/or Activate the Plugin First</p> 
			</div>
<p class="speciald5op speciallf"><strong>The Plugin is Already Installed but Not Activated ?</strong><br /> 
- Please click <a href="'.admin_url('plugins.php?plugin_status=all').'" target="_blank">This Link</a>. You can Check and Activate the  Plugin there<br />
- Now Refresh/Reload this Page: <a href="'.admin_url('themes.php?page=options-framework').'">Click Here</a>
</p>

<p class="speciald5op speciallf"><strong>The Plugin is Not Installed Yet ?</strong><br />
You can Install and Activate the Plugin easily<br />
- Click <a href="'. esc_url('http://demo.d5creation.com/d5resource/d5eximport.zip').'" target="_blank">This Link</a> and the Plugin will be downloaded directly to your Computer <a class="button-primary" style="float: none; height: auto; margin: 0 0 0 5px; padding: 1px 5px;" href="'. esc_url('http://demo.d5creation.com/d5resource/d5eximport.zip').'" target="_blank">Download the Plugin</a><br />
- Now, <a href="'.admin_url('plugin-install.php?tab=upload').'" target="_blank">Click Here</a> and You can Upload, Install and Activate the Plugin there<br />
- Now Refresh/Reload this Page: <a href="'.admin_url('themes.php?page=options-framework').'">Click Here</a>
</p>

<p>It is Strongly Recommended that you will keep a Full Site Backup and Full Database Backup besides the Theme Options Backup. There are various ways to take the Full Site Backup and Full Database Backup. Many hosting companies provide these services. Full Site Backup and Full Database Backup are not related with Theme Developers. These are Hosting/cPanel Features</p> <br />

', 
			'type' => 'info'
	     );
		return $options;
	}
	add_filter( 'of_options', 'eximpnot_options', 9999 );
} 
