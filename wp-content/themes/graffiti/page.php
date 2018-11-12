<?php get_header(); ?>


<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

      <?php if ( is_front_page() ) { ?>
      <?php } else { ?>
      <?php } ?>

      <?php the_content(); ?>

    <?php endwhile;
  endif;
?>

<?php get_footer(); ?>
