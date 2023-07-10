<?php
// campos página institucional
add_action( 'cmb2_admin_init', 'ec_campos_institucional' );
function ec_campos_institucional() {
    $prefix = 'ec_institucional_';
		
    $ec_campos_ins = new_cmb2_box( array(
        'id'           => $prefix . 'institucional',
        'title'        => esc_html__( 'Campos Página Información Institucional ', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      =>array(
            'key'				 => 'page-template',
            'value'			 => 'page-institucional.php'
        )	
    ) );

    
    $ec_campos_ins->add_field( array(
        'name' => esc_html__( 'Texto Informativo', 'cmb2' ),
        'desc' => esc_html__( 'Agregue el texto informativo', 'cmb2' ),
        'id'   => $prefix . 'inf',
        'type' => 'textarea',
    ) );
    $ec_campos_ins->add_field( array(
        'name' => esc_html__( 'Imagen', 'cmb2' ),
        'desc' => esc_html__( 'Seleccione o cargue una imagen', 'cmb2' ),
        'id'   => $prefix . 'img',
        'type' => 'file',
    ) );
    $ec_campos_ins->add_field( array(
        'name' => esc_html__( 'Misión', 'cmb2' ),
        'desc' => esc_html__( 'Agregue la misión de la ugel', 'cmb2' ),
        'id'   => $prefix . 'mision',
        'type' => 'textarea_small',
    ) );
    $ec_campos_ins->add_field( array(
        'name' => esc_html__( 'Visión', 'cmb2' ),
        'desc' => esc_html__( 'Agregue la visión de la ugel', 'cmb2' ),
        'id'   => $prefix . 'vision',
        'type' => 'textarea_small',
    ) );
}
/* campos para la pagina de director*/
add_action( 'cmb2_admin_init', 'ec_campos_director' );
function ec_campos_director() {
    $prefix = 'ec_director_';
		
    $ec_campos_director = new_cmb2_box( array(
        'id'           => $prefix . 'director',
        'title'        => esc_html__( 'Campos Página Director', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      =>array(
            'key'				 => 'page-template',
            'value'			 => 'page-director.php'
        )	
    ) );
    
    $ec_campos_director->add_field( array(
        'name' => esc_html__( 'Nombre del Director', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del director', 'cmb2' ),
        'id'   => $prefix . 'nombre',
        'type' => 'text'
    ) );
    $ec_campos_director->add_field( array(
        'name' => esc_html__( 'Imagen del Director', 'cmb2' ),
        'desc' => esc_html__( 'Imagen del director de la ugel', 'cmb2' ),
        'id'   => $prefix . 'imagen',
        'type' => 'file',
        ) );
    $ec_campos_director->add_field( array(
        'name' => esc_html__( 'Correo del director', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo electronico del director', 'cmb2' ),
        'id'   => $prefix . 'correo',
        'type' => 'text'
    ) );
    $ec_campos_director->add_field( array(
        'name' => esc_html__( 'Texto Información Director', 'cmb2' ),
        'desc' => esc_html__( 'Añada el texto de información del director', 'cmb2' ),
        'id'   => $prefix . 'info',
        'type' => 'textarea_small'
    ) );
    $group_field_id = $ec_campos_director->add_field( array(
        'id'          => $prefix . 'descripcion',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue la descripcion del puesto', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Descripción', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar Nueva Descripción', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            // 'closed'      => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Está seguro de eliminar?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $ec_campos_director->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Descripción del cargo de director', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo de director', 'cmb2' ),
        'id'   => 'texto',
        'type' => 'textarea_small'
    ) );
    $group_field_id = $ec_campos_director->add_field( array(
        'id'          => $prefix . 'funciones',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones del director', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar Nueva Función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $ec_campos_director->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Función del director', 'cmb2' ),
        'desc' => esc_html__( 'Añada la función del director', 'cmb2' ),
        'id'   => 'funcion',
        'type' => 'textarea_small'
    ) );    
}
/* campos para la pagina de directorio*/
add_action( 'cmb2_admin_init', 'ec_campos_directorio' );
function ec_campos_directorio() {
    $prefix = 'ec_directorio_';
		
    $ec_campos_directorio = new_cmb2_box( array(
        'id'           => $prefix . 'directorio',
        'title'        => esc_html__( 'Campos Página Directorio', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      =>array(
            'key'				 => 'page-template',
            'value'			 => 'page-directorio.php'
        )	
    ) );
    $group_field_id = $ec_campos_directorio->add_field( array(
        'id'          => $prefix . 'grupo_directorio',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue la información sobre el directorio de la UGEL', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Miembro del Directorio', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar Nuevo Miembro', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            // 'closed'      => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
        ) );

    $ec_campos_directorio->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Nombre', 'cmb2' ),
        'description' => esc_html__( 'Agregue el nombre del miembro del directorio', 'cmb2' ),
        'id'          => 'nombre',
        'type'        => 'text',
    ) );
    $ec_campos_directorio->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Cargo', 'cmb2' ),
        'description' => esc_html__( 'Agregue el cargo del miembro del directorio', 'cmb2' ),
        'id'          => 'cargo',
        'type'        => 'text',
    ) );
    $ec_campos_directorio->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Correo', 'cmb2' ),
        'description' => esc_html__( 'Agregue el correo del miembro del directorio', 'cmb2' ),
        'id'          => 'correo',
        'type'        => 'text',
    ) );
    $ec_campos_directorio->add_group_field( $group_field_id, array(
                'name' => esc_html__( 'Imagen', 'cmb2' ),
                'description' => esc_html__( 'Agregue una imagen del miembro del directorio', 'cmb2' ),
        'id'   => 'imagen',
        'type' => 'file',
    ) );
}
/* campos para la pagina de area de direccion*/
add_action( 'cmb2_admin_init', 'ec_campos_area_direccion' );
function ec_campos_area_direccion() {
    $prefix = 'ec_area_direccion_';
		
    $ec_campos_area_direccion = new_cmb2_box( array(
        'id'           => $prefix . 'area-direccion',
        'title'        => esc_html__( 'Campos Página Área de Dirección General', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      =>array(
            'key'				 => 'page-template',
            'value'			 => 'page-direccion-general.php'
        )	
    ) );
    /*direccion */
    $ec_campos_area_direccion->add_field( array(
        'name'     => esc_html__( 'Dirección', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de direccion', 'cmb2' ),
        'id'       => $prefix . 'info',
        'type'     => 'title'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Nombre del secretario/a', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de dirección', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_direccion',
        'type' => 'text'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de dirección', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_direccion',
        'type' => 'text'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de dirección', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_direccion',
        'type' => 'file'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de dirección', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_direccion',
        'type' => 'textarea_small'
    ) );

    $group_field_id = $ec_campos_area_direccion->add_field( array(
        'id'          => $prefix . 'grupo_area_direccion',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de dirección', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_campos_area_direccion->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*secretaria */
    $ec_campos_area_direccion->add_field( array(
        'name'     => esc_html__( 'Secretaría', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Secretaría', 'cmb2' ),
        'id'       => $prefix . 'info_secretaria',
        'type'     => 'title'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de secretaría', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_secretaria',
        'type' => 'text'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de secretaría', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_secretaria',
        'type' => 'text'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de secretaría', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_secretaria',
        'type' => 'file'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de secretaría', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_secretaria',
        'type' => 'textarea_small'
    ) );

    $group_field_id = $ec_campos_area_direccion->add_field( array(
        'id'          => $prefix . 'grupo_area_secretaria',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de secretaría', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_campos_area_direccion->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );

    /*trámite documentario*/
    $ec_campos_area_direccion->add_field( array(
        'name'     => esc_html__( 'Trámite Documentario', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de trámite documentario', 'cmb2' ),
        'id'       => $prefix . 'info_td',
        'type'     => 'title'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de trámite documentario', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_td',
        'type' => 'text'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de trámite documentario', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_td',
        'type' => 'text'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de trámite documentario', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_td',
        'type' => 'file'
    ) );
    $ec_campos_area_direccion->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de trámite documentario', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_td',
        'type' => 'textarea_small'
    ) );

    $group_field_id = $ec_campos_area_direccion->add_field( array(
        'id'          => $prefix . 'grupo_area_td',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de trámite documentario', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_campos_area_direccion->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) ); 
}
/* campos para la pagina de area de gestión administrativa*/
add_action( 'cmb2_admin_init', 'ec_campos_gestion_administrativa' );
function ec_campos_gestion_administrativa() {
    $prefix = 'ec_aga_';
    $ec_aga = new_cmb2_box( array(
        'id'           => $prefix . 'gestion_administrativa',
        'title'        => esc_html__( 'Campos Página Área de Gestión Administrativa', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      =>array(
            'key'				 => 'page-template',
            'value'			 => 'page-gestion-administrativa.php'
        )	
    ) );
    /*jefatura AGA */
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Jefatura AGA', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Jefatura', 'cmb2' ),
        'id'       => $prefix . 'info_jefatura',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de jefatura AGA', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_jefatura',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de jefatura AGA', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_jefatura',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de jefatura AGA', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_jefatura',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de jefatura AGA', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_jefatura',
        'type' => 'textarea_small'
    ) );    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_jefatura',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de jefatura AGA', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );
    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*secretaria*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Secretaría AGA', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Secretaría AGA', 'cmb2' ),
        'id'       => $prefix . 'info_secretaria',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de Secretaria AGA', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_secretaria',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de Secretaria AGA', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_secretaria',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de Secretaria AGA', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_secretaria',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de Secretaria AGA', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_secretaria',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_secretaria',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de Secretaria AGA', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*jefe de personal*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Jefe de la Unidad de Personal', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Jefe de la Unidad de Personal', 'cmb2' ),
        'id'       => $prefix . 'info_personal',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de Jefe de la Unidad de Personal', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_personal',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de Jefe de la Unidad de Personal', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_personal',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de Jefe de la Unidad de Personal', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_personal',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de Jefe de la Unidad de Personal', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_personal',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_personal',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de Jefe de la Unidad de Personal', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );	
    /*Finanzas*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Especialista en Finanzas', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el especialista', 'cmb2' ),
        'id'       => $prefix . 'info_finanzas',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del especialista', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_finanzas',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del especialista', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_finanzas',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del especialista', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_finanzas',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del especialista', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_finanzas',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_finanzas',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del especialista', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
        'closed'      => true,
    ) );	
    /*abastecimiento*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Abastecimiento', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Abastecimiento', 'cmb2' ),
        'id'       => $prefix . 'info_abastecimiento',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de Abastecimiento', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_abastecimiento',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de Abastecimiento', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_abastecimiento',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de Abastecimiento', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_abastecimiento',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de Abastecimiento', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_abastecimiento',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_abastecimiento',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de Abastecimiento', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*almacen */
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Almacén', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de almacen', 'cmb2' ),
        'id'       => $prefix . 'info_almacen',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de almacen', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_almacen',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de almacen', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_almacen',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de almacen', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_almacen',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de almacen', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_almacen',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_almacen',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de almacen', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*tesoreria*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Tesorería', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Tesorería', 'cmb2' ),
        'id'       => $prefix . 'info_tesoreria',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de Tesorería', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_tesoreria',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de Tesorería', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_tesoreria',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de Tesorería', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_tesoreria',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de Tesorería', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_tesoreria',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_tesoreria',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de Tesorería', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*contabilidad*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Contabilidad', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de contabilidad', 'cmb2' ),
        'id'       => $prefix . 'info_contabilidad',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de contabilidad', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_contabilidad',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de contabilidad', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_contabilidad',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de contabilidad', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_contabilidad',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de contabilidad', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_contabilidad',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_contabilidad',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de contabilidad', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*patrimonio*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Patrominio', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Patrimonio', 'cmb2' ),
        'id'       => $prefix . 'info_patrimonio',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de Patrimonio', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_patrimonio',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de Patrimonio', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_patrimonio',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de Patrimonio', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_patrimonio',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de Patrimonio', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_patrimonio',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_patrimonio',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de Patrimonio', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*escalafon*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Escalafon', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de escalafon', 'cmb2' ),
        'id'       => $prefix . 'info_escalafon',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de escalafon', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_escalafon',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de escalafon', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_escalafon',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de escalafon', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_escalafon',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de escalafon', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_escalafon',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_escalafon',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de escalafon', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*nexus*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Nexus', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de nexus', 'cmb2' ),
        'id'       => $prefix . 'info_nexus',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de nexus', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_nexus',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de nexus', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_nexus',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de nexus', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_nexus',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de nexus', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_nexus',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_nexus',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de nexus', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*remuneraciones*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Remuneraciones y planillas', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de remuneraciones', 'cmb2' ),
        'id'       => $prefix . 'info_remuneraciones',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de remuneraciones', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_remuneraciones',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de remuneraciones', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_remuneraciones',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de remuneraciones', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_remuneraciones',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de remuneraciones', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_remuneraciones',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_remuneraciones',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de remuneraciones', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*informática*/
    $ec_aga->add_field( array(
        'name'     => esc_html__( 'Responsable de Informática', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el responsable de informática', 'cmb2' ),
        'id'       => $prefix . 'info_informatico',
        'type'     => 'title'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del responsable de informática', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_informatico',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del responsable de informática', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_informatico',
        'type' => 'text'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del responsable de informática', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_informatico',
        'type' => 'file'
    ) );
    $ec_aga->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del responsable de informática', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_informatico',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_aga->add_field( array(
        'id'          => $prefix . 'grupo_area_informatico',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el responsable de informática', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_aga->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
}
/* campos para la pagina de area de gestión institucional*/
add_action( 'cmb2_admin_init', 'ec_campos_gestion_institucional' );
function ec_campos_gestion_institucional() {
    $prefix = 'ec_agi_';
    $ec_agi = new_cmb2_box( array(
        'id'           => $prefix . 'gestion_institucional',
        'title'        => esc_html__( 'Campos Página Área de Gestión institucional', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      =>array(
            'key'				 => 'page-template',
            'value'			 => 'page-gestion-institucional.php'
        )	
    ) );
    /*jefatura AGI */
    $ec_agi->add_field( array(
        'name'     => esc_html__( 'Jefatura AGI', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Jefatura', 'cmb2' ),
        'id'       => $prefix . 'info_jefatura',
        'type'     => 'title'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de jefatura AGI', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_jefatura',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de jefatura AGI', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_jefatura',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de jefatura AGI', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_jefatura',
        'type' => 'file'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de jefatura AGI', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_jefatura',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agi->add_field( array(
        'id'          => $prefix . 'grupo_area_jefatura',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de jefatura AGI', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_agi->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*Asesoria Juridica*/
    $ec_agi->add_field( array(
        'name'     => esc_html__( 'Jefe de Asesoria Juridica', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de asesoria juridica', 'cmb2' ),
        'id'       => $prefix . 'info_planificacion',
        'type'     => 'title'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de asesoria juridica', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_aj',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de asesoria juridica', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_aj',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de asesoria juridica', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_aj',
        'type' => 'file'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de asesoria juridica', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_aj',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agi->add_field( array(
        'id'          => $prefix . 'grupo_area_aj',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de asesoria juridica', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_agi->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*Secretaría Asesoria Juridica*/
    $ec_agi->add_field( array(
        'name'     => esc_html__( 'Secretario/a de Asesoria Juridica', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el secretario/a de asesoria juridica', 'cmb2' ),
        'id'       => $prefix . 'info_saj',
        'type'     => 'title'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Nombre del secretario/a', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del secretario/a de asesoria juridica', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_saj',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Correo del secretario/a', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del secretario/a de asesoria juridica', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_saj',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Imagen del secretario/a', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del secretario/a de asesoria juridica', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_saj',
        'type' => 'file'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo de secretario/a de asesoria juridica', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_saj',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agi->add_field( array(
        'id'          => $prefix . 'grupo_area_saj',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el secretario/a de asesoria juridica', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_agi->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*Estadistica */
    $ec_agi->add_field( array(
        'name'     => esc_html__( 'Area de Estadistica', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de estadistica', 'cmb2' ),
        'id'       => $prefix . 'info_estadistica',
        'type'     => 'title'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de estadistica', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_estadistica',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de estadistica', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_estadistica',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de estadistica', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_estadistica',
        'type' => 'file'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de estadistica', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_estadistica',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agi->add_field( array(
        'id'          => $prefix . 'grupo_area_estadistica',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de estadistica', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_agi->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*Racionalizacion */
    $ec_agi->add_field( array(
        'name'     => esc_html__( 'Area de Racionalización', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de racionalizacion', 'cmb2' ),
        'id'       => $prefix . 'info_racionalizacion',
        'type'     => 'title'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de racionalizacion', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_racionalizacion',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de racionalizacion', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_racionalizacion',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de racionalizacion', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_racionalizacion',
        'type' => 'file'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de racionalizacion', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_racionalizacion',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agi->add_field( array(
        'id'          => $prefix . 'grupo_area_racionalizacion',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de racionalizacion', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_agi->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*Infraestructura */
    $ec_agi->add_field( array(
        'name'     => esc_html__( 'Infraestructura', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de infraestructura', 'cmb2' ),
        'id'       => $prefix . 'info_infraestructura',
        'type'     => 'title'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de infraestructura', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_infraestructura',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de infraestructura', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_infraestructura',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de infraestructura', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_infraestructura',
        'type' => 'file'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de infraestructura', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_infraestructura',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agi->add_field( array(
        'id'          => $prefix . 'grupo_area_infraestructura',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de infraestructura', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_agi->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*Secretaría CPPADD*/
    $ec_agi->add_field( array(
        'name'     => esc_html__( 'Secretario/a de CPPADD', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el secretario/a de CPPADD', 'cmb2' ),
        'id'       => $prefix . 'info_scppadd',
        'type'     => 'title'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Nombre del secretario/a', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del secretario/a de CPPADD', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_scppadd',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Correo del secretario/a', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del secretario/a de CPPADD', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_scppadd',
        'type' => 'text'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Imagen del secretario/a', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del secretario/a de CPPADD', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_scppadd',
        'type' => 'file'
    ) );
    $ec_agi->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo de secretario/a de CPPADD', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_scppadd',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agi->add_field( array(
        'id'          => $prefix . 'grupo_area_scppadd',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el secretario/a de CPPADD', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'      => true,
        ),
    ) );

    $ec_agi->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
}
/* campos para la pagina de area de gestión pedagogica*/
add_action( 'cmb2_admin_init', 'ec_campos_gestion_pedagogica' );
function ec_campos_gestion_pedagogica() {
    $prefix = 'ec_agp_';
    $ec_agp = new_cmb2_box( array(
        'id'           => $prefix . 'gestion_pedagogica',
        'title'        => esc_html__( 'Campos Página Área de Gestión pedagogica', 'cmb2' ),
        'object_types' => array( 'page' ), // Post type
        'context'      => 'normal',
        'priority'     => 'high',
        'show_names'   => true, // Show field names on the left
        'show_on'      =>array(
            'key'				 => 'page-template',
            'value'			 => 'page-gestion-pedagogica.php'
        )	
    ) );
    /*jefatura AGP */
    $ec_agp->add_field( array(
        'name'     => esc_html__( 'Jefatura AGP', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de Jefatura', 'cmb2' ),
        'id'       => $prefix . 'info_jefatura',
        'type'     => 'title'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del area de jefatura AGP', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_jefatura',
        'type' => 'text'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del area de jefatura AGP', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_jefatura',
        'type' => 'text'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del area de jefatura AGP', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_jefatura',
        'type' => 'file'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del area de jefatura AGP', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_jefatura',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_area_jefatura',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del area de jefatura AGP', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'       => true,
        ),
    ) );

    $ec_agp->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*ebrs */
    $ec_agp->add_field( array(
        'name'     => esc_html__( 'EBR Secundaria', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de EBR Secundaria', 'cmb2' ),
        'id'       => $prefix . 'info_secundaria',
        'type'     => 'title'
    ) );
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_especialistas_secundaria',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue los datos de los especialistas de EBR Secundaria', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Especialista', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otro especialista', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true
        ),
    ) );
    $ec_agp->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Nombre del Especialista', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del especialista de EBR secundaria', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_secundaria',
        'type' => 'text'
    ) );
    $ec_agp->add_group_field($group_field_id, array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del especialista de EBR secundaria', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_secundaria',
        'type' => 'text'
    ) );
    $ec_agp->add_group_field($group_field_id, array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del especialista de EBR secundaria', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_secundaria',
        'type' => 'file'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del especialista de EBR secundaria', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_secundaria',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_area_secundaria',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeñan los especialistas de EBR secundaria', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'       => true,
        ),
    ) );

    $ec_agp->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );	
    /*ebrp */
    $ec_agp->add_field( array(
        'name'     => esc_html__( 'EBR Primaria', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de EBR Primaria', 'cmb2' ),
        'id'       => $prefix . 'info_primaria',
        'type'     => 'title'
    ) );
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_especialistas_primaria',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue los datos de los especialistas de EBR Primaria', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Especialista', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otro especialista', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true
        ),
    ) );
    $ec_agp->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Nombre del Especialista', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del especialista de EBR Primaria', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_primaria',
        'type' => 'text'
    ) );
    $ec_agp->add_group_field($group_field_id, array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del especialista de EBR Primaria', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_primaria',
        'type' => 'text'
    ) );
    $ec_agp->add_group_field($group_field_id, array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del especialista de EBR Primaria', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_primaria',
        'type' => 'file'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del especialista de EBR Primaria', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_primaria',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_area_primaria',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeñan los especialistas de EBR Primaria', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'       => true,
        ),
    ) );

    $ec_agp->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );	
    /*ebri */
    $ec_agp->add_field( array(
        'name'     => esc_html__( 'EBR Inicial', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de EBR Inicial', 'cmb2' ),
        'id'       => $prefix . 'info_inicial',
        'type'     => 'title'
    ) );
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_especialistas_inicial',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue los datos de los especialistas de EBR Inicial', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Especialista', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otro especialista', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true
        ),
    ) );
    $ec_agp->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Nombre del Especialista', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del especialista de EBR Inicial', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_inicial',
        'type' => 'text'
    ) );
    $ec_agp->add_group_field($group_field_id, array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del especialista de EBR Inicial', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_inicial',
        'type' => 'text'
    ) );
    $ec_agp->add_group_field($group_field_id, array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del especialista de EBR Inicial', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_inicial',
        'type' => 'file'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del especialista de EBR Inicial', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_inicial',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_area_inicial',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeñan los especialistas de EBR Inicial', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'       => true,
        ),
    ) );

    $ec_agp->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );	
    /*eib */
    $ec_agp->add_field( array(
        'name'     => esc_html__( 'EIB Primaria', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el area de EIB Primaria', 'cmb2' ),
        'id'       => $prefix . 'info_eib',
        'type'     => 'title'
    ) );
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_especialistas_eib',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue los datos de los especialistas de EIB Primaria', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Especialista', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otro especialista', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true
        ),
    ) );
    $ec_agp->add_group_field( $group_field_id, array(
        'name' => esc_html__( 'Nombre del Especialista', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del especialista de EIB Primaria', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_eib',
        'type' => 'text'
    ) );
    $ec_agp->add_group_field($group_field_id, array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del especialista de EIB Primaria', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_eib',
        'type' => 'text'
    ) );
    $ec_agp->add_group_field($group_field_id, array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del especialista de EIB Primaria', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_eib',
        'type' => 'file'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del especialista de EIB Primaria', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_eib',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_area_eib',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeñan los especialistas de EIB Primaria', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'       => true,
        ),
    ) );

    $ec_agp->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );	
    /*SIAGIE*/
    $ec_agp->add_field( array(
        'name'     => esc_html__( 'Responsable de SIAGIE', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el Responsable de SIAGIE', 'cmb2' ),
        'id'       => $prefix . 'info_siagie',
        'type'     => 'title'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del Responsable de SIAGIE', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_siagie',
        'type' => 'text'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del Responsable de SIAGIE', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_siagie',
        'type' => 'text'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del Responsable de SIAGIE', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_siagie',
        'type' => 'file'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del Responsable de SIAGIE', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_siagie',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_area_siagie',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del Responsable de SIAGIE', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true
        ),
    ) );

    $ec_agp->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*cetpro*/
    $ec_agp->add_field( array(
        'name'     => esc_html__( 'Especialista Cetpro', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el Especialista Cetpro', 'cmb2' ),
        'id'       => $prefix . 'info_cetpro',
        'type'     => 'title'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del Especialista Cetpro', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_cetpro',
        'type' => 'text'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del Especialista Cetpro', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_cetpro',
        'type' => 'text'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del Especialista Cetpro', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_cetpro',
        'type' => 'file'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del Especialista Cetpro', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_cetpro',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_area_cetpro',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del Especialista Cetpro', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'       => true,
        ),
    ) );

    $ec_agp->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
    /*convivencia*/
    $ec_agp->add_field( array(
        'name'     => esc_html__( 'Especialista Convivencia', 'cmb2' ),
        'desc'     => esc_html__( 'Añada la información para el Especialista Convivencia', 'cmb2' ),
        'id'       => $prefix . 'info_convivencia',
        'type'     => 'title'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Nombre del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el nombre del encargado del Especialista Convivencia', 'cmb2' ),
        'id'   => $prefix . 'nombre_encargado_convivencia',
        'type' => 'text'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Correo del Encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada el correo del encargado del Especialista Convivencia', 'cmb2' ),
        'id'   => $prefix . 'correo_encargado_convivencia',
        'type' => 'text'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Imagen del encargado', 'cmb2' ),
        'desc' => esc_html__( 'Añada la imagen del encargado del Especialista Convivencia', 'cmb2' ),
        'id'   => $prefix . 'imagen_encargado_convivencia',
        'type' => 'file'
    ) );
    $ec_agp->add_field( array(
        'name' => esc_html__( 'Descripción del cargo', 'cmb2' ),
        'desc' => esc_html__( 'Añada la descripción del cargo del Especialista Convivencia', 'cmb2' ),
        'id'   => $prefix . 'cargo_encargado_convivencia',
        'type' => 'textarea_small'
    ) );
    
    $group_field_id = $ec_agp->add_field( array(
        'id'          => $prefix . 'grupo_area_convivencia',
        'type'        => 'group',
        'description' => esc_html__( 'Agregue las funciones que desempeña el encargado del Especialista Convivencia', 'cmb2' ),
        'options'     => array(
            'group_title'    => esc_html__( 'Función', 'cmb2' ), // {#} gets replaced by row number
            'add_button'     => esc_html__( 'Agregar otra función', 'cmb2' ),
            'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
            'sortable'       => true,
            'closed'       => true,
        ),
    ) );

    $ec_agp->add_group_field( $group_field_id, array(
        'name'        => esc_html__( 'Función:', 'cmb2' ),
        'description' => esc_html__( 'Agregue una función', 'cmb2' ),
        'id'          => 'funcion',
        'type'        => 'text',
    ) );
}
?>