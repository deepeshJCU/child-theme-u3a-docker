<?php
/* Template Name: News & Updates */
get_header(); ?>

<main class="u3a-news container">
  <h1>News & Updates</h1>
  <p>Stay informed with our latest newsletters, events, and updates.</p>

  <?php
  $news_query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
  ));

  if ($news_query->have_posts()):
    while ($news_query->have_posts()): $news_query->the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><em><?php the_date(); ?></em></p>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile;
    wp_reset_postdata();
  else:
    echo '<p>No news found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
