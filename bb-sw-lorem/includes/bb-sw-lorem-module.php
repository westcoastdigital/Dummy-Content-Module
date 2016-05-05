<?php


class SWLoremClass extends FLBuilderModule {

    public function __construct()
    {
        
        parent::__construct(array(
            'name'              => __( 'Dummy Content', 'fl-builder' ),
            'description'       => __( 'Display dummy content in Beaver Builder', 'fl-builder' ),
            'category'          => __( 'Wireframing', 'fl-builder' ),
            'partial_refresh'   => true,
            'dir'               => SW_LOREM_MODULE_DIR . '/',
            'url'               => SW_LOREM_MODULE_URL . '/',
        ));
        
        $this->add_js( 'jquery.swipebox.min', $this->url . 'js/jquery.swipebox.min.js', array(), '', true ); 
        $this->add_css( 'swipebox.min', $this->url . 'css/swipebox.min.css' );
        
    }    
    
}

FLBuilder::register_module( 'SWLoremClass', array(
    
    'content-tab'      => array(
        
        'title'         => __( 'Content', 'fl-builder' ),
        'sections'      => array( 
            
              'content'  => array(
                'title'         => __( 'Content', 'fl-builder' ),
                'fields'        => array(
                    
                    'dummy_content' => array(
                        'type'          => 'select',
                        'label'         => __( 'Choose Content Type', 'fl-builder' ),
                        'default'       => 'image',
                        'options'       => array(
                            'text'   => __( 'Text', 'fl-builder' ),
                            'image'   => __( 'Image', 'fl-builder' ),
                        ),
                        'toggle'        => array(
                            'text'      => array (
                                'fields'    => array( 'dummy_text' ),
                            ),
                            'image'      => array (
                                'fields'    => array( 'dummy_image_width', 'dummy_image_height', 'text_color', 'bg_color', 'dummy_image_type' ),
                            ),
                        ),
                    ), // end dummy_content
                    
                    'dummy_text' => array(
                        'type'          => 'text',
                        'label'         => __( 'Number of Words', 'fl-builder' ),
						'default'       => '50',
						'maxlength'     => '3',
						'size'          => '5',   
                        'help'          => __( 'Paragraphs are automatically generated from the content', 'fl-builder' ),
                    ), // end dummy_text
                    
                    'dummy_image_type' => array(
                        'type'          => 'select',
                        'label'         => __( 'Choose Image Type', 'fl-builder' ),
                        'default'       => 'placeholdit',
                        'options'       => array(
                            'placeholdit'   => __( 'Placeholder', 'fl-builder' ),
                            'lorempixel'   => __( 'Image', 'fl-builder' ),
                        ),
                        'toggle'        => array(
                            'placeholdit'      => array (
                                'fields'    => array( 'dummy_image_width', 'dummy_image_height', 'text_color', 'bg_color' ),
                            ),
                            'lorempixel'      => array (
                                'fields'    => array( 'dummy_image_width', 'dummy_image_height', 'dummy_image_color' ),
                            ),
                        ),
                    ), // end dummy_image_type
                    
                    'dummy_image_width' => array(
                        'type'          => 'text',
                        'label'         => __( 'Image Width', 'fl-builder' ),
						'default'       => '350',
						'maxlength'     => '4',
						'size'          => '5', 
                        'description'   => 'px',
                    ), // end dummy_image_width
                    
                    'dummy_image_height' => array(
                        'type'          => 'text',
                        'label'         => __( 'Image Height', 'fl-builder' ),
						'default'       => '150',
						'maxlength'     => '4',
						'size'          => '5',
                        'description'   => 'px',                       
                    ), // end dummy_image_height   
                    
                    'dummy_image_color' => array(
                        'type'          => 'select',
                        'label'         => __( 'Force Black & White', 'fl-builder' ),
                        'default'       => 'greyscale',
                        'options'       => array(
                            'greyscale'   => __( 'Yes', 'fl-builder' ),
                            'color'   => __( 'No', 'fl-builder' ),
                        ),
                    ), // end dummy_image_color
                    
                    'dummy_image_link' => array(
                        'type'          => 'select',
                        'label'         => __( 'Choose Image Link', 'fl-builder' ),
                        'default'       => 'url',
                        'options'       => array(
                            'url'   => __( 'URL', 'fl-builder' ),
                            'lightbox'   => __( 'Lightbox', 'fl-builder' ),
                            'none'   => __( 'None', 'fl-builder' ),
                        ),
                        'toggle'        => array(
                            'url'      => array (
                                'fields'    => array( 'dummy_image_url' ),
                            ),
                        ),
                    ), // end dummy_image_link
                    
                    'dummy_image_url' => array(
                        'type'          => 'link',
                        'label'         => __( 'Choose Image Link', 'fl-builder' ),
                    ), // end dummy_image_url
                    
					'text_color'    => array(
						'type'          => 'color',
						'label'         => __('Text Color', 'fl-builder'),
						'default'       => '969696',
						'show_reset'    => true
					), // end text_color        
                    
					'bg_color'    => array(
						'type'          => 'color',
						'label'         => __('Background Color', 'fl-builder'),
						'default'       => 'cccccc',
						'show_reset'    => true
					), // end bg_color               
                    
                    
                ) // end fields
                  
            ), // end content
            
        ), // end sections
        
    ), // end content-tab

    
) ); 