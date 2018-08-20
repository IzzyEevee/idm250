<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hannah Juraifani | <?php the_title();?></title>
  <!-- Open Wordpress Header Code -->
  <?php wp_head(); ?>
<!-- Close Wordpress Header Code -->
</head>
  <body<?php body_class(); ?>>
    <header>
      <img class="headerImg" src="<?php echo bloginfo('template_url'); ?>/dist/img/header/header.png"/>
      <span class="menuIcon" onclick="openMenu()">&#9776;</span>
    <!-- menu -->
      <div id= "sideMenu" class="sideMenu">
          <?php wp_nav_menu(array(
            'theme_location' => 'main',
            'menu_class' => 'menu',
            'items_wrap' => my_nav_wrap()
          )); ?>
    </div>
    <p class="logoTitle">Hannah Juraifani</p>
    </header>
