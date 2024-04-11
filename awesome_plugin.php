<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://juvo-design.de
 * @since             1.0.0
 * @package           Awesome_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Awesome Plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Requires PHP:      7.4
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       awesome-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
use Awesome_Plugin\Activator;
use Awesome_Plugin\Deactivator;
use Awesome_Plugin\Awesome_Plugin;


if (!defined('WPINC')) {
	die;
}

/**
 * Plugin absolute path
 */
define('Awesome_Plugin_PATH', plugin_dir_path(__FILE__));
define('Awesome_Plugin_URL', plugin_dir_url(__FILE__));

/**
 * Use Composer PSR-4 Autoloading
 */
require plugin_dir_path(__FILE__) . 'vendor/autoload.php';
require plugin_dir_path(__FILE__) . 'vendor/vendor-prefixed/autoload.php';

/**
 * The code that runs during plugin activation.
 */
function activate_Awesome_Plugin()
{
	Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_Awesome_Plugin()
{
	Deactivator::deactivate();
}

add_action('init', function () {
	register_extended_post_type('Awesomes');
});

register_activation_hook(__FILE__, 'activate_Awesome_Plugin');
register_deactivation_hook(__FILE__, 'deactivate_Awesome_Plugin');






/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
if (class_exists('Awesome_Plugin')) {
	$Awesome_Plugin = new Awesome_Plugin();
}
