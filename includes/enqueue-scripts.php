<?php
/*
 * Filename: Enqueue Scripts
 * Desc: All related scripts and styles of this plugin are enqueued here. 
 * 
 * 
 */ 


add_action('customize_preview_init', 'nevstFont_enqueueScripts');
function nevstFont_enqueueScripts(){
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'nevst-customizer-preview', NEVSTFONT_PLUGINDIR. 'src/assets/js/customizer-preview.js', array('customize-preview', 'jquery'), NEVSTFONT_VERSION, true);
}