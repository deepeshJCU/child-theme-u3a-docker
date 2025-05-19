<footer class="site-footer">
    <div class="container">
      <nav class="footer-navigation">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'menu_class'     => 'footer-menu',
            'container'      => false,
          ));
        ?>
      </nav>
      <p>&copy; <?php echo date('Y'); ?> U3A Townsville. Built by Deepesh Bijarnia for CP3402.</p>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
