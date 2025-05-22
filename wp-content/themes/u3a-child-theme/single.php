<?php get_header(); ?>

<main class="u3a-single-post container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="news-post">
      <header>
        <h1><?php the_title(); ?></h1>
        <p class="meta">
          <em>Published on <?php echo get_the_date(); ?> by <?php the_author(); ?></em>
        </p>
        <?php if (has_post_thumbnail()) : ?>
          <div class="featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
      </header>

      <div class="post-content">
        <?php the_content(); ?>
      </div>

      <footer class="post-footer">
        <p><a href="<?php echo home_url('/news'); ?>" class="button secondary">← Back to News</a></p>
      </footer>
    </article>

  <?php endwhile; else: ?>
    <p>Sorry, no post found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
