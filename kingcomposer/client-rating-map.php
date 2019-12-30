<?php
if ( function_exists( 'kc_add_map' ) ) :
kc_add_map(
	array(
		'client-rating' => array(
			'name'       => __( 'Client Rating', 'amazing' ),
			'title'      => __( 'Client Rating', 'amazing' ),
			'admin_view' => __( 'Client Rating', 'amazing' ),
			'icon'       => 'fa-leaf',
			'category'   => 'Amazing Shortcode',
			'css_box'    => true,
			'params'     => array(
				'general' => array(
					array(
						'name'        => 'client_rating_title',
						'label'       => __( 'Section Title', 'amazing' ),
						'type'        => 'text',
						'description' => __( 'Enter Section Title', 'amazing' ),
					),
					array(
						'type'        => 'group',
						'label'       => __( 'Reviews', 'amazing' ),
						'name'        => 'amazing_reviews',
						'description' => __( 'Add a Review', 'amazing' ),
						
						'params'      => array(
							array(
								'name'        => 'client_name_who_rates',
								'label'       => __( 'Client Name Who Rates', 'amazing' ),
								'type'        => 'text',
								'description' => __( 'Enter Client Who Rate This', 'amazing' ),
							),
							array(
								'name'        => 'client_logo',
								'label'       => __( 'Client Company Logo', 'amazing' ),
								'type'        => 'attach_image_url',
								'description' => __( 'Client Company Logo', 'amazing' ),
							),
							array(
								'name'        => 'client_rating_text',
								'label'       => __( 'Client Review Text', 'amazing' ),
								'type'        => 'textarea',
								'description' => __( 'Enter Review Text', 'amazing' ),
							),
						)
					),
					array(
						'type'        => 'group',
						'label'       => __( 'More Reviews On', 'amazing' ),
						'name'        => 'amazing_more_reviews',				
						'params'      => array(
							array(
								'name'        => 'client_logo',
								'label'       => __( 'Client Company Logo', 'amazing' ),
								'type'        => 'attach_image_url',
								'description' => __( 'Client Company Logo', 'amazing' ),
							),
							array(
								'name'        => 'client_company_url',
								'label'       => __( 'Client Company URL', 'amazing' ),
								'type'        => 'text',
								'description' => __( 'Enter Company Website URL', 'amazing' ),
							),
						)
					)
				),
				'styles'  => array(
					array(
						'name'  => 'client_rating_styles',
						'label' => __( 'Styles', 'amazing' ),
						'type'  => 'css',
					)
				)
			),
		),
	)
);
endif;