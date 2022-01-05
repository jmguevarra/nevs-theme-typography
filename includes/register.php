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
//     echo $section['settings']['default'];
//     // echo print_r($section['controls']['choices']);
// }
// echo '</pre>';



add_action('customize_register', 'nevsplug_customize_register');
function nevsplug_customize_register($customize){

    //load typography panel obj and check if its not empty
    $typography = customizerPanels(NEVSTFONT_DIR. '/includes/typography.json');
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
        $customize->add_setting($section['settings']['id'], array(
            'default'		=> $section['settings']['default'],
            'capability'    => $section['settings']['capability'],
            'type'          => $section['settings']['type']
        ));
           
        //Field
        $customize->add_control( $section['controls']['id'], array(
            'settings'	    => $section['controls']['settings'],
            'label'  	    => __($section['controls']['label'], NEVSTFONT_TEXTDOMAIN),
            'description'	=> __($section['controls']['desc'], NEVSTFONT_TEXTDOMAIN),
            'section'	    => $section['id'],
            'type'   	    => $section['controls']['type'],
            'choices'       => $section['controls']['choices']
        ));

    }

}


