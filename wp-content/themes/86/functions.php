<?php 

//Requerendo o arquivo do Customizer

require get_template_directory(). '/inc/customizer.php';





//Scripts Folhas de Estilo

function load_scripts(){

	wp_deregister_script('jquery');

    wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", '3.3.1', true);

    wp_enqueue_script('jquery');

	  wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array('jquery'),'4.2.1',true);

	  wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css', array(),'4.2.1','all');

    wp_enqueue_script('feather-js',  'https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.js', '1.7.13', true);

	  wp_enqueue_style('featherlight', 'https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.css', array(),'1.7.13','all');

    wp_enqueue_script('main-js',  get_template_directory_uri() . '/scripts/main.js', array(), time(),'all');

	  wp_enqueue_style('template', get_template_directory_uri() . '/css/main.css', array(),time(),'all');

}



add_action('wp_enqueue_scripts','load_scripts');

add_filter('https_ssl_verify', '__return_false');



function estudio_config() {

    add_theme_support('post-thumbnails', array(
        'post',
        'page',
        'material',
        'servico',
        'slide',
    ));

	// Registrando menus

	register_nav_menus(

		array(

			'main_menu' => __('Menu Principal','estudio86'),

			'services_footer_menu' => __('Menu Rodapé - Serviços','estudio86'),

			'estudio_footer_menu' => __('Menu Rodapé - estudio ','estudio86')

		)

	);

	$args = array(

		'height' => 225,

		'width' => 1920

	);

	add_theme_support('custom-header', $args);

	add_theme_support('post-formats',array('video','image'));

	add_theme_support('title-tag');

	add_theme_support('custom-logo');	

}

add_action('after_setup_theme','estudio_config', 0);





function estudio_sidebars(){    

    register_sidebar(

        array(

            'name' => __('Sidebar rodape - 01','estudio86'),

            'id' => 'footer_01-sidebar',

            'description' => __('Sidebar 01 do Rodapé','estudio86'),

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h2 class="widget-title">',

            'after_title' => '</h2>'

        )

    );

    register_sidebar(

        array(

            'name' => __('Sidebar rodape - 02','estudio86'),

            'id' => 'footer_02-sidebar',

            'description' => __('Sidebar 02 do Rodapé','estudio86'),

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h2 class="titulo-widget">',

            'after_title' => '</h2>'

        )

    );

    register_sidebar(

        array(

            'name' => __('Sidebar rodape - 03','estudio86'),

            'id' => 'footer_03-sidebar',

            'description' => __('Sidebar 03 do Rodapé','estudio86'),

            'before_widget' => '<div class="widget-wrapper">',

            'after_widget' => '</div>',

            'before_title' => '<h2 class="titulo-widget">',

            'after_title' => '</h2>'

        )

    );

	

}

add_action('widgets_init','estudio_sidebars');

function wpa_show_permalinks( $post_link, $post ){

    if ( is_object( $post ) && $post->post_type == 'slide' ){

        $terms = wp_get_object_terms( $post->ID, 'cat_slides' );

        if( $terms ){

            return str_replace( '%cat_slides%' , $terms[0]->slug , $post_link );

        }

    }

    return $post_link;

}

add_filter( 'post_type_link', 'wpa_show_permalinks', 1, 2 );

