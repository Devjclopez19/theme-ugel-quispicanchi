<div class="content-header">
<?php 
    $opciones = get_option('ec_theme_options');
    $logo_p = $opciones['logo_principal'];
    $direccion = $opciones['direccion_sitio'];
    $telefono = $opciones['telefono_sitio'];
    $correo = $opciones['correo_sitio'];
    $grupo_slider = $opciones['grupo_slider'];
    $grupo_box = $opciones['grupo_box'];
?>
  <!-- barra superior -->
  <div class="bs d-lg-block d-none">
      <div class="container">
          <div class="bs_wrapper">
              <div class="bs_text">
                  <span><i class="fas fa-street-view"></i> <?php  echo $direccion; ?></span>
              </div>
              <div class="bs_text">
                  <span><i class="fa fa-phone-square" aria-hidden="true" style="transform: rotate(90deg);"></i> <?php  echo $telefono; ?></span>
              </div>
              <div class="bs_text">
                  <span><i class="fas fa-mail-bulk"></i> <?php  echo $correo; ?></span>
              </div>
              <div class="bs_text">
                  <span>Horario de atención: 08:00 am - 04:00 pm</span>
              </div>
          </div>
      </div>
  </div>
  <!-- end barra superior -->
  <!-- Header -->
  <section class="header container-full d-none d-lg-block p-0" >
      <div class="header__top container internas" id="header-theme">
          <div class="row zona-logos">
              <div class="col-md-3">
                  <div class="logo">
                      <div class="logo__content">
                          <div class="logo__img">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php if($logo_p):?>
                                <img src="<?php  echo $logo_p; ?>" alt="logo_ugel" class="img-fluid">
                                <?php else:?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logos.png" alt="logo_ugel" class="img-fluid">
                                <?php endif; ?>
                            </a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-8 sticky-menu__menu p-0 d-flex">
                <?php
                  $args = array(
                      'menu_class' => 'menu',
                      'container_id' => 'nav-1',
                      'container' => 'ul',
                      'theme_location' => 'menu_sticky'
                  );
                  wp_nav_menu($args);
                ?>
              </div>
              <div class="col-md-1">
                  <div class="logo-r">
                      <div class="logo-r__content">
                          <div class="logo-r__img transparencia">
                              <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13748#.Y5Z_kXbMJPY" target="_blank">
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/transparencia.png" alt="" class="img-fluid">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>   
  </section>
  <!-- Fin Header -->
  <!-- Sticky menu -->
  <div class="sticky-menu d-none d-lg-block" id="sticky-menu">
      <div class="row justify-content-center align-items-center">                
          <div class="sticky-menu__logo col-md-2">
              <div class="img-logo">
                  <a href="<?php echo esc_url(home_url('/')); ?>">
                      <?php if($logo_p):?>
                      <img src="<?php  echo $logo_p; ?>" alt="logo_ugel" class="img-fluid">
                      <?php else:?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/logos.png" alt="logo_ugel" class="img-fluid">
                      <?php endif; ?>
                  </a>
              </div>                   
          </div>
          <div class="sticky-menu__menu col-md-8">
            <?php
                $args = array(
                    'menu_class' => 'menu',
                    'container_id' => 'nav-2',
                    'container' => 'ul',
                    'theme_location' => 'menu_sticky'
                );
                wp_nav_menu($args);
            ?>
          </div>
      </div>
  </div>
  <!-- Sticky menu end -->
</div>