<?php get_header(); ?>


<div class="contact">

  <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>


        <?php
          $background_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
          if ( ! $background_image) {
            $background_image = get_template_directory_uri() . '/images/Graffiti.jpg';
          }
        ?>
        <div class="headline">
          <img src="<?php echo $background_image ?>" />
          <div class="headline-overlay">
            <h1><?php the_title(); ?></h1>
          </div><!-- .headline-overlay -->
        </div><!-- .headline  -->

        <div class="contact-content">
          <div><?php the_content(); ?></div>
        </div><!-- .contact-content -->


      <?php endwhile;
    endif;
  ?>

</div><!-- .contact -->


<?php get_footer(); ?>
