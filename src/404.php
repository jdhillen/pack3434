<?php get_header(); ?>

<main role="main" aria-label="Content">
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <section>
          <article id="post-404">
            <h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
            <h2>
              <a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
            </h2>
          </article>
        </section>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
