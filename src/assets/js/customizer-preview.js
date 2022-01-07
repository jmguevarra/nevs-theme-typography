jQuery(document).ready(function(){
    
    wp.customize('nevstfont_primary_settings', function(setting){
        setting.bind(function(value){
            console.log(value);
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






