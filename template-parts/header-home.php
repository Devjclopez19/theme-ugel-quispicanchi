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
  <section class="header container-full d-lg-block p-0" >
    <!-- SLIDER -->
    <div class="slider-content">
        <div class="slider-wrapper">
          <div class="slider slider-single">
              <?php foreach($grupo_slider as $slider): ?>
                <div>
                    <div class="slider-single__content">
                        <a >
                            <img src="<?php echo $slider['img_slider']; ?>" alt="slider">
                        </a>
                        <div class="slider-cta">
                            <?php if($slider['url_slider'] != ''): ?>
                            <a href="<?php echo $slider['url_slider']; ?>" class="btn-cta btn-cta-s">Ver publicación</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
              <?php endforeach; ?>
        </div>
    </div>
    <!-- SLIDER-end -->
    <div class="header__top container d-lg-block d-none" id="header-theme">
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
            <div class="col-md-9">
            <?php
                $args = array(
                    'menu_class' => 'menu',
                    'container_id' => 'nav-2',
                    'container' => 'ul',
                    'theme_location' => 'menu_principal'
                );
                wp_nav_menu($args);
            ?>
            </div>
        </div>
    </div>
  </section>
  <!-- Header-end --> 
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
  <!-- Cajas de Texto -->
  <div class="container">
      <div class="primary-box">
          <?php foreach($grupo_box as $box): ?>
          <div class="primary-box_item">
              <div class="primary-box_item__img">
                  <a href="<?php echo $box['url_box']; ?>">
                      <img src="<?php echo $box['img_box']; ?>" alt="">
                  </a>
              </div>
              <div class="primary-box_item__titulo d-none d-lg-block">
                  <a href="<?php echo $box['url_box']; ?>"><?php echo $box['titulo_box']; ?></a>
              </div>
          </div>
          <?php endforeach; ?>
      </div>
  </div>
  <!-- FIN Cajas de Texto -->
</div>