<?php

$generator = new LoremIpsumGenerator;
$wordcount = $settings->dummy_text;
$htmlformat = $generator->getContent($wordcount);

$imagesize = $settings->dummy_image_width . 'x' . $settings->dummy_image_height;

$pixelsize = $settings->dummy_image_width . '/' . $settings->dummy_image_height;

if ($settings->dummy_content == 'text' ) {
    
    echo $htmlformat;
    
} else {
    
    if ($settings->dummy_image_type == 'placeholdit' ) {
        
        echo '<img src="http://placehold.it/' . $imagesize . '/' . $settings->bg_color . '/' . $settings->text_color . '">';
        
    } else {
        
        if ($settings->dummy_image_color == 'color') {
            
            echo '<img src="http://lorempixel.com/' . $pixelsize . '">';
            
        } else {
        
            echo '<img src="http://lorempixel.com/g/' . $pixelsize . '">';
            
        }
    }
}
?>