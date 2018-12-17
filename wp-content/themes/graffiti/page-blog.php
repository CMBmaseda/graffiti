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
      <div class="headline">
        <img src="<?php echo $background_image ?>" />
        <div class="headline-overlay">
          <h1><?php the_title(); ?></h1>
        </div><!-- .hero-overlay -->
        <ul>
          <li>
            <div class="page-theme-button page-theme-moon-button">
              <a href="#/"><i class="fa fa-moon-o" aria-hidden="true"></i></a>
            </div>
          </li>
          <li>
            <div class="page-theme-button disabled page-theme-lightbulb-button">
              <a href="#/"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></a>
            </div>
          </li>
        </ul>
        <h2><a href="/home">Home</a></h2>
      </div><!-- .headline  -->

      <div class="content-container">
        <div class="content-frames">
          <div class="thumbs">
            <div class="thumbs-inner blog">
              <ul>
                <!-- Find and list all posts -->
                <?php
                // the query
                $all_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1 ) );
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
                <?php else : ?>
                  <p><?php _e( 'Sorry, no posts were found.' ); ?></p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </ul>
            </div><!-- .thumbs-inner -->
          </div><!-- .thumbs -->
        </div><!-- .content-frames -->
      </div><!--. content-container -->

      <div class="content-wormholes content-mobile">
        <!-- Mobile Nav -->
        <?php
          wp_nav_menu( array(
            'theme_location' => 'mobile_nav',
            'container_class' => ''
          ) );
        ?>
      </div><!-- content-wormholes content-mobile -->


    <?php endwhile;
  endif;
?>


<?php get_footer(); ?>
