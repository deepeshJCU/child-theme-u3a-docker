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

  <script>
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.getElementById('site-navigation');

    toggle.addEventListener('click', function () {
      nav.classList.toggle('active');
    });
  });
</script>


  <?php wp_footer(); ?>
</body>
</html>
