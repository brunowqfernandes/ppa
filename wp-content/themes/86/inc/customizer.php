<?php

function estudio_customizer($wp_customize){	
	
	//Página Inicial
		$wp_customize->add_section(
			'sec_home', array(
				'title' => __('Pagina inicial','estudio86'),
				'description' =>__('Imagens e textos da página inicial','estudio86')
			)
		);
		$wp_customize->add_setting(
			'set_home_conheca_desc',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_home',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_home_conheca_desc',array(
				'label' => 'Texto sessão Sobre',
				'section' => 'sec_home',
				'type' => 'textarea'
			)
		);

		$wp_customize->add_setting(
			'set_home_conheca_img1', array(
		        'transport'         => 'refresh',
		        'height'         => 325,
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
				$wp_customize, 'set_home_conheca_img1', array(
					'label'             => __('Imagem 01 Sessão sobre', 'estudio86'),
			        'section'           => 'sec_home',
			        'settings'          => 'set_home_conheca_img1',    
			    )
			)
	    );
	    $wp_customize->add_setting(
			'set_home_conheca_img2', array(
		        'transport'         => 'refresh',
		        'height'         => 325,
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
				$wp_customize, 'set_home_conheca_img2', array(
					'label'             => __('Imagem 02 Sessão sobre', 'estudio86'),
			        'section'           => 'sec_home',
			        'settings'          => 'set_home_conheca_img2',    
			    )
			)
	    );
	    $wp_customize->add_setting(
			'set_home_conheca_img3', array(
		        'transport'         => 'refresh',
		        'height'         => 325,
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
				$wp_customize, 'set_home_conheca_img3', array(
					'label'             => __('Imagem 03 Sessão sobre', 'estudio86'),
			        'section'           => 'sec_home',
			        'settings'          => 'set_home_conheca_img3',    
			    )
			)
	    );
	    $wp_customize->add_setting(
			'set_home_conheca_imgGrande', array(
		        'transport'         => 'refresh',
		        'height'         => 325,
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
				$wp_customize, 'set_home_conheca_imgGrande', array(
					'label'             => __('Imagem Grande Sessão sobre', 'estudio86'),
			        'section'           => 'sec_home',
			        'settings'          => 'set_home_conheca_imgGrande',    
			    )
			)
	    );	    

		$wp_customize->add_setting(
			'set_home_equip_img', array(
		        'transport'         => 'refresh',
		        'height'         => 325,
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
				$wp_customize, 'set_home_equip_img', array(
					'label'             => __('Imagem sessão Aluguel de equipamentos', 'estudio86'),
			        'section'           => 'sec_home',
			        'settings'          => 'set_home_equip_img',    
			    )
			)
	    );
	    $wp_customize->add_setting(
			'set_home_equip_desc',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_home',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_home_equip_desc',array(
				'label' => 'Texto Aluguel de equipamentos',
				'section' => 'sec_home',
				'type' => 'textarea'
			)
		);
	//

	//Página Sobre
		$wp_customize->add_section(
			'sec_sobre', array(
				'title' => __('Pagina Sobre','estudio86'),
				'description' =>__('Imagens e textos da página Sobre','estudio86')
			)
		);
		$wp_customize->add_setting(
			'set_sobre_sobre_desc',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_sobre',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_sobre_sobre_desc',array(
				'label' => 'Texto Quem é Adriana Pastore?',
				'section' => 'sec_sobre',
				'type' => 'textarea'
			)
		);

		$wp_customize->add_setting(
			'set_sobre_sobre_img', array(
		        'transport'         => 'refresh',
		        'height'         => 325,
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
				$wp_customize, 'set_sobre_sobre_img', array(
					'label'             => __('Imagem Sessão sobre', 'estudio86'),
			        'section'           => 'sec_sobre',
			        'settings'          => 'set_sobre_sobre_img',    
			    )
			)
	    );
	    $wp_customize->add_setting(
			'set_sobre_02_desc',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_sobre',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_sobre_02_desc',array(
				'label' => 'Texto Fisioterapia Traumato-ortopédica',
				'section' => 'sec_sobre',
				'type' => 'textarea'
			)
		);
	//

	//Equipamentos
		$wp_customize->add_section(
			'sec_equipamentos', array(
				'title' => __('Equipamentos para aluguel','estudio86'),
				'description' =>__('Textos e imagens da página Equipamentos para aluguel','estudio86')
			)
		);
		$wp_customize->add_setting(
			'set_equip_sobre_img', array(
		        'transport'         => 'refresh',
		        'height'         => 325,
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( 
				$wp_customize, 'set_equip_sobre_img', array(
					'label'             => __('Imagem Topo', 'estudio86'),
				    'section'           => 'sec_equipamentos',
				    'settings'          => 'set_equip_sobre_img',    
			    )
			)
	    );
	//

	//Informações de contato
		$wp_customize->add_section(
			'sec_contact', array(
				'title' => __('Contato','estudio86'),
				'description' =>__('Informações de contato','estudio86')
			)
		);
		$wp_customize->add_setting(
			'set_contact_phone',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_contact',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_contact_phone',array(
				'label' => 'Telefones de contato',
				'section' => 'sec_contact',
				'type' => 'text'
			)
		);		
		$wp_customize->add_setting(
			'set_contact_fb',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_contact',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_contact_fb',array(
				'label' => 'Facebook',
				'section' => 'sec_contact',
				'type' => 'text'
			)
		);
		$wp_customize->add_setting(
			'set_contact_in',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_contact',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_contact_in',array(
				'label' => 'LinkedIn',
				'section' => 'sec_contact',
				'type' => 'text'
			)
		);
		$wp_customize->add_setting(
			'set_contact_ig',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_contact',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_contact_ig',array(
				'label' => 'Instagram',
				'section' => 'sec_contact',
				'type' => 'text'
			)
		);
		$wp_customize->add_setting(
			'set_contact_whatsapp',array(
				'type' => 'theme_mod',
				'default' => '',
				'section' => 'sec_contact',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control(
			'set_contact_whatsapp',array(
				'label' => 'Whatasapp sem hífen e espaço',
				'section' => 'sec_contact',
				'type' => 'text'
			)
		);
	//


	/*$wp_customize->add_setting(
		'set_cat2_img',array(
			'type' => 'theme_mod',
			'default' => '',
		)
	);	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
           $wp_customize,
           'cat2',
           array(
               'label'      => __( 'Imagem segunda categoria', 'estudio86' ),
               'section'    => 'sec_contact',
               'settings'   => 'set_cat2_img'
           )
       )
	);*/
}

add_action('customize_register', 'estudio_customizer');

function estudio_sanitize_select ($input, $setting ){
	$input = sanitize_key($input);

	$choices = $setting->manager->get_control($setting->id)->choices;

	return (array_key_exists ($input,$choices) ? $input : $setting->default );
}