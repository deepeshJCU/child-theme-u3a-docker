<?php
/* Template Name: Become a Member */
get_header(); ?>

<main class="u3a-join container">
  <h1>Become a Member</h1>
  <p>Join a friendly, stimulating environment that promotes learning and connection for seniors in our community.</p>

  <section>
    <h2>Membership Information</h2>
    <ul>
      <li>Annual Fee: $30</li>
      <li>Includes unlimited program access</li>
      <li>Access to newsletters and Friday talks</li>
    </ul>
  </section>

  <section>
    <h2>How to Join</h2>
    <p>1. Fill out the form below or download a PDF version.</p>
    <p>2. Submit it to our office or email it to deepesh.bijarnia@my.jcu.edu.au.</p>
  </section>

  <section>
    <h2>Membership Form</h2>
    <?php echo do_shortcode('[wpforms id="124"]'); ?>
  </section>
</main>

<?php get_footer(); ?>
