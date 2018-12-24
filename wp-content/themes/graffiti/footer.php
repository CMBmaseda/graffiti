<?php
/**
 * The template for displaying the footer.
 *
 * @package graffiti
 */
?>


<div class="social">
  <ul class="dimmers">
    <li title="Darken the layout.">
      <div class="page-theme-button page-theme-moon-button">
        <a href="#/"><i class="fa fa-moon-o" aria-hidden="true"></i></a>
      </div>
    </li>
    <li title="Brighten the layout.">
      <div class="page-theme-button disabled page-theme-lightbulb-button">
        <a href="#/"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></a>
      </div>
    </li>
  </ul>
  <ul class="icons">
    <?php if ( is_active_sidebar( 'sidebar-facebook' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-facebook' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'sidebar-instagram' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-instagram' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'sidebar-twitter' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-twitter' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'sidebar-youtube' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-youtube' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'sidebar-github' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-github' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'sidebar-linkedin' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-linkedin' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'sidebar-phone' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-phone' ); ?>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'sidebar-email' ) ) : ?>
    	<?php dynamic_sidebar( 'sidebar-email' ); ?>
    <?php endif; ?>
  </ul><!-- icons -->
  <p class="">&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?>.&nbsp; ALL RIGHTS RESERVED</p>
</div><!-- social -->


<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/thumbs.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>


<?php wp_footer(); ?>
</body>
</html>
