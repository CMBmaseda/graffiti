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
      </div><!-- .headline  -->

      <div class="wrapper group">
        <div class="content-top">
          <div class="thesis group">
            <div class="thesis-pic">
              <a href="#/" title="">
                <img src="<?php echo get_template_directory_uri() . '/images/rps.jpg'; ?>" alt="Click to play a quick game of rock, paper, scissors" title="Click to play a quick game of rock, paper, scissors"/>
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
          <!-- Primary Nav -->
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary_nav',
              'container_class' => ''
            ) );
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


<script>
jQuery('.thesis-pic a').on('click', function () {
  var choiceArray = ["rock", "paper", "scissors", "scissor", "Hammer"];

      var getchoice1 = function()
    {
      var choice1 = undefined;
      var choice1Index = undefined;

      while (true)
      {
        choice1 = prompt("Please choose rock, paper, or scissors");
        choice1Index = choiceArray.indexOf(choice1);

        if (choice1Index >= 0 && choice1Index <= 4)
            return choice1;

        alert("Your choice doesn't match rock, paper, or scissors");
      }
    }

  var getchoice2 = function()
  {
  var choice2 = Math.random();
   console.log(choice2);

    if (choice2 < 0.34)
      {
        choice2 = "rock";
        return choice2;
        console.log(choice2);
      }
    else if(choice2 <= 0.67)
      {
        choice2 = "paper";
        return choice2;
        console.log(choice2);
      }
    else
      {
       choice2 = "scissors", "scissor";
       return choice2;
       console.log(choice2);
      }
  }

  var compare = function(choice1, choice2)
  {
    if (choice1 === choice2)
      return "Tie";

    if (choice1 === "paper")
    {
      if (choice2 === "rock")
        {
          return "paper beats rock";
        }
      else //scissors
        {
          return "scissors beat paper";
        }
      }
      if (choice1 === "rock")
      {
        if (choice2 === "paper")
          {
            return "paper beats rock";
          }
        else //scissors
          {
            return "rock beats scissors";
          }
      }
      else //scissors
      {
        if (choice2 === "paper")
        {
          return "scissors beat paper";
        }
        else //rock
        {
            return "rock beats scissors";
        }
      }
  }

  var runGame = function()
  {
    var choice1 = getchoice1();
    var choice2 = getchoice2();
    var gameResult = compare(choice1, choice2);
    gameResult = gameResult;
    alert(gameResult);
    console.log(gameResult);
  }

  runGame();
});
</script>


<?php get_footer(); ?>
