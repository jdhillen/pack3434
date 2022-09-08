<?php get_header(); ?>

<main role="main" aria-label="Content">
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <section>
          <h1><?php _e( 'News', 'html5blank' ); ?></h1>
          <?php get_template_part('template-parts/loop'); ?>
          <?php get_template_part('template-parts/pagination'); ?>
        </section>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
