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
      <section class="headline" style="background-image: url('<?php echo $background_image; ?>')">
        <div class="headline-overlay">
          <h1><div class="breadcrumb"><?php get_breadcrumb(); ?></h1>
        </div><!-- .headline-overlay -->
      </section><!-- .headline -->

      <div class="wrapper group">
        <div class="content-top">
          <div class="thesis group">
            <div class="thesis-pic">
              <a href="#img1">
                <img src="<?php echo $background_image ?>" />
              </a>
              <a href="#/" class="lightbox" id="img1">
                <div class="lightbox-image-wrapper">
                  <span>X</span>
                  <img src="<?php echo $background_image ?>" />
                </div>
              </a>
            </div><!-- thesis-pic -->
            <div class="thesis-statement">
              <?php the_content(); ?>
            </div><!-- thesis-statement -->
          </div><!-- thesis group -->
        </div><!--  content-top -->
      </div><!-- wrapper group -->

      <div class="content-container">
        <div class="content-frames">
          <h2><a href="/blog">More Posts</a></h2>
          <div class="thumbs">
            <div class="thumbs-inner blog">
              <ul>
                <!-- Find and list all posts -->
                <?php
                // the query
                $all_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 12 ) );
                if ( $all_posts->have_posts() ) : ?>
                  <?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
                     <?php
                       $gallery_title = get_the_title();
                       if (!empty($gallery_title)) {
                         $thumb_title = $gallery_title;
                       } else {
                         $thumb_title = 'Unknown';
                       }
                       $thumb_image = get_the_post_thumbnail( $thumbID );
                       $thumb_link = get_the_permalink();
                       echo '<li>';
                       echo "<a href='" . $thumb_link . "'>" . $thumb_image . '<h4>' . $thumb_title . '</h4>' . '</a>';
                       echo '</li>';
                     ?>
                   <?php endwhile; ?>
                   <!-- Add the pagination functions here. -->
                   <?php //next_posts_link(); ?>
                   <?php //previous_posts_link(); ?>
                <?php else : ?>
                  <p><?php _e( 'Sorry, no posts were found.' ); ?></p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            </div><!-- .thumbs-inner -->
          </div><!-- .thumbs -->
        </div><!-- .content-frames -->
      </div><!--. content-container -->


    <?php endwhile;
  endif;
?>


<?php get_footer(); ?>
