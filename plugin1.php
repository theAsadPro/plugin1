<?php
/**
 * Plugin Name:       Plugin1
 * Plugin URI:        https://wpyour.com/plugins/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            The AsadPro Team
 * Author URI:        https://wpyour.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://wpyour.com/my-plugin/
 * Text Domain:       plugin1
 * Domain Path:       /languages
 */

//Define Plugin Path
define( 'PLUGIN1_URL_PATH', plugins_url( '/', __FILE__ ) );

//Define Plugin Folder Path
define( 'PLUGIN1_FOLDER_PATH', plugin_dir_path( __FILE__ ) );

//Register Activation Hook
function plugin1_activation_hook() {
    register_activation_hook( __FILE__, 'plugin1_activation_hook' );
}

//Register Deactivation Hook
function plugin1_deactivation_hook() {
    register_deactivation_hook( __FILE__, 'plugin1_deactivation_hook' );
}

//Load Plugin Text Domain
function plugin1_load_textdomain() {
    load_plugin_textdomain( 'plugin1', false, dirname( __FILE__ ) . '/languages' );
}
add_action( 'plugins_loaded', 'plugin1_load_textdomain' );

function plugin_is_loaded() {
    if ( loaded() == true ) {
        return "Plugin is successfully loaded";
    }
    return false;
}
function loaded() {
    return true;
}