<?php

/**
 * @package D5 Theme Options Export/Import
 */
/*
Plugin Name: D5 Theme Options Export/Import
Plugin URI: http://d5creation.com
Description: D5 Creation's Extended Themes' Options/Settings Export and Import
Version: 1.5
Author: D5 Creation
Author URI: http://d5creation.com
License: GPLv2 or later
Text Domain: d5eximport

First Work: https://digwp.com/2014/04/backup-restore-theme-options/ 
Modified by: http://www.oldcastleweb.com/pws/backing-up-theme-options/

*/

class backup_restore_theme_options {
	
	function __construct() {
		add_action('admin_menu', array(&$this, 'admin_menu'));
	}
	
	function admin_menu() {
		$page = add_submenu_page('tools.php', 'Export/Import D5 Theme Options', 'Export/Import D5 Theme Options', 'manage_options', 'd5backup-options', array(&$this, 'options_page'));

		add_action("load-{$page}", array(&$this, 'import_export'));
	}
	
	function import_export() {
		$d5t_file_name = get_option( 'stylesheet' );
		
		if (isset($_GET['action']) && ($_GET['action'] == 'download')) {
			header("Cache-Control: public, must-revalidate");
			header("Pragma: hack");
			header("Content-Type: text/plain");
			header('Content-Disposition: attachment; filename="'.$d5t_file_name.'-options-'.date("dMy").'.dat"');
			echo serialize($this->_get_options());
			die();
		}
		
		function is_serial($serialdata) { return (@unserialize($serialdata) !== false || $serialdata == 'b:0;'); }
		
		if (isset($_POST['upload']) && check_admin_referer('d5themes_restoreOptions', 'd5themes_restoreOptions')) {
			
			if ($_FILES['file']['error'] > 0) {
				// error
			} else { 
				$d5backupoptions = file_get_contents($_FILES['file']['tmp_name']);
				if (is_serial($d5backupoptions)): $d5options = unserialize($d5backupoptions); else: 				
				echo "<script type='text/javascript'>alert('Not Successful! Not a Valid File! You can try Another'); window.location.href='".admin_url('tools.php?page=d5backup-options')."';</script>";
				exit(); endif;
				if ($d5options) { 
					foreach ($d5options as $d5options) {
						update_option($d5options->option_name, unserialize($d5options->option_value)); 
					}
				}
			}
			wp_redirect(admin_url('tools.php?page=d5backup-options'));
			exit;
		}
	}
	
