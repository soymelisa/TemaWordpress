
<aside class="sidebar col-md-4">
          <div class="widget redes-sociales">
            <div class="titulo-seccion">
              <h3>Síguenos</h3>
            </div>
              <div class="redes-sociales">
                <a class="youtube" href="https://www.youtube.com/channel/UCsm7n-jiJph1Ez0YQYO5crw">
                  <i class="icono fab fa-youtube"></i>
                  <span class="seguidores">130k</span>
                </a>
                <a class="twitter" href="https://www.twitter.com/soymelisa">
                    <i class="icono fab fa-twitter"></i>
                    <span class="seguidores">6k</span>
                </a>
                <a class="facebook" href="https://www.facebook.com/soymelisa">
                      <i class="icono fab fa-facebook"></i>
                      <span class="seguidores">6.5k</span>
                </a>
              </div>
            </div>

          <div class="widget boletin">
            <div class="titulo-seccion">
              <h3>Suscríbete</h3>
              <form action="" class="formulario">
                <label for="email">Suscríbete a nuestro boletín</label>
                <input type="email" id="email" placeholder="Correo Electrónico" required>
                <input type="submit" value="Enviar">
              </form>
            </div>
          </div>

          <div class="widget ad">
            <div class="contenedor-ad">
              <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ad2.jpg" alt=""></a>
            </div>
          </div>
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : endif; ?>
</aside>