function create_post_types() {

 // Add new taxonomy, make it hierarchical like categories

//first do the translations part for GUI

 

  $taxlabels = array(

    'name' => _x( 'cat_slides', 'taxonomy general name' ),

    'singular_name' => _x( 'cat_slide', 'taxonomy singular name' ),

    'search_items' =>  __( 'Pesquisar' ),

    'all_items' => __( 'Todas as Categorias de Slides' ),

    'parent_item' => __( 'Categoria Pai' ),

    'parent_item_colon' => __( 'Categoria Pai:' ),

    'edit_item' => __( 'Editar' ), 

    'update_item' => __( 'Atualizar' ),

    'add_new_item' => __( 'Adicionar novo' ),

    'new_item_name' => __( 'Novo Nome' ),

    'menu_name' => __( 'Categorias slides' ),

  ); 

  // Now register the taxonomy

 

  register_taxonomy('cat_slides',array('slide'), array(

    'hierarchical' => true,

    'labels' => $taxlabels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'cat_slide' ),

  ));   

  $labels = array(

    'name'                =>  'slide',

    'singular_name'       =>  'slide',

    'add_new'             =>  'Adicionar Novo',

    'add_new_item'        =>  'Adicionar Novo slide',

    'edit_item'           =>  'Editar slide',

    'new_item'            =>  'Novo slide',

    'all_items'           =>  'Todos slides',

    'view_item'           =>  'Ver slide',

    'search_items'        =>  'Pesquisar slides',

    'not_found'           =>  'Nenhum slide encontrado',

    'not_found_in_trash'  =>  'Nenhum slide no Lixo',

    'menu_name'           =>  'Slides',

  );

 

  $supports = array( 'title', 'editor', 'thumbnail' );

 

 

  $args = array(

    'labels'              => $labels,

    'public'              => true,

    'publicly_queryable'  => true,

    'show_ui'             => true,

    'show_in_menu'        => true,

    'query_var'           => true,

    'taxonomies'  => array( 'cat_slides' ),

    'capability_type'     => 'post',

    'has_archive'         => 'cat_slides',

    'hierarchical'        => false,

    'menu_position'       => 4,

    'show_in_rest'        => true,

    'supports'            => $supports,

  );

 

  register_post_type( 'slide', $args );





  // Add new taxonomy, make it hierarchical like categories

//first do the translations part for GUI

 

  $taxlabels = array(

    'name' => _x( 'cat_servicos', 'taxonomy general name' ),

    'singular_name' => _x( 'cat_servico', 'taxonomy singular name' ),

    'search_items' =>  __( 'Pesquisar' ),

    'all_items' => __( 'Todas as Categorias de servicos' ),

    'parent_item' => __( 'Categoria Pai' ),

    'parent_item_colon' => __( 'Categoria Pai:' ),

    'edit_item' => __( 'Editar' ), 

    'update_item' => __( 'Atualizar' ),

    'add_new_item' => __( 'Adicionar novo' ),

    'new_item_name' => __( 'Novo Nome' ),

    'menu_name' => __( 'Categorias servicos' ),

  ); 

  // Now register the taxonomy

 

  register_taxonomy('cat_servicos',array('servico'), array(

    'hierarchical' => true,

    'labels' => $taxlabels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'cat_servico' ),

  ));   

  $labels = array(

    'name'                =>  'Serviço',

    'singular_name'       =>  'Serviço',

    'add_new'             =>  'Adicionar Novo',

    'add_new_item'        =>  'Adicionar Novo serviço',

    'edit_item'           =>  'Editar serviço',

    'new_item'            =>  'Novo serviço',

    'all_items'           =>  'Todos serviços',

    'view_item'           =>  'Ver serviço',

    'search_items'        =>  'Pesquisar serviços',

    'not_found'           =>  'Nenhum serviço encontrado',

    'not_found_in_trash'  =>  'Nenhum serviço no Lixo',

    'menu_name'           =>  'Servicos',

  );

 

  $supports = array( 'title', 'editor', 'thumbnail', 'page-attributes' );

 

 

  $args = array(

    'labels'              => $labels,

    'public'              => true,

    'publicly_queryable'  => true,

    'show_ui'             => true,

    'show_in_menu'        => true,

    'query_var'           => true,

    'taxonomies'  => array( 'cat_servicos' ),

    'capability_type'     => 'post',

    'has_archive'         => 'cat_servicos',

    'hierarchical'        => false,

    'menu_position'       => 4,

    'show_in_rest'        => true,

    'supports'            => $supports,

  );

 

  register_post_type( 'servico', $args );
 

 // Add new taxonomy, make it hierarchical like categories

