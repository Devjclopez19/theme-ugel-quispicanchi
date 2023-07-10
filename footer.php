    <!-- Brand Section -->
    <?php
        $opciones = get_option('ec_homepage_campos');
        $enlaces_cinta = $opciones['ec_homepage_cinta'];
    ?>
    <section class="brand container">
      <div class="container carousel-container">
          <div class="carousel-enlaces">
            <?php foreach($enlaces_cinta as $enlace): ?>
              <div>
                  <div class="carousel-enlaces__content">
                      <a href="<?php echo $enlace['link_enlace']; ?>">
                          <img src="<?php echo $enlace['img_enlace']; ?>" alt=""> 
                      </a>
                  </div>
              </div>
            <?php endforeach; ?>  
          </div>
      </div>        
    </section>
  <!-- Brand Section end-->
  <!-- Footer -->
  <?php 
    $opciones = get_option('ec_theme_options');
    $direccion = $opciones['direccion_sitio'];
    $telefono = $opciones['telefono_sitio'];
    $correo = $opciones['correo_sitio'];
    $facebook = $opciones['facebook_sitio'];
    $youtube = $opciones['youtube_sitio'];
    $instagram = $opciones['instagram_sitio'];
  ?>
  <footer class="footer p-0 mt-2">
    <div class="container footer-container">
        <div class="row m-0">
            <div class="col-md-4 col-sm-12 mb-md-3 mb-lg-0">
                <div class="footer__content-1"> 
                    <h4>UGEL QUISPICANCHI</h4>
                    <div class="linea-2"></div>
                    <div class="logo_ugel">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_quispi.png" alt="">
                    </div>
                    <p class="text-center">ESTUDIANTES INTERCULTURALES Y FELICES</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-md-3 mb-lg-0">
                <div class="footer__content-1"> 
                    <h4>Contactanos</h4>
                    <div class="linea-2"></div>
                    <p><i class="fas fa-street-view"></i> <?php echo $direccion; ?></p>
                    <p><i class="fas fa-phone-square"></i> <?php echo $telefono; ?></p>
                    <p><i class="fas fa-mail-bulk"></i> <?php echo $correo; ?></p>
                    <div class="redes-sociales">
                        <a href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo $youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-md-3 mb-lg-0">
                <div class="footer__content-1"> 
                    <h4>Enlaces de Importancia</h4>
                    <div class="linea-2"></div>
                    <div class="menu-footer">
                    <?php 
                        $args = array(
                            'menu_class' => '',
                            'container_id' => 'nav-4',
                            'container' => 'ul',
                            'theme_location' => 'menu_footer'
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copy">
        <div class="copyright">&copy; <?php echo date('Y'); ?> | <?php bloginfo( 'name' );?></div>
    </div>
  </footer>
<!-- Footer end-->
    <!-- Button back to -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-alt-circle-up"></i></a>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>