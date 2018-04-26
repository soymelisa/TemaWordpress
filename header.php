<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Cabin|Open+Sans:400,600,700|Oswald" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">

  <!-- REVISAR -->
  <title>
    <?php if (is_home()){
      // Si estamos en la pagina de Inicio obtenemos el nombre del Blog
      echo get_bloginfo('name');
    } else if (is_single()){
      // Si es un post mostramos el titulo
      echo the_title();
    } else {
      // De otra forma obtenemos el titulo del post
      echo get_bloginfo('name');
    }?>
  </title>

  <?php wp_head(); ?>

</head>
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="logo col-xs-12 col-sm-6 ">
          <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Melisa Perez Logo"></a>
        </div>
        <div class="redes-sociales col-xs-12 col-sm-6">
          <a class="youtube" href="https://www.youtube.com/channel/UCsm7n-jiJph1Ez0YQYO5crw"><i class="fab fa-youtube"></i></a>
          <a class="twitter" href="https://www.twitter.com/soymelisa"><i class="fab fa-twitter"></i></a>
          <a class="facebook" href="https://www.facebook.com/soymelisa"><i class="fab fa-facebook-f"></i></a>
        </div>
      </div>
    </div>

      <nav class="menu">
        <div class="container">
          <div class="row">
            <?php wp_nav_menu(array(
                'container' => false,
                'menu_class' => 'col-md-12',
                'items_wrap' => '<ul class="col-md-12">%3$s </ul>',
                'theme_location' => 'menu-top'
            )); ?>
          </div>
        </div>
      </nav>
      <div class="ad container hidden-xs">
        <div class="row">
          <div class="col-md-12">
            <img src="<?php bloginfo('template_url'); ?>/img/ad.jpg" alt="">
            <!-- Como si fuesen los anuncios -->
          </div>
        </div>
      </div>
  </header>