//first do the translations part for GUI

 

  $taxlabels = array(

    'name' => _x( 'cat_equipamentos', 'taxonomy general name' ),

    'singular_name' => _x( 'cat_material', 'taxonomy singular name' ),

    'search_items' =>  __( 'Pesquisar' ),

    'all_items' => __( 'Todas as Categorias de materiais' ),

    'parent_item' => __( 'Categoria Pai' ),

    'parent_item_colon' => __( 'Categoria Pai:' ),

    'edit_item' => __( 'Editar' ), 

    'update_item' => __( 'Atualizar' ),

    'add_new_item' => __( 'Adicionar novo' ),

    'new_item_name' => __( 'Novo Material' ),

    'menu_name' => __( 'Categorias materiais' ),

  ); 

  // Now register the taxonomy

 

  register_taxonomy('cat_equipamentos',array('equipamento'), array(

    'hierarchical' => true,

    'labels' => $taxlabels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'cat_equipamento' ),

  ));   

  $labels = array(

    'name'                =>  'equipamento',

    'singular_name'       =>  'equipamento',

    'add_new'             =>  'Adicionar Novo',

    'add_new_item'        =>  'Adicionar Novo equipamento',

    'edit_item'           =>  'Editar equipamento',

    'new_item'            =>  'Novo equipamento',

    'all_items'           =>  'Todos equipamentos',

    'view_item'           =>  'Ver equipamento',

    'search_items'        =>  'Pesquisar equipamentos',

    'not_found'           =>  'Nenhum equipamento encontrado',

    'not_found_in_trash'  =>  'Nenhum equipamento no Lixo',

    'menu_name'           =>  'Equipamentos',

  );

 

  $supports = array( 'title', 'editor', 'thumbnail' );

 

 

  $args = array(

    'labels'              => $labels,

    'public'              => true,

    'publicly_queryable'  => true,

    'show_ui'             => true,

    'show_in_menu'        => true,

    'query_var'           => true,

    'taxonomies'  => array( 'cat_equipamentos' ),

    'capability_type'     => 'post',

    'has_archive'         => 'cat_equipamentos',

    'hierarchical'        => false,

    'menu_position'       => 4,

    'show_in_rest'        => true,

    'supports'            => $supports,

  );

 

  register_post_type( 'equipamento', $args );

}

add_action( 'init', 'create_post_types' );

// Add new taxonomy, make it hierarchical like categories

//first do the translations part for GUI

 

$taxlabels = array(

    'name' => _x( 'cat_materiais', 'taxonomy general name' ),

    'singular_name' => _x( 'cat_material', 'taxonomy singular name' ),

    'search_items' =>  __( 'Pesquisar' ),

    'all_items' => __( 'Todas as Categorias de materiais' ),

    'parent_item' => __( 'Categoria Pai' ),

    'parent_item_colon' => __( 'Categoria Pai:' ),

    'edit_item' => __( 'Editar' ), 

    'update_item' => __( 'Atualizar' ),

    'add_new_item' => __( 'Adicionar novo' ),

    'new_item_name' => __( 'Novo Material' ),

    'menu_name' => __( 'Categorias materiais' ),

  ); 

  // Now register the taxonomy 

  register_taxonomy('cat_materiais',array('material'), array(

    'hierarchical' => true,

    'labels' => $taxlabels,

    'show_ui' => true,

    'show_admin_column' => true,

    'query_var' => true,

    'rewrite' => array( 'slug' => 'cat_material' ),

  ));   

  $labels = array(

    'name'                =>  'Material',

    'singular_name'       =>  'Material',

    'add_new'             =>  'Adicionar Novo',

    'add_new_item'        =>  'Adicionar Novo material',

    'edit_item'           =>  'Editar material',

    'new_item'            =>  'Novo material',

    'all_items'           =>  'Todos materiais',

    'view_item'           =>  'Ver material',

    'search_items'        =>  'Pesquisar materiais',

    'not_found'           =>  'Nenhum material encontrado',

    'not_found_in_trash'  =>  'Nenhum material no Lixo',

    'menu_name'           =>  'Materiais',

  );

 

  $supports = array( 'title', 'editor', 'thumbnail' );

 

 

  $args = array(

    'labels'              => $labels,

    'public'              => true,

    'publicly_queryable'  => true,

    'show_ui'             => true,

    'show_in_menu'        => true,

    'query_var'           => true,

    'taxonomies'  => array( 'cat_materiais' ),

    'capability_type'     => 'post',

    'has_archive'         => 'cat_materiais',

    'hierarchical'        => false,

    'menu_position'       => 4,

    'show_in_rest'        => true,

    'supports'            => $supports,

  );

 

  register_post_type( 'material', $args );