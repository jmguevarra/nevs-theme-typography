<?php
/**
 * Filename: Client Font Generation
 * Desc: It automatically generatas the client font settings based in given value in Customizer Typography Panel.
 * 
 */

add_action('wp_head', 'clientStyle');
function clientStyle(){
    ?>

<style id="nevs-client-font" style="text/css">
    /** Imported Fonts */
    <?php 
        $primaryFontFamily = get_option('nevstfont_primary_settings');
        $primaryFontWeight = get_option('nevstfont_primaryweight_settings');
        $primaryFontStyle = get_option('nevstfont_primarystyle_settings');
        
        $fontString = 'https://fonts.googleapis.com/css2?family='.$primaryFontFamily.'&display=swap';
        echo '@import url("'. $fontString .'");';
    ?>
    /** Fonts Styling */
    body{ font-family: <?= $primaryFontFamily; ?> }
</style>

    <?php
}
