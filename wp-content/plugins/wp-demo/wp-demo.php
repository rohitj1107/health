<?php
/*
*Plugin Name: WP-Demo
*Author: Rohit
*Plugin URL: http://rohit.com
*Description: This is good WP-Demo
*Author URL: https://wordpress.com
*/

if (!defined('WPINC')) {
	die;
}

if (!defined('WP_PLUGIN_VERSION')) {
	define('WP_PLUGIN_VERSION', '1.0.0');
}

if ( !defined('WPAC_PLUGIN_DIR')) {
	define('WPAC_PLUGIN_DIR', plugin_dir_url( __FILE__ ));
}

if (!function_exists('demo_one')) {
	function demo_one(){
		wp_enqueue_style('wpac-css',WPAC_PLUGIN_DIR.'assets/css/style.css');
		wp_enqueue_script('wpac-js',WPAC_PLUGIN_DIR.'assets/js/main.js','jQuery','1.0.0',true);
	}
	add_action('wp_enqueue_scripts','demo_one');
}

function wpac_settings_page_html(){
	if (!is_admin()) {
		return;
	}
	?>
		<div class="wrap">
			<form action="options.php" method="post">
				<?php
					settings_fields('wpac-settings');
					do_settings_sections('wpac-settings');
					submit_button('save Changes');
				?>
			</form>
			
		</div>	
	<?php
}

function wpac_register_menu_page(){
	add_menu_page( 'WPAC Like System','WPAC Settings','manage_options','wpac-settings','wpac_settings_page_html','dashicons-thumbs-up',30);
}
add_action('admin_menu','wpac_register_menu_page');

function wpac_plugin_settings(){
	register_setting('wpac-settings','wpac_like_btn_label');
	register_setting('wpac-settings','wpac_dislike_btn_label');

	add_settings_section('wpac_label_settings_section','WPAC Button Labels','wpac_plugin_settings_section_cb','wpac-settings');

	add_settings_field('wpac_like_lable_field','Like Button Label','wpac_like_label_field_cb','wpac-settings','wpac_label_settings_section');
}

add_action('admin_menu','wpac_plugin_settings');

function wpac_like_label_field_cb(){
	$setting = get_option('wpac_like_btn_label');
	?>
	<input type="text" name="wpac_like_btn_label" value="<?php echo isset($setting) ? esc_attr($setting) : ''; ?>">
<?php
}

function wpac_likes_table(){
	global $wpdb;

	$table_name = $wpdb->prefix . 'wpac_like_system';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
	id mediumint(9) NOT NULL AUTO_INCREMENT,
	time timestamp DEFAULT '0000-00-00 00:00:00' NOT NULL,
	user_id mediumint(9) NOT NULL,
	post_id mediumint(9) NOT NULL,
	like_count mediumint(9) NOT NULL,
	dislike_count mediumint(9) NOT NULL,
	PRIMARY KEY (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
}

register_activation_hook( __FILE__,'wpac_likes_table');

?>