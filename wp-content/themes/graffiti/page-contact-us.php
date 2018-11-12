<?php get_header(); ?>


<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <?php
      $background_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
      if ( ! $background_image) {
        $background_image = get_template_directory_uri() . '/images/Graffiti.jpg';
      }
    ?>

    <div class="">
      <p><?php the_content(); ?></p>
    </div>


    <?php endwhile;
  endif;
?>


<?php get_footer(); ?>
