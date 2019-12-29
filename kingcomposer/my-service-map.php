<?php
if ( function_exists( 'kc_add_map' ) ) :
kc_add_map(
	array(
		'my-service' => array(
			'name'       => __( 'My Service', 'amazing' ),
			'title'      => __( 'My Service', 'amazing' ),
			'admin_view' => __( 'My Service', 'amazing' ),
			'icon'       => 'sl-emotsmile',
			'category'   => 'Amazing Shortcode',
			'css_box'    => true,
			'params'     => array(
				'general' => array(
					array(
						'name'        => 'my_service_section_title',
						'label'       => __( 'Section Title', 'amazing' ),
						'type'        => 'text',
						'description' => __( 'Enter Section Title', 'amazing' ),
					),
					array(
						'type'        => 'group',
						'label'       => __( 'Services', 'amazing' ),
						'name'        => 'my_services',
						'description' => __( 'Add A Services', 'amazing' ),
						'params'      => array(
							array(
								'name'        => 'video_top_text',
								'label'       => __( 'Video Upper Text', 'amazing' ),
								'type'        => 'text',
								'description' => __( 'This Will Show Up In Videos Head/Top', 'amazing' ),
							),
							
							array(
								'name'        => 'video_url',
								'label'       => __( 'Youtube Video URL', 'amazing' ),
								'type'        => 'text',
								'description' => __( 'Enter Youtube Video URL', 'amazing' ),
							),
						)
					)
				),
				'styles'  => array(
					array(
						'name'  => 'my_service_styles',
						'label' => __( 'Styles', 'amazing' ),
						'type'  => 'css',
					)
				)
			),
		),
	)
);
endif;