<?php

$generator = new LoremIpsumGenerator;
$wordcount = $settings->dummy_text;
$htmlformat = $generator->getContent($wordcount);

$imagesize = $settings->dummy_image_width . 'x' . $settings->dummy_image_height;

$pixelsize = $settings->dummy_image_width . '/' . $settings->dummy_image_height;

if ($settings->dummy_image_link == 'lightbox') {
    $class = 'dummy_swipebox';
} else {
    $class = '';
}

if ($settings->dummy_image_link == 'url') {
    $url = $settings->dummy_image_url;
} else {
    $url = '#';
}

if ($settings->dummy_content == 'text' ) {
    
    echo $htmlformat;
    
} else {
    
        if ($settings->dummy_image_type == 'placeholdit' ) {
            
            if ($settings->dummy_image_link == 'url') {
                
                echo '<a class="' . $class . '" href="' . $url . '">';
                
            } elseif ($settings->dummy_image_link == 'lightbox') {
                
                echo '<a class="' . $class . '" href="http://placehold.it/' . $imagesize . '/' . $settings->bg_color . '/' . $settings->text_color . '">';
            
            }

            echo '<img src="http://placehold.it/' . $imagesize . '/' . $settings->bg_color . '/' . $settings->text_color . '">';

        } else {

            if ($settings->dummy_image_color == 'color') {
            
                if ($settings->dummy_image_link == 'url') {

                    echo '<a class="' . $class . '" href="' . $url . '">';

                } elseif ($settings->dummy_image_link == 'lightbox') {

                    echo '<a class="' . $class . '" href="http://lorempixel.com/' . $pixelsize . '">';

                }

                    echo '<img src="http://lorempixel.com/' . $pixelsize . '">';

            } else {
            
                if ($settings->dummy_image_link == 'url') {

                    echo '<a class="' . $class . '" href="' . $url . '">';

                } elseif ($settings->dummy_image_link == 'lightbox') {

                    echo '<a class="' . $class . '" href="http://lorempixel.com/g/' . $pixelsize . '">';

                }


                echo '<img src="http://lorempixel.com/g/' . $pixelsize . '">';

            }
        }
            
    echo '</a>';
}
?>