<?php
/* Template Name: News & Updates */
get_header(); ?>

<main class="u3a-news container">
  <h1>News & Updates</h1>
  <p>Stay informed with our latest newsletters, events, and updates. </p>
  <small>Go to:
Dashboard → Posts → Add New

For each news post:

✅ Give it a title and content

✅ Add a featured image (optional)

✅ Assign it a category like News, Events, or Newsletter (optional but useful) </small>

  <?php
  $news_query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
  ));

  if ($news_query->have_posts()):
    while ($news_query->have_posts()): $news_query->the_post(); ?>
      <article>
        <?php if (has_post_thumbnail()): ?>
            <div class="featured-image">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><em><?php the_date(); ?></em></p>
        <?php the_excerpt(); ?>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button secondary">Read More</a>

      </article>
    <?php endwhile;
    wp_reset_postdata();
  else:
    echo '<p>No news found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
