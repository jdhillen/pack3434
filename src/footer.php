      <!-- footer -->
      <footer class="footer" role="contentinfo">
        <div class="container">
          <div class="row">
            <div class="copyright">&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.</div>
          </div>
        </div>
      </footer>
      <?php wp_footer(); ?>
    </div>
		<?php get_template_part( 'template-parts/analytics', 'none' ); ?>
	</body>
</html>
