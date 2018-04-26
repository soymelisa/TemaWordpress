
  <footer>
    <div class="ad container hidden-xs">
      <div class="col-md-12">
        <img src="img/ad.jpg" alt="">
      </div>


    </div>
    <nav class="menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php wp_nav_menu(array(
              'container' => false,
              'menu_class' => '',
              'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
              'theme_location' => 'menu-footer'
            )); ?>
          </div>
        </div>
      </div>
    </nav>
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Sitio creado por Melisa Pérez</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</html>
