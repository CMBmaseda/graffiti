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
      </div><!-- .headline  -->

      <div class="wrapper group">
        <div class="content-top">
          <div class="thesis group">
            <div class="thesis-pic">
              <a href="#/" title="">
                <!-- Find and display the most recent post's image + Link -->
                <?php
                // the query
                $all_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1 ) );
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
                       echo "<a href='" . $thumb_link . "'>" . $thumb_image . '</a>';
                     ?>
                  <?php endwhile; ?>
                <?php else : ?>
                  <p><?php _e( 'Sorry, no posts were found.' ); ?></p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </a>
            </div><!-- thesis-pic -->
            <div class="thesis-statement">
              <?php the_content(); ?>
            </div><!-- thesis-statement -->
          </div><!-- thesis group -->
        </div><!--  content-top -->
      </div><!-- wrapper group -->

      <div class="content-container">
        <div class="content-wormholes content-bigscreen">
          <h2><a href="/blog">Recent Posts</a></h2>
          <ul>
            <!-- Find and display the most recent post's image + Link -->
            <?php
            // the query
            $all_posts = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 5 ) );
            if ( $all_posts->have_posts() ) : ?>
              <?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
                 <?php
                   $title = get_the_title();
                   if (!empty($title)) {
                     $wormhole_title = $title;
                   } else {
                     $wormhole_title = 'Unknown';
                   }
                   $link = get_the_permalink();
                   echo "<li><a href='" . $link . "'>" . $wormhole_title . '</a></li>';
                 ?>
              <?php endwhile; ?>
            <?php else : ?>
              <p><?php _e( 'Sorry, no posts were found.' ); ?></p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <!-- Primary Nav -->
          <?php
            // wp_nav_menu( array(
            //   'theme_location' => 'primary_nav',
            //   'container_class' => ''
            // ) );
          ?>
        </div><!-- content-wormholes content-bigscreen -->
        <div class="content">
          <div class="content-video">
            <!-- Iframe Widget -->
            <?php if ( is_active_sidebar( 'sidebar-iframe' ) ) : ?>
              <?php dynamic_sidebar( 'sidebar-iframe' ); ?>
            <?php endif; ?>
          </div><!--. content-video -->
        </div><!--. content -->
      </div><!--. content-container -->

      <div class="content-frames">
        <!-- <iframe src="https://www.youtube.com/embed/3clUKc7uLoA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.9132996708067!2d-74.10305668460764!3d40.299883979378826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f378897a731d0b5!2sA%26S+Courier+Service!5e0!3m2!1sen!2sus!4v1544391489394" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <?php $args = array('post_type' => 'graffiti_thumb'); ?>
        <?php $loop = new WP_Query($args); ?>
        <?php if ( $loop->have_posts() ) : ?>
          <!-- Gallery Title Widget -->
          <?php if ( is_active_sidebar( 'sidebar-gallery' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-gallery' ); ?>
          <?php endif; ?>
        <?php else: ?>
         <?php // No Thumbs ?>
        <?php endif; ?>
        <div class="thumbs">
          <div class="thumbs-inner">
            <ul>
               <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
                 <?php
                   $gallery_title = get_the_title( $thumbID );
                   if (!empty($gallery_title)) {
                     $thumb_title = $gallery_title;
                   } else {
                     $thumb_title = 'Unknown';
                   }

                   $gallery_excerpt = get_the_excerpt( $thumbID );
                   if (!empty($gallery_excerpt)) {
                     $thumb_excerpt = $gallery_excerpt;
                   } else {
                     $thumb_excerpt = '';
                   }

                   $thumb_image = get_the_post_thumbnail( $thumbID );
                   $thumb_subtitle = get_post_meta( $post->ID, 'subtitle', true );
                   $thumb_rank = get_post_meta( $post->ID, 'rank', true );
                   echo '<li>';
                   echo "<a href='#img" . $thumb_rank . "'>" . $thumb_image . '<h4>' . $thumb_title . '</h4>' . '<h5>' . $thumb_subtitle . '</h5>' . '</a>';
                   echo "<a href='#/' class='lightbox' id='img" . $thumb_rank . "'>" . "<div class='lightbox-image-wrapper'><span>X</span>" . $thumb_image . '<p>' . $thumb_excerpt . '</p>' . '</div>' . '</a>';
                   echo '</li>';
                 ?>
               <?php endwhile; ?>
             </ul>
           </div><!-- .thumbs-inner -->
         </div><!-- .thumbs -->
        <?php else: ?>
         <?php // No Thumbs ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div><!-- .content-frames -->


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
