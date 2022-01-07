<?php
/**
 * @package Nevs Theme Typhography
 * @version 1.0.3
 */

/*
Plugin Name: Nevs Theme Typhography
Plugin URI: https://github.com/jmguevarra/nevs-theme-typography
Description: This is simple plugin that expands theme support customizer api for custom typograhy.
Version: 1.0.3
Author: Jaime I. Guevarra Jr.
Author URI: https://github.com/jmguevarra/
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: nevs-theme-typography
*/

if(  !defined('WPINC') ){
    die;
}

//define variables
define('NEVSTFONT_DIR', dirname(__FILE__));
define('NEVSTFONT_PLUGINDIR', plugin_dir_url( __FILE__ ));
define('NEVSTFONT_VERSION', '1.0.3');
define('NEVSTFONT_TEXTDOMAIN', 'nevs-theme-typography');


//require files to load
require_once 'includes/common.php';
require_once 'includes/register.php';
require_once 'includes/enqueue-scripts.php';


