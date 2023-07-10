<?php
add_action( 'cmb2_admin_init', 'ec_opciones_theme' );

function ec_opciones_theme() {

	$ec_options = new_cmb2_box( array(
		'id'           => 'ec_theme_opciones',
		'title'        => esc_html__( 'Ajustes del Tema', 'cmb2' ),
        'object_types' => array( 'options-page' ),

		'option_key'      => 'ec_theme_options', // The option key and admin menu page slug.
		'icon_url'        => 'dashicons-edit', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
		// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'      => false, // Override the options-page form oecut (CMB2_Hookup::options_page_oecut()).
		// 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
		// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
		// 'message_cb'      => 'yourprefix_options_page_message_callback',
		// 'tab_group'       => '', // Tab-group identifier, enables options page tab navigation.
		// 'tab_title'       => null, // Falls back to 'title' (above).
		// 'autoload'        => false, // Defaults to true, the options-page option will be autloaded.
	) );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */
    
    $ec_options->add_field( array(
		'name'     => esc_html__( 'Información General del Sitio', 'cmb2' ),
		'id'       => 'info_header',
		'type'     => 'title'
		), );
    /* LOGO DEL SITIO WEB */
    $ec_options->add_field( array(
		'name'    => esc_html__( 'Logo', 'cmb2' ),
		'desc'    => esc_html__( 'Añada el logo 900x300 (recomendado)', 'cmb2' ),
		'id'      => 'logo_principal',
		'type'    => 'file'
    ) );
    // Información
    $ec_options->add_field( array(
		'name'    => esc_html__( 'Dirección', 'cmb2' ),
		'desc'    => esc_html__( 'Añada la dirección física del sitio', 'cmb2' ),
		'id'      => 'direccion_sitio',
		'type'    => 'text'
    ) );
    $ec_options->add_field( array(
		'name'    => esc_html__( 'Correo Electrónico', 'cmb2' ),
		'desc'    => esc_html__( 'Añada el correo electronico del sitio', 'cmb2' ),
		'id'      => 'correo_sitio',
		'type'    => 'text'
    ) );
    $ec_options->add_field( array(
		'name'    => esc_html__( 'Teléfono', 'cmb2' ),
		'desc'    => esc_html__( 'Añada el número telefónico del sitio', 'cmb2' ),
		'id'      => 'telefono_sitio',
		'type'    => 'text'
    ) );
    $ec_options->add_field( array(
		'name'    => esc_html__( 'Facebook', 'cmb2' ),
		'desc'    => esc_html__( 'Añada la URL de la pagina de Facebook', 'cmb2' ),
		'id'      => 'facebook_sitio',
		'type'    => 'text'
    ) );
    $ec_options->add_field( array(
		'name'    => esc_html__( 'Youtube', 'cmb2' ),
		'desc'    => esc_html__( 'Añada la URL de la pagina de Youtube', 'cmb2' ),
		'id'      => 'youtube_sitio',
		'type'    => 'text'
    ) );
    $ec_options->add_field( array(
		'name'    => esc_html__( 'Instagram', 'cmb2' ),
		'desc'    => esc_html__( 'Añada la URL de la pagina de Instagram', 'cmb2' ),
		'id'      => 'instagram_sitio',
		'type'    => 'text'
    ) );
    /* BANNER */
    $ec_options->add_field( array(
		'name'     => esc_html__( 'CONTENIDO SLIDER PRINCIPAL', 'cmb2' ),
		'id'       => 'slider_title',
		'type'     => 'title'
    ) );
    $group_field_id = $ec_options->add_field( array(
		'id'          => 'grupo_slider',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue el contenido para el slider, 5 como máximo.', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Slider', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar otro Slider', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			'remove_confirm' => esc_html__( 'Está seguro de Eliminar el Slider?', 'cmb2' ), // Performs confirmation before removing group.
		),
    ) );
    $ec_options->add_group_field( $group_field_id, array(
		'name'    => esc_html__( 'Imagen Slider', 'cmb2' ),
		'desc'    => esc_html__( 'Añada una imagen para el Slider)', 'cmb2' ),
		'id'      => 'img_slider',
		'type'    => 'file'
	) );
    $ec_options->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'URL', 'cmb2' ),
        'description' => esc_html__( 'Agregue la dirección URL', 'cmb2' ),
        'id'          => 'url_slider',
        'type'        => 'text'
    ) );

		$group_field_id = $ec_options->add_field( array(
			'id'          => 'grupo_box',
			'type'        => 'group',
			'description' => esc_html__( 'Agregue el contenido para las cajas de la portada, 5 elementos necesarios', 'cmb2' ),
			'options'     => array(
				'group_title'    => esc_html__( 'Cajas Principales', 'cmb2' ), // {#} gets replaced by row number
				'add_button'     => esc_html__( 'Agregar otro elemento', 'cmb2' ),
				'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
				'sortable'       => true,
				'closed'      => true, // true to have the groups closed by default
				'remove_confirm' => esc_html__( 'Está seguro de Eliminar el contenido', 'cmb2' ), // Performs confirmation before removing group.
			),
			) );
			$ec_options->add_group_field( $group_field_id, array(
			'name'    => esc_html__( 'Imagen Caja', 'cmb2' ),
			'desc'    => esc_html__( 'Añada una imagen para la caja)', 'cmb2' ),
			'id'      => 'img_box',
			'type'    => 'file'
		) );
			$ec_options->add_group_field( $group_field_id, array(
					'name'        => esc_html__( 'Titulo', 'cmb2' ),
					'description' => esc_html__( 'Agregue el Título', 'cmb2' ),
					'id'          => 'titulo_box',
					'type'        => 'text'
			) );
			$ec_options->add_group_field( $group_field_id, array(
					'name'        => esc_html__( 'URL', 'cmb2' ),
					'description' => esc_html__( 'Agregue la dirección URL', 'cmb2' ),
					'id'          => 'url_box',
					'type'        => 'text'
			) );
}

