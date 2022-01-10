/**
 *  File name: Cutomizer Interaction
 *  Desc: This file configure the settings and loaded the preview customizer.
 * 
 */


jQuery(document).ready(function(){
    
    wp.customize('nevstfont_primary_settings', function(setting){
        setting.bind(function(value){
            console.log(value);
            jQuery('.sample-option').text(value);
        });
    });

    wp.customize('nevstfont_primaryweight_settings', function(setting){
        setting.bind(function(value){
            console.log(value);
        });
    });

    wp.customize('nevstfont_primarystyle_settings', function(setting){
        setting.bind(function(value){
            console.log(value);
        });
    });
});
