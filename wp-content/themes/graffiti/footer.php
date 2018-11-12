<?php
/**
 * The template for displaying the footer.
 *
 * @package graffiti
 */
?>


  <div class="site-footer">
    <div class="inner-site-footer">
      <p class="">COPYRIGHT &copy; <?php echo date('Y'); ?> ALL RIGHTS RESERVED</p>
    </div><!-- .inner-site-footer -->
  </div><!-- .site-footer -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
jQuery('.lifestyle-group').each(function(index, element) {
  jQuery(element).find('.lifestyle-page-mobile-dropdown').click(function(e) {
    $content = jQuery(element).find('.lifestyle-content');
    // console.log($content);
    $content.toggleClass('expanded');
    $arrow = jQuery(element).find('.lifestyle-arrow');
    // console.log($content);
    $arrow.toggleClass('rotated');
  });
});
</script>


<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<?php wp_footer(); ?>
</body>
</html>
