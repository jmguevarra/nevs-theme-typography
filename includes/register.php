<?php
/**
 * File Name: Register Panels
 * Desc: It registers panels in customizer API
 * 
 */

// $typography = customizerPanels(NEVSTFONT_DIR. '/includes/typography.json');
// if(empty($typography)){ return; }
// echo '<pre>';
// foreach($typography['sections'] as $section){
//     //echo print_r($section['settings']);
//     //Field Settings
//     foreach($section['settings'] as $setting){
//         echo print_r($setting);
//         echo $setting["id"];
//     }
// }
// echo '</pre>';


add_action('customize_register', 'nevsplug_customize_register');
function nevsplug_customize_register($customize){

    //load typography panel obj and check if its not empty
    $typography = customizerPanels(NEVSTFONT_DIR . '\includes\typography.json');
    if(empty($typography)){ return; }

	
	$customize->add_panel('nevsplug_typography_panel', array(
		'title' 		=>	__('Typography', NEVSTFONT_TEXTDOMAIN),
		'description' 	=>	__('Theme Font Settings', NEVSTFONT_TEXTDOMAIN),
		'priority'		=>	'100'
	));


    // ********************************* /
	//	Typography Section with fields
	// ********************************* /
    foreach($typography['sections'] as $section){
        //Sections
        $customize->add_section($section['id'], array(
            'title'			=>	__($section['title'], NEVSTFONT_TEXTDOMAIN),
            'description'	=>	__($section['desc'], NEVSTFONT_TEXTDOMAIN),
            'priority'		=>	100,
            'panel'			=> $section['panel']
        ));


        //Field Settings
        foreach($section['settings'] as $setting){
            $customize->add_setting($setting['id'], array(
                'default'		=> $setting['default'],
                'capability'    => $setting['capability'],
                'type'          => $setting['type'],
                'transport'     => $setting['transport']
            ));
        }

        //Field
        foreach($section['controls'] as $field){
            $customize->add_control( $field['id'], array(
                'settings'	    => $field['settings'],
                'label'  	    => __($field['label'], NEVSTFONT_TEXTDOMAIN),
                'description'	=> __($field['desc'], NEVSTFONT_TEXTDOMAIN),
                'section'	    => $field['section'],
                'type'   	    => $field['type'],
                'choices'       => $field['choices']
            ));
        }

    }

}


