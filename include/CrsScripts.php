<?php

defined('ABSPATH') || die();

if(!class_exists(CrsScripts)) :
    class CrsScripts {
        function __construct() {
            add_action('wp_enqueue_scripts', array($this, 'crs_all_assets'));
        }

        function crs_all_assets() {
            wp_enqueue_script( 'crs-main-js', CRSC_URI . '/assets/js/main.js', array(), CRSC_VERSION, true );
        }
    }
endif;
new CrsScripts();