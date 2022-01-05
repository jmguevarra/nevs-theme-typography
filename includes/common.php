<?php
/*
 * File Name: Common Function
 * Desc: it holds the common and simple function used in this plugin
 *  
 */ 


function customizerPanels($filepath){
    if(!file_exists($filepath)){ return; }

    $panelJSONObj = file_get_contents($filepath);
    $panelObj = json_decode($panelJSONObj, true);

    return $panelObj;
}

