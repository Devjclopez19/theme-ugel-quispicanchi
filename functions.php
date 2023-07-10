<?php
# Pagination Bootstrap
require_once dirname(__FILE__).'/inc/wp_bootstrap_pagination.php';
# Widgets propios
require_once dirname(__FILE__).'/inc/widgets.php';
# Agrega las taxonomias para los post types
require_once dirname(__FILE__).'/inc/taxonomies.php';
# Agrega los post types de noticias, convocatorias, comunicados,oficios multiples
require_once dirname(__FILE__).'/inc/posttypes.php';
# Agregar CMB2 
require_once dirname(__FILE__).'/cmb2.php';
# Queries reutilizables 
require_once dirname(__FILE__).'/inc/queries.php';
# campos personalizados 
require_once dirname(__FILE__).'/inc/custom-fields.php';
#opciones del theme
require_once dirname(__FILE__).'/inc/opciones.php';
#Funciones que se ejecutan al cargar el theme 
function ec_setup(){
    // Definir tamaños de imagenes
    add_image_size('mediano', 510, 340, true);
    add_image_size('cuadrada_mediana', 350, 350, true);
    
    // Activar imagen destacada en las paginas
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    // Menu de navegacion
    register_nav_menus(
        array(
            'menu_principal'=>esc_html__('Menu Principal','ugelthemepro'),
            'menu_footer'=>esc_html__('Menu Footer','ecreativo'),
            'menu_sticky'=>esc_html__('Menu Sticky','ugeltheme')
    ));
}
add_action('after_setup_theme','ec_setup');
/*
* Agrega la clase nav__link de bootstrap al menu principal 
*/
function ec_enlace_clases($atts,$item,$args) {
    if($args->theme_location == 'menu_principal'){
        $atts['class'] = 'menu__link';
    }
    if($args->theme_location == 'menu_sticky'){
        $atts['class'] = 'menu__link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes','ec_enlace_clases', 10,3);

function ec_enlace_items($classes,$item,$args) {
    if($args->theme_location == 'menu_principal'){
        $classes[] = 'menu__item item-1';  
    } 
    
    if($args->theme_location == 'menu_sticky') {
        $classes[] = 'menu__item item-s-1'; 
    }
     
    return $classes;
}
add_filter('nav_menu_css_class','ec_enlace_items',10,3);

//Remove JQuery migrate
 
function remove_jquery_migrate( $scripts ) {
    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
         $script = $scripts->registered['jquery'];
    if ( $script->deps ) { 
 // Check whether the script has any dependencies
 
         $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
  }
  }
  }
 add_action( 'wp_default_scripts', 'remove_jquery_migrate' );
/*
* Cargar los scripts y hojas de estilos del theme 
*/
function ec_scripts() {
    /** Styles */
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap',false,'1.0.0','all');
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap',false,'1.0.0','all');
    wp_enqueue_style('font-awesome-css',get_template_directory_uri().'/css/all.min.css',false,'5.0.0');
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css',false,'4.1.3');
    wp_enqueue_style('slick-css',get_template_directory_uri().'/css/slick.css',false,'1.0');
    wp_enqueue_style('style',get_stylesheet_uri(),array('bootstrap-css'));
    /**scripts */
    wp_enqueue_script('jquery3',get_template_directory_uri().'/js/jquery-3.3.1.slim.min.js', '1.0',true);
    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js', array('jquery3'), '1.0',true);
    wp_enqueue_script('slick',get_template_directory_uri().'/js/slick.min.js', array('jquery3'), '1.0',true);
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js', array('popper'), '1.0',true);
    wp_enqueue_script('script',get_template_directory_uri().'/js/script.js', array('jquery3'), '1.0',true);
}
/** añadir la accion de los scripts */
add_action('wp_enqueue_scripts','ec_scripts');
/** Soporte a widgtes */
add_action('widgets_init', 'ec_widgets_sidebarl');
function ec_widgets_sidebarl() {
    register_sidebar(array(
        'name'          => 'Sidebar Left',
        'id'            =>  'sidebar_left',
        'before_widget' =>  '',
        'after_widget'  =>  '',
        'before_title'  =>  '',
        'after_title'   =>  ''
    ));
    register_sidebar(array(
        'name'          => 'Sidebar Right',
        'id'            =>  'sidebar_right',
        'before_widget' =>  '',
        'after_widget'  =>  '',
        'before_title'  =>  '',
        'after_title'   =>  ''
    ));
    /** para agregar mas widgets copiar y pegar register_sidebar */
}

?>