	function options_page() { ?>
		<div id="optionsframework-wrap">
		<div class="wrap">
        	<h2><strong>D5 Theme Options Export/Import</strong></h2>
            <p class="d5bdes">< <a href="<?php echo admin_url('themes.php?page=options-framework'); ?>" >Return Back to Theme Options</a></p>
			<form action="" method="POST" enctype="multipart/form-data">
 				<style>#d5backup-options td { display: block; margin: 30px auto; max-width: 750px; } .exportd5op { border: 1px solid #FFF; padding: 10px; }.exportd5op textarea.readonly { background: #FFFFFF; }.d5bdes { font-size: 15px; margin: 0; } .importd5op { border: 1px solid #dddddd; padding: 10px; background: #EEE; }.speciald5op, #optionsframework-wrap .speciald5op { background: #FFF; padding: 10px; border-left: 5px solid #0CF;} #d5backup-options .button-primary, #d5backup-options .button-secondary { padding: 5px 10px; font-size: 15px; height: auto; }</style>
				<table id="d5backup-options">
					<tr>
                    	<td class="speciald5op">
                        	<strong>For using This Plugin you should read <a href="<?php echo esc_url('https://d5creation.com/theme-options-export-import/'); ?>" target="_blank">This Article</a> First !</strong>
                        	<p>This Plugin will work with all Extended Themes of D5 Creation based on Options Framework. This Plugin should also work with all other Themes based on Options Framework or Options Framework Plugin. But, a Theme's Settings/Options Backup will work only for That Theme Only in the Same Domain or Other Domain</p>
                        	<p><strong>You can visit our <a href="<?php echo esc_url('http://d5creation.com/themegallery'); ?>" target="_blank">Theme Gallery</a> and find our <a href="<?php echo esc_url('http://d5creation.com/themegallery'); ?>" target="_blank">Responsive WordPress Themes</a></strong>. All of our Themes are Theme Check Passed and maintained all WordPress Coding Standards. Our Responsive and Elegant Premium WordPress Themes can make your site more attractive and dynamic.</p>
                        </td>
						<td class="exportd5op">
							<h3>Backup/Export</h3>
							<p>Here are the stored settings for the current theme:</p>
							<p><textarea class="widefat readonly code" rows="20" cols="100" onclick="this.select()"><?php echo serialize($this->_get_options()); ?></textarea></p>
							<p><a href="?page=d5backup-options&action=download" class="button-secondary">Download as File</a></p>
						</td>
						<td class="importd5op">
							<h3>Restore/Import</h3>
							<p><label class="description" for="upload">Restore a previous backup</label></p>
                            
							<p><input type="file" name="file" /> <input type="submit" name="upload" id="upload" class="button-primary" value="Upload and Restore" /></p>				<p style="color:#F00;"><label class="description" for="upload">[ WARNING: This will remove all Existing Theme Options/Settings and Restore Old Options/Settings from Backup ]</label></p>
							<?php if (function_exists('wp_nonce_field')) wp_nonce_field('d5themes_restoreOptions', 'd5themes_restoreOptions'); ?>
						</td>
                        
                        <td class="speciald5op">
                        	You should check and change the Image Urls, Links and Urls manually from the <a href="<?php echo admin_url('themes.php?page=options-framework'); ?>" >Theme Options</a> after Backup/Restore because all settings/options are Imported as it was.
                            <p>It is Strongly Recommended that you will keep a Full Site Backup and Full Database Backup besides the Theme Options Backup. There are various ways to take the Full Site Backup and Full Database Backup. Many hosting companies provide these services. Full Site Backup and Full Database Backup are not related with Theme Developers. These are Hosting/cPanel Features.</p> 
                            <p>This <strong>D5 Theme Options Export/Import</strong> may or may not work with all WordPress Environment. This Product is provided "as is" with no warranty or liabilities of D5 Creation</p> 
                        </td>
					</tr>
				</table>
			</form>
            <p class="d5bdes">Proudly Made By <a href="<?php echo esc_url('http://d5creation.com'); ?>" target="_blank" >D5 Creation</a></p>
		</div>
		</div>
<?php }
	
	function _display_options() {
		$d5options = unserialize($this->_get_options());
	}
	
	function _get_options() {
		global $wpdb;
		if ( function_exists( 'optionsframework_option_name' ) ): $d5t_option_name = optionsframework_option_name(); else: $d5t_option_name = 'xxxxxxyyyyyyzzzzzz'; endif;
		// $d5t_option_name = optionsframework_option_name();
		return $wpdb->get_results("SELECT option_name, option_value FROM {$wpdb->options} WHERE option_name = '". $d5t_option_name ."'");
	}
}

new backup_restore_theme_options();
	function eximp_options( $options ){
		$options[] = array(
			'name' => 'Export/Import',
			'type' => 'heading'
		);
		$options[] = array(
			'desc' => '
						<div class="speciald5op speciallf">
						<strong>For using This Feature you should read <a href="'. esc_url('https://d5creation.com/theme-options-export-import/').'" target="_blank">This Article</a> First !</strong>
						<p style="font-size:17px;">Please <a href="'.admin_url('tools.php?page=d5backup-options').'"><strong>Click Here</strong></a> or Go to <strong>WP-Admin > Tools > D5 Theme Options Export/Import</strong>. Cheers!</p></div>
						<a style="display: table; float: none; margin: 30px auto; padding: 5px 11px;" class="button-primary" href="'.admin_url('tools.php?page=d5backup-options').'" ><strong>Open the D5 Theme Options Export/Import Features</strong></a>		
			', 
			'type' => 'info'
	     );
		return $options;
	}
	add_filter( 'of_options', 'eximp_options', 9999 );



add_action( 'optionsframework_custom_scripts', 'd5options_custom_scripts' );

function d5options_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.exportimport-tab').click(function() { jQuery(window).attr('location','<?php echo admin_url('tools.php?page=d5backup-options'); ?>'); });
});
</script>

<?php
}