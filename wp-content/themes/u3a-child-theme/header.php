<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(''); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <div class="branding">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
        <?php if (has_custom_logo()) {
          the_custom_logo();
        } else { ?>
          <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <?php } ?>
      </a>
      <p class="site-description"><?php bloginfo('description'); ?></p>
    </div>

    <button class="menu-toggle" aria-label="Toggle menu">&#9776;</button>

    <nav class="main-navigation" id="site-navigation">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'menu_class'     => 'main-menu',
          'container'      => false,
        ));
      ?>
    </nav>
  </div>
</header>

