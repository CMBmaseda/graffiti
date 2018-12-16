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
        </div><!-- .headline  -->

        <div class="content-wormholes content-bigscreen">
          <!-- Primary Nav -->
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary_nav',
              'container_class' => ''
            ) );
          ?>
        </div><!-- content-wormholes content-bigscreen -->

        <div class="contact-content">
          <div><?php the_content(); ?></div>
        </div><!-- .contact-content -->

        <!-- <h3><div class="breadcrumb"><?php //get_breadcrumb(); ?></h3> -->

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

</div><!-- .contact -->


<?php get_footer(); ?>
