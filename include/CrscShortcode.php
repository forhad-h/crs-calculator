<?php
/*
    Shortcode
*/
defined('ABSPATH') || die();

if(!class_exists('CrscShortcode')) :

    class CrscShortcode{
        function __construct() {
            add_shortcode('crs-calculator', array($this, 'crs_calculator_form'));
        }
        function crs_calculator_form($atts) {
            extract (
                shortcode_atts(array(
    
                ), $atts)
            );
    
            ob_start();
                require_once CRSC_PATH."include/front-end.php";
            return ob_get_clean();
        }
    }

endif;
new CrscShortcode();