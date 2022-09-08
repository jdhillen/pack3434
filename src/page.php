<?php get_header(); ?>

<main role="main" aria-label="Content">
  <section>
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h1><?php the_title(); ?></h1>
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php the_content(); ?>
            </article>
          <?php endwhile; ?>
          <?php else: ?>
            <article>
              <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
            </article>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
