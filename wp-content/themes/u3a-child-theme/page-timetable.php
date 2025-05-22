<?php
/* Template Name: Timetable */
get_header(); ?>

<main class="u3a-timetable container">
  <h1>Weekly Timetable</h1>
  <p>View our up-to-date class schedule for the week.</p>

  <section>
    <h2>Timetable</h2>
    <p>You can filter or update this table from the admin panel.</p>

    <?php echo do_shortcode('[table id=1 /]'); // Use TablePress or a similar plugin ?>
  </section>

  <section>
    <h2>Locations</h2>
    <ul>
      <li>Aitkenvale Community Centre</li>
      <li>Magnetic Island Centre</li>
      <li>JCU Education Rooms</li>
    </ul>
  </section>
</main>

<?php get_footer(); ?>