add_action( 'cmb2_admin_init', 'ec_campos_homepage' );

function ec_campos_homepage() {
	$prefix = 'ec_homepage_';
	$ec_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix . 'campos',
		'title'        => esc_html__( 'Campos Home Page', 'cmb2' ),
        'object_types' => array( 'options-page' ),

		'option_key'      => 'ec_homepage_campos', // The option key and admin menu page slug.
		'icon_url'        => 'dashicons-feedback', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
		// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'      => false, // Override the options-page form oecut (CMB2_Hookup::options_page_oecut()).
		// 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
		// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
		// 'message_cb'      => 'yourprefix_options_page_message_callback',
		// 'tab_group'       => '', // Tab-group identifier, enables options page tab navigation.
		// 'tab_title'       => null, // Falls back to 'title' (above).
		// 'autoload'        => false, // Defaults to true, the options-page option will be autloaded.
	) );

	/**
	 * Options fields ids only need
	 * to be unique within this box.
	 * Prefix is not needed.
	 */
  $ec_campos_homepage->add_field( array(
		'name'     => esc_html__( 'Campos modificables de la pagina de inicio', 'cmb2' ),
		'id'       => 'info_header',
		'type'     => 'title'
	), );

  /*Director*/
	$ec_campos_homepage->add_field( array(
		'name'     => esc_html__( 'Información del Director', 'cmb2' ),
		'desc'     => esc_html__( 'Añada la información del director', 'cmb2' ),
		'id'       => $prefix . 'titulo',
		'type'     => 'title'
	) );

	$ec_campos_homepage->add_field( array(
			'name'     => esc_html__( 'Nombres y Apellidos', 'cmb2' ),
			'desc'     => esc_html__( 'Añada el nombre y apellidos del director', 'cmb2' ),
			'id'       => $prefix . 'nombre',
			'type'     => 'text'
	) );

	$ec_campos_homepage->add_field( array(
			'name'     => esc_html__( 'Imagen del Director', 'cmb2' ),
			'desc'     => esc_html__( 'Seleccione la imagen del director de la ugel', 'cmb2' ),
			'id'       => $prefix . 'imagen',
			'type'     => 'file'
	) );

	#VIDEOS 
	$ec_campos_homepage->add_field( array(
		'name'     => esc_html__( 'VIDEOS DE YOUTUBE', 'cmb2' ),
		'desc'     => esc_html__( 'Añada los enlaces de los videos', 'cmb2' ),
		'id'       => $prefix . 'infov',
		'type'     => 'title'
	) );

	$group_field_id = $ec_campos_homepage->add_field( array(
		'id'          => $prefix . 'videos',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue los enlaces de los videos para la página principal', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Video', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar Nuevo Video', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
    ) );

	$ec_campos_homepage->add_group_field( $group_field_id, array(
        'name'       => esc_html__( 'URL del video', 'cmb2' ),
        'description' => esc_html__( 'Agregue el enlace o URL', 'cmb2' ),
		'id'         => 'url_video',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	#Enlaces externos
	$ec_campos_homepage->add_field( array(
		'name'     => esc_html__( 'ENLACES EXTERNOS', 'cmb2' ),
		'desc'     => esc_html__( 'Añada los enlaces externos', 'cmb2' ),
		'id'       => $prefix . 'info',
		'type'     => 'title'
	) );
    $group_field_id = $ec_campos_homepage->add_field( array(
		'id'          => $prefix . 'enlaces_e',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue los enlaces externos que vea necesario', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Enlace externo', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar Nuevo Enlace', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
    ) );
    $ec_campos_homepage->add_group_field( $group_field_id, array(
        'name'       => esc_html__( 'Titulo', 'cmb2' ),
        'description' => esc_html__( 'Agregue un titulo del enlace externo', 'cmb2' ),
		'id'         => 'titulo_enlace',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$ec_campos_homepage->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'URL', 'cmb2' ),
		'description' => esc_html__( 'Agregue el enlace URL', 'cmb2' ),
		'id'          => 'link_enlace',
		'type'        => 'text',
	) );

	$ec_campos_homepage->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Imagen', 'cmb2' ),
        'description' => esc_html__( 'Agregue una imagen del enlace', 'cmb2' ),
		'id'   => 'img_enlace',
		'type' => 'file',
	) );

	/*CINTA DE ENLACES*/
	$ec_campos_homepage->add_field( array(
		'name'     => esc_html__( 'CINTA DE ENLACES', 'cmb2' ),
		'desc'     => esc_html__( 'Añada los enlaces externos', 'cmb2' ),
		'id'       => $prefix . 'info2',
		'type'     => 'title'
	) );

	$group_field_id = $ec_campos_homepage->add_field( array(
		'id'          => $prefix . 'cinta',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue los enlaces para la cinta de enlaces', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Enlace Cinta', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Agregar Nuevo Enlace', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
			'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );

	$ec_campos_homepage->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'URL', 'cmb2' ),
		'description' => esc_html__( 'Agregue el enlace URL', 'cmb2' ),
		'id'          => 'link_enlace',
		'type'        => 'text',
	) );

	$ec_campos_homepage->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Imagen', 'cmb2' ),
        'description' => esc_html__( 'Agregue una imagen del enlace', 'cmb2' ),
		'id'   => 'img_enlace',
		'type' => 'file',
	) );
	/*CINTA DE ENLACES*/
	$ec_campos_homepage->add_field( array(
		'name'     => esc_html__( 'DOCUMENTOS DE GESTION', 'cmb2' ),
		'desc'     => esc_html__( 'Añada los Documentos necesarios', 'cmb2' ),
		'id'       => $prefix . 'infod',
		'type'     => 'title'
	) );
	$group_field_id = $ec_campos_homepage->add_field( array(
		'id'          => $prefix . 'docs',
		'type'        => 'group',
		'description' => esc_html__( 'Agregue los documentos de la ugel', 'cmb2' ),
		'options'     => array(
				'group_title'    => esc_html__( 'Documento', 'cmb2' ), // {#} gets replaced by row number
				'add_button'     => esc_html__( 'Agregar Nuevo Documento', 'cmb2' ),
				'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
				'sortable'       => true,
				'closed'      => true, // true to have the groups closed by default
				// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );
	$ec_campos_homepage->add_group_field( $group_field_id, array(
		'name'        => esc_html__( 'Titulo del Documento', 'cmb2' ),
		'description' => esc_html__( 'Agregue el titulo del documento', 'cmb2' ),
		'id'          => 'titulo_doc',
		'type'        => 'text'
	) );
	$ec_campos_homepage->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Documento', 'cmb2' ),
		'desc' => esc_html__( 'Seleccione o cargue un documento', 'cmb2' ),
		'id'   => 'file_doc',
		'type' => 'file',
	) );
	$ec_campos_homepage->add_group_field( $group_field_id, array(
		'name' => esc_html__( 'Imagen del Documento', 'cmb2' ),
		'desc' => esc_html__( 'Seleccione una imagen', 'cmb2' ),
		'id'   => 'img_doc',
		'type' => 'file',
	) );
}
