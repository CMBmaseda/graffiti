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
        <img src="<?php echo $background_image ?>" />

        <div class="content-wormholes content-bigscreen">
          <ul>
            <a class="wormholes" href="/home" rel="bookmark" title="home">
              <li>
                <h5>Home</h5>
                <h6>Static SubTitle</h6>
              </li>
            </a>
            <a class="wormholes" href="/contact-us" rel="bookmark" title="">
              <li>
                <h5>Contact</h5>
                <h6>Static SubTitle</h6>
              </li>
            </a>
         </ul>
        </div><!-- content-wormholes content-bigscreen -->

        <div class="contact-content">
          <h1><?php the_title(); ?></h1>
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
          <div><?php the_content(); ?></div>
        </div><!-- .contact-content -->

        <!-- <h3><div class="breadcrumb"><?php //get_breadcrumb(); ?></h3> -->

        <div class="content-wormholes content-mobile">
          <ul>
            <a class="wormholes" href="/home" rel="bookmark" title="home">
              <li>
                <h5>Home</h5>
                <h6>Static SubTitle</h6>
              </li>
            </a>
            <a class="wormholes" href="/contact-us" rel="bookmark" title="">
              <li>
                <h5>Contact</h5>
                <h6>Static SubTitle</h6>
              </li>
            </a>
          </ul>
        </div><!-- content-wormholes content-mobile -->


      <?php endwhile;
    endif;
  ?>

</div><!-- .contact -->


<?php get_footer(); ?>
