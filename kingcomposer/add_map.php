<?php

add_action('init', 'my_wp_init', 99 );
 
function my_wp_init(){
 
    global $kc;
    $kc->add_map(
        array(
            // 1st shortcode element
            'amp-img' => array(
                'name' => 'Image',
                'description' => 'This is my shortcode',
                'icon' => 'my-class-icon',
                'category' => 'Content',
                'params' => array(
					array(
						'name' => 'field_id',
						'label' => 'Field Label',
						'type' => 'attach_image',  // USAGE TEXT TYPE
						'value' => 'DEFAULT-CONTENT', // remove this if you do not need a default content
						'description' => 'Field Description'
					),
                	array(
                        'name' => 'my-css',
                        'label' => 'Field Label',
                        'type' => 'css',
                        //'options' => array() // Read bellow
                        'description' => 'Field Description',
                        'value' => '{`kc-css`:{`box`:{`margin|`:`100px`}}}'
                    ),
                    
                ),
                
            ),
 
            // 2nd shortcode element
 
        ) // End Arrays
    );
 
} // end my_wp_init()