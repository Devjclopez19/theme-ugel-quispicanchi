<?php
// posttype noticias
function ec_posttype_noticias() {
    $labels = array(
        'name'                  => _x( 'Noticias', 'ec' ),
        'singular_name'         => _x( 'Noticia',  'ec' ),
        'menu_name'             => _x( 'Noticias', 'Admin Menu text', 'ec' ),
        'name_admin_bar'        => _x( 'Noticia', 'Add New on Toolbar', 'ec' ),
        'add_new'               => __( 'Añadir Nueva', 'ec' ),
        'add_new_item'          => __( 'Añadir Nueva Noticia', 'ec' ),
        'new_item'              => __( 'Nueva Noticia', 'ec' ),
        'edit_item'             => __( 'Editar Noticia', 'ec' ),
        'view_item'             => __( 'Ver Noticia', 'ec' ),
        'all_items'             => __( 'Todas las Noticias', 'ec' ),
        'search_items'          => __( 'Buscar Noticias', 'ec' ),
        'parent_item_colon'     => __( 'Padre Noticias:', 'ec' ),
        'not_found'             => __( 'No se encontraron Noticias.', 'ec' ),
        'not_found_in_trash'    => __( 'No se encontraron Noticias en la Papelera', 'ec' ),
        'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ec' ),
        'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'archives'              => _x( 'Archivo de Noticias', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ec' ),
        'insert_into_item'      => _x( 'Insertar en Noticias', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ec' ),
        'uploaded_to_this_item' => _x( 'Cargadas En Noticia', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ec' ),
        'filter_items_list'     => _x( 'Filtrar Lista de Noticias', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ec' ),
        'items_list_navigation' => _x( 'Noticias Cocina navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ec' ),
        'items_list'            => _x( 'Lista de Noticias', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ec' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'noticias' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-welcome-widgets-menus',
        // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
        'rest_base'          => 'noticias'
    );
 
    register_post_type( 'noticias', $args );
} 
add_action( 'init', 'ec_posttype_noticias');
// posttype comunicados
function ec_posttype_comunicados() {
    $labels = array(
        'name'                  => _x( 'Comunicados', 'ec' ),
        'singular_name'         => _x( 'Comunicado',  'ec' ),
        'menu_name'             => _x( 'Comunicados', 'Admin Menu text', 'ec' ),
        'name_admin_bar'        => _x( 'Comunicado', 'Add New on Toolbar', 'ec' ),
        'add_new'               => __( 'Añadir Nuevo', 'ec' ),
        'add_new_item'          => __( 'Añadir Nuevo Comunicado', 'ec' ),
        'new_item'              => __( 'Nuevo Comunicado', 'ec' ),
        'edit_item'             => __( 'Editar Comunicado', 'ec' ),
        'view_item'             => __( 'Ver Comunicado', 'ec' ),
        'all_items'             => __( 'Todos los Comunicados', 'ec' ),
        'search_items'          => __( 'Buscar Comunicados', 'ec' ),
        'parent_item_colon'     => __( 'Padre Comunicados:', 'ec' ),
        'not_found'             => __( 'No se encontraron Comunicados.', 'ec' ),
        'not_found_in_trash'    => __( 'No se encontraron Comunicados en la Papelera', 'ec' ),
        'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ec' ),
        'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'archives'              => _x( 'Archivo de Comunicados', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ec' ),
        'insert_into_item'      => _x( 'Insertar en Comunicados', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ec' ),
        'uploaded_to_this_item' => _x( 'Cargadas En Comunicado', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ec' ),
        'filter_items_list'     => _x( 'Filtrar Lista de Comunicados', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ec' ),
        'items_list_navigation' => _x( 'Comunicados Cocina navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ec' ),
        'items_list'            => _x( 'Lista de Comunicados', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ec' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'comunicados' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-clipboard',
        // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
        'rest_base'          => 'comunicados'
    );
 
    register_post_type( 'comunicados', $args );
} 
add_action( 'init', 'ec_posttype_comunicados');
// posttype oficios multiples
// function ec_posttype_oficios() {
//     $labels = array(
//         'name'                  => _x( 'Oficios Múltiples', 'ec' ),
//         'singular_name'         => _x( 'Oficio Múltiple',  'ec' ),
//         'menu_name'             => _x( 'Oficios Múltiples', 'Admin Menu text', 'ec' ),
//         'name_admin_bar'        => _x( 'Oficio', 'Add New on Toolbar', 'ec' ),
//         'add_new'               => __( 'Añadir Nuevo', 'ec' ),
//         'add_new_item'          => __( 'Añadir Nuevo Oficio Múltiple', 'ec' ),
//         'new_item'              => __( 'Nuevo oficio', 'ec' ),
//         'edit_item'             => __( 'Editar oficio', 'ec' ),
//         'view_item'             => __( 'Ver oficio', 'ec' ),
//         'all_items'             => __( 'Todos los oficios', 'ec' ),
//         'search_items'          => __( 'Buscar oficios', 'ec' ),
//         'parent_item_colon'     => __( 'Padre oficios:', 'ec' ),
//         'not_found'             => __( 'No se encontraron oficios.', 'ec' ),
//         'not_found_in_trash'    => __( 'No se encontraron oficios en la Papelera', 'ec' ),
//         'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ec' ),
//         'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ec' ),
//         'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ec' ),
//         'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ec' ),
//         'archives'              => _x( 'Archivo de oficios', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ec' ),
//         'insert_into_item'      => _x( 'Insertar en oficios', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ec' ),
//         'uploaded_to_this_item' => _x( 'Cargadas En oficio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ec' ),
//         'filter_items_list'     => _x( 'Filtrar Lista de oficios', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ec' ),
//         'items_list_navigation' => _x( 'oficios Cocina navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ec' ),
//         'items_list'            => _x( 'oficios Cocina lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ec' ),
//     );
 
//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'oficios' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'menu_icon'          => 'dashicons-text-page',
//         // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
//         'hierarchical'       => false,
//         'menu_position'      => 5,
//         'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt'),
//         'show_in_rest'       => true,
//         'rest_base'          => 'oficios'
//     );
 
//     register_post_type( 'oficios', $args );
// } 
// add_action( 'init', 'ec_posttype_oficios');
// posttype convocatorias
function ec_posttype_convocatorias() {
    $labels = array(
        'name'                  => _x( 'Convocatorias', 'ec' ),
        'singular_name'         => _x( 'Convocatoria',  'ec' ),
        'menu_name'             => _x( 'Convocatorias', 'Admin Menu text', 'ec' ),
        'name_admin_bar'        => _x( 'Convocatoria', 'Add New on Toolbar', 'ec' ),
        'add_new'               => __( 'Añadir Nueva', 'ec' ),
        'add_new_item'          => __( 'Añadir Nueva Convocatoria', 'ec' ),
        'new_item'              => __( 'Nueva Convocatoria', 'ec' ),
        'edit_item'             => __( 'Editar Convocatoria', 'ec' ),
        'view_item'             => __( 'Ver Convocatoria', 'ec' ),
        'all_items'             => __( 'Todas las Convocatorias', 'ec' ),
        'search_items'          => __( 'Buscar Convocatorias', 'ec' ),
        'parent_item_colon'     => __( 'Padre Convocatorias:', 'ec' ),
        'not_found'             => __( 'No se encontraron Convocatorias.', 'ec' ),
        'not_found_in_trash'    => __( 'No se encontraron Convocatorias en la Papelera', 'ec' ),
        'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ec' ),
        'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'archives'              => _x( 'Archivo de Convocatorias', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ec' ),
        'insert_into_item'      => _x( 'Insertar en Convocatorias', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ec' ),
        'uploaded_to_this_item' => _x( 'Cargadas En Convocatoria', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ec' ),
        'filter_items_list'     => _x( 'Filtrar Lista de Convocatorias', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ec' ),
        'items_list_navigation' => _x( 'Convocatorias Cocina navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ec' ),
        'items_list'            => _x( 'Convocatorias Cocina lista', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ec' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'convocatorias' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-megaphone',
        // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
        'rest_base'          => 'convocatorias'
    );

    register_post_type( 'convocatorias', $args );
}
add_action( 'init', 'ec_posttype_convocatorias');
// posttype cotizaciones
function ec_posttype_cotizaciones() {
    $labels = array(
        'name'                  => _x( 'Cotizaciones', 'ec' ),
        'singular_name'         => _x( 'Cotización',  'ec' ),
        'menu_name'             => _x( 'Cotizaciones', 'Admin Menu text', 'ec' ),
        'name_admin_bar'        => _x( 'Cotizacione', 'Add New on Toolbar', 'ec' ),
        'add_new'               => __( 'Añadir Nueva', 'ec' ),
        'add_new_item'          => __( 'Añadir Nueva Cotizacione', 'ec' ),
        'new_item'              => __( 'Nueva Cotizacione', 'ec' ),
        'edit_item'             => __( 'Editar Cotizacione', 'ec' ),
        'view_item'             => __( 'Ver Cotizacione', 'ec' ),
        'all_items'             => __( 'Todas las Cotizaciones', 'ec' ),
        'search_items'          => __( 'Buscar Cotizaciones', 'ec' ),
        'parent_item_colon'     => __( 'Padre Cotizaciones:', 'ec' ),
        'not_found'             => __( 'No se encontraron Cotizaciones.', 'ec' ),
        'not_found_in_trash'    => __( 'No se encontraron Cotizaciones en la Papelera', 'ec' ),
        'featured_image'        => _x( 'Imagen Destacada', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ec' ),
        'set_featured_image'    => _x( 'Agregar imagen Destacada', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'remove_featured_image' => _x( 'Borrar imagen destacada', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'use_featured_image'    => _x( 'Usar Imagen destacada', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ec' ),
        'archives'              => _x( 'Archivo de Cotizaciones', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ec' ),
        'insert_into_item'      => _x( 'Insertar en Cotizaciones', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ec' ),
        'uploaded_to_this_item' => _x( 'Cargadas En Cotizacione', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ec' ),
        'filter_items_list'     => _x( 'Filtrar Lista de Cotizaciones', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ec' ),
        'items_list_navigation' => _x( 'Cotizaciones Cocina navegación', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ec' ),
        'items_list'            => _x( 'Lista de Cotizaciones', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ec' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'cotizaciones' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-media-document',
        // true como paginas (pueden tener hijos), false como posts (no tienen hijos)
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' ),
        'show_in_rest'       => true,
        'rest_base'          => 'cotizaciones'
    );

    register_post_type( 'cotizaciones', $args );
}
add_action( 'init', 'ec_posttype_cotizaciones');
?>