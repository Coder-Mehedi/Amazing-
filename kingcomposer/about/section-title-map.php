<?php
if ( function_exists( 'kc_add_map' ) ) :
	kc_add_map(
		array(
			'about_section_title' => array(
				'name'       => __( 'Section title', 'amazing' ),
				'title'      => __( 'Section title', 'amazing' ),
				'admin_view' => __( 'Section title', 'amazing' ),
				'icon'       => 'lester-element',
				'category'   => 'Amazing Shortcode',
				'css_box'    => true,
				'params'     => array(
					'general' => array(
						array(
							'name'    => 'amazing_title_color',
							'label'   => __( 'Title color', 'amazing' ),
							'type'    => 'radio',
							'options' => array(
								'black-section-title' => 'Black title',
								'white-section-title' => 'White title',
							),
							'value'   => 'black-section-title'
						),
						array(
							'name'  => 'about_section_title',
							'label' => __( 'Section title', 'amazing' ),
							'type'  => 'text',
							'value' => 'Section title',
						),
					),
					'styles'  => array(
						array(
							'name'  => 'my-css',
							'label' => __( 'Styles', 'amazing' ),
							'type' => 'css',
							'value' => '{`kc-css`:{`any`:{`typography`:{`font-size|`:`125px`,`font-family|`:`Roboto`,`text-align|`:`center`}}}}'						)
					)
				)
			),
		)
	);
endif;
