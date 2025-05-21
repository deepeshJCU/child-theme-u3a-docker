<?php
/* Template Name: Activities */
get_header(); ?>

<main class="u3a-activities container">
  <h1>Weekly Activities</h1>
  <p>Explore our broad range of weekly programs—from arts and fitness to academic talks and social events.</p>

  <section class="activity-categories">
    <h2>Categories</h2>
    <ul>
      <li>🎨 Creative</li>
      <li>💡 Humanities</li>
      <li>🧪 STEM</li>
      <li>🏃 Health & Leisure</li>
      <li>📚 Friday Talks (Townsville)</li>
      <li>🌴 Monday Talks (Magnetic Island)</li>
    </ul>
  </section>

  <section class="activity-grid">
    <h2>Featured Programs</h2>
<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gardening.jpg" alt="Gardening Group">
  <h3>Gardening Group</h3>
  <p>Short summary of group activities</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/taichi.jpg" alt="Tai Chi">
  <h3>Tai Chi</h3>
  <p>Geoff Ward – 0417 170 745<br>Peter Duckworth (Magnetic Island) – 4758 1981</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/walking.jpg" alt="Walking">
  <h3>Walking Group</h3>
  <p>Margaret Cuthbert – 4779 1882</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/art.jpg" alt="Art Group">
  <h3>Creative Arts</h3>
  <p>Heather – 0408 737 021<br>Jan Fels – 0473 015 613<br>Kathleen – 4779 1252</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/photography.jpg" alt="Photography">
  <h3>Photography</h3>
  <p>Roland Lange – 0406 471 721</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/finance.jpg" alt="Finance">
  <h3>Finance</h3>
  <p>John Weil – 4723 8615</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/astronomy.jpg" alt="Astronomy">
  <h3>STEM</h3>
  <p>Terry Lambrose – 0434 634 822</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/languages.jpg" alt="Languages">
  <h3>Languages</h3>
  <p>French – Georgina Valdeter, Gisela Edwards<br>Russian – Lucy Figg<br>Spanish – Graham Collins, Tania Thoreau</p>
</div>

<div class="activity-card">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/philosophy.jpg" alt="Philosophy">
  <h3>Philosophy</h3>
  <p>Lyam Morris – 0439 281 883</p>
</div>

  </section>

  <section>
    <h2>Sample Program Format</h2>
    <ul>
      <li><strong>Creative Writing</strong> – Weekly, Room 4, Fridays 10–12pm</li>
      <li><strong>Tai Chi</strong> – Aitkenvale Hall, Mondays 8–9am</li>
      <li><strong>STEM for Seniors</strong> – JCU Room B2.12, Thursdays 1–3pm</li>
    </ul>
  </section>
</main>

<?php get_footer(); ?>
