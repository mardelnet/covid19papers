<?php
add_filter( 'show_admin_bar', '__return_false');
add_filter( 'use_block_editor_for_post', '__return_false' );
add_action( 'init', 'create_posttype' );
add_action( 'template_redirect', 'wpse_45164_redirect_press' );
add_action( 'init', 'create_custom_taxonomies', 0 );
add_action('init', 'myprefix_unregister_tags');
add_action( 'init', 'wpse120418_unregister_categories' );
add_theme_support( 'post-thumbnails' );


function myprefix_unregister_tags() {
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
function wpse120418_unregister_categories() {
    register_taxonomy( 'category', array() );
}
function wpse_45164_redirect_press() {
    if ( ! is_singular( 'post' ) )
      return;
    wp_redirect( get_permalink( 20327 ), 301 );
      exit;
}
function create_posttype() {
    register_post_type( 'registros',
        array(
            'labels' => array(
                'name' => __( 'Registros' ),
                'singular_name' => __( 'Registro' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'papers'),
            'show_in_rest' => true,
        )
    );
    register_post_type( 'datasets',
        array(
            'labels' => array(
                'name' => __( 'Datasets' ),
                'singular_name' => __( 'Dataset' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'datasets'),
            'show_in_rest' => true,
        )
    );
}
function create_custom_taxonomies() {
  register_taxonomy('autores',array('registros'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Autores', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'autores' ),
  ));
  register_taxonomy('fuente',array('registros'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Fuente', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'fuente' ),
  ));
  register_taxonomy('basedatos',array('registros'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Base de Datos', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'basedatos' ),
  ));
  register_taxonomy('palabrasclave',array('registros'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Palabras Clave', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'palabrasclave' ),
  ));
  register_taxonomy('tipoacceso',array('registros'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Tipo de Acceso', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipoacceso' ),
  ));
  register_taxonomy('anio',array('registros'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Año de Publicación', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'anio' ),
  ));
  register_taxonomy('area-tematica',array('registros'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Área Temática', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'area-tematica' ),
  ));
  register_taxonomy('categoria-tematica',array('registros'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Categoría Temática', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categoria-tematica' ),
  ));
  register_taxonomy('dataset_publisher_name',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Publisher Name', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dataset_publisher_name' ),
  ));
  register_taxonomy('dataset_superTheme',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Supertheme', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dataset_superTheme' ),
  ));
  register_taxonomy('dataset_accrualPeriodicity',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Periodicity', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dataset_accrualPeriodicity' ),
  ));
  register_taxonomy('dataset_temporal',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Temporal', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dataset_temporal' ),
  ));
  register_taxonomy('dataset_license',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'License', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dataset_license' ),
  ));
  register_taxonomy('distribution_format',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Distribution Format', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'distribution_format' ),
  ));
  register_taxonomy('field_type',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Field Type', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'field_type' ),
  ));
  register_taxonomy('dataset_keyword',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Dataset Keyword', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dataset_keyword' ),
  ));
  register_taxonomy('dataset_language',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Dataset Language', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dataset_language' ),
  ));
  register_taxonomy('dataset_spatial',array('datasets'), array(
    'hierarchical' => true,
    'labels' => array('name' => _x( 'Dataset Spatial', 'taxonomy general name' )),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dataset_spatial' ),
  ));
}
function template_chooser($template) {
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'registro' )
  {
    return locate_template('search.php');  //  redirect to archive-search.php
  }
  return $template;
}
add_filter('template_include', 'template_chooser');
if ( !function_exists( 'wpex_pagination' ) ) {

	function wpex_pagination() {

		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';

		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
}
?>
