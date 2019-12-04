<?php
/*
    Plugin Name: CRS Calculator
    Description: A simple Calculator for Calculate <strong>CRS</strong> points to determine a good candidate for Permanent Residence in Canada. Shortcode is <strong>[crs-calculator]</strong>.
    Version: 1.0.0
    Author: Forhad Hosain
    Text Domain: crs-calculator
*/

defined('ABSPATH') || die();

// path constant
define('CRSC_PATH', dirname(__FILE__) . "/");
// uri constant
define('CRSC_URI', plugin_dir_url(__FILE__));

// version constant
define('CRSC_VERSION', "1.0.0");

//shortcode
require_once CRSC_PATH."include/CrscShortcode.php";

//assets
require_once CRSC_PATH."include/CrsScripts.php";
?>