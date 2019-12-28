<?php
if ( function_exists( 'kc_add_map' ) ) :
kc_add_map(
	array(
		'some_of_my_clients' => array(
			'name'       => __( 'Some Of My Clients', 'amazing' ),
			'title'      => __( 'Some Of My Clients', 'amazing' ),
			'admin_view' => __( 'Some Of My Clients', 'amazing' ),
			'icon'       => 'fa-leaf',
			'category'   => 'Amazing Shortcode',
			'priority'   => 102,
			'css_box'    => true,
			'params'     => array(
				'general' => array(
					array(
						'name'        => 'amazing_section_title',
						'label'       => __( 'Section Title', 'amazing' ),
						'type'        => 'text',
						'description' => __( 'Enter Section Title', 'amazing' ),
					),
					array(
						'type'        => 'group',
						'label'       => __( 'Button', 'amazing' ),
						'name'        => 'jd_buttons_group',
						'description' => __( 'You can add a button or a group of buttons', 'amazing' ),
						'options'     => array( 'add_button' => __( 'Add new button', 'amazing' ) ),
						'params'      => array(
							array(
								'name'        => 'jd_button_type',
								'label'       => __( 'Button type', 'amazing' ),
								'type'        => 'select',
								'options'     => array(
									'jd_black_button'      => 'Black button',
									'jd_color_button'      => 'Color button',
									'jd_white_button'      => 'White button',
									'jd_additional_button' => 'Additional button',
								),
								'description' => __( 'Select the button type', 'amazing' ),
							),
							
							array(
								'name'        => 'jd_button_link',
								'label'       => __( 'Button link', 'amazing' ),
								'type'        => 'media',
								'description' => __( 'Enter button link', 'amazing' ),
							)
						)
					)
				),
				'styles'  => array(
					array(
						'name'  => 'jd_custom_button_styles',
						'label' => __( 'Styles', 'amazing' ),
						'type'  => 'css',
					)
				)
			),
		),
	)
);
endif;