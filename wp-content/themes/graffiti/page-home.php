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
                <img src="<?php echo get_template_directory_uri() . '/images/rps.jpg'; ?>" />
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
          <ul>
            <a class="wormholes" href="/home" rel="bookmark" title="home">
              <li>
                <h5>Home</h5>
                <h6>Static SubTitle</h6>
              </li>
            </a>
            <a class="wormholes" href="/contact-us" rel="bookmark" title="contact-us">
              <li>
                <h5>Contact</h5>
                <h6>Static SubTitle</h6>
              </li>
            </a>
         </ul>
       </div><!-- content-wormholes content-bigscreen -->
        <div class="content">
          <div class="content-video">
            <h2>Static <a href="#/" title="">Link</a></h2>
            <iframe src="https://www.youtube.com/embed/Clc9ZZ_egzE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div><!--. content-video -->
        </div><!--. content -->
      </div><!--. content-container -->

      <div class="content-frames">
        <h2>Static <a href="#/" title="">Link</a></h2>
        <!-- <iframe src="https://www.youtube.com/embed/3clUKc7uLoA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.9132996708067!2d-74.10305668460764!3d40.299883979378826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f378897a731d0b5!2sA%26S+Courier+Service!5e0!3m2!1sen!2sus!4v1544391489394" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <div class="thumbs">
           <div class="thumbs-inner">
             <ul>
               <li>
                 <a href="#img1">
                   <img src="<?php echo get_template_directory_uri() . '/images/graffiti1.png'; ?>" alt="">
                   <h4>Static Title</h4>
                   <h5>Static SubTitle</h5>
                 </a>
                 <a href="#/" class="lightbox" id="img1">
                   <div class="lightbox-image-wrapper">
                     <span>X</span>
                     <img src="<?php echo get_template_directory_uri() . '/images/graffiti1.png'; ?>" alt="">
                   </div>
                 </a>
               </li>
               <li>
                 <a href="#img2">
                   <img src="<?php echo get_template_directory_uri() . '/images/graffiti2.png'; ?>" alt="">
                   <h4>Static Title</h4>
                   <h5>Static SubTitle</h5>
                 </a>
                 <a href="#/" class="lightbox" id="img2">
                   <div class="lightbox-image-wrapper">
                     <span>X</span>
                     <img src="<?php echo get_template_directory_uri() . '/images/graffiti2.png'; ?>" alt="">
                   </div>
                 </a>
               </li>
               <li>
                 <a href="#img3">
                   <img src="<?php echo get_template_directory_uri() . '/images/graffiti3.png'; ?>" alt="">
                   <h4>Static Title</h4>
                   <h5>Static SubTitle</h5>
                 </a>
                 <a href="#/" class="lightbox" id="img3">
                   <div class="lightbox-image-wrapper">
                     <span>X</span>
                     <img src="<?php echo get_template_directory_uri() . '/images/graffiti3.png'; ?>" alt="">
                   </div>
                 </a>
               </li>
               <li>
                 <a href="#img4">
                   <img src="<?php echo get_template_directory_uri() . '/images/graffiti4.png'; ?>" alt="">
                   <h4>Static Title</h4>
                   <h5>Static SubTitle</h5>
                 </a>
                 <a href="#/" class="lightbox" id="img4">
                   <div class="lightbox-image-wrapper">
                     <span>X</span>
                     <img src="<?php echo get_template_directory_uri() . '/images/graffiti4.png'; ?>" alt="">
                   </div>
                 </a>
               </li>
               <li>
                 <a href="#img5">
                   <img src="<?php echo get_template_directory_uri() . '/images/graffiti5.png'; ?>" alt="">
                   <h4>Static Title</h4>
                   <h5>Static SubTitle</h5>
                 </a>
                 <a href="#/" class="lightbox" id="img5">
                   <div class="lightbox-image-wrapper">
                     <span>X</span>
                     <img src="<?php echo get_template_directory_uri() . '/images/graffiti5.png'; ?>" alt="">
                   </div>
                 </a>
               </li>
               <li>
                 <a href="#img6">
                   <img src="<?php echo get_template_directory_uri() . '/images/graffiti6.png'; ?>" alt="">
                   <h4>Static Title</h4>
                   <h5>Static SubTitle</h5>
                 </a>
                 <a href="#/" class="lightbox" id="img6">
                   <div class="lightbox-image-wrapper">
                     <span>X</span>
                     <img src="<?php echo get_template_directory_uri() . '/images/graffiti6.png'; ?>" alt="">
                   </div>
                 </a>
               </li>
               <li>
                 <a href="#img7">
                   <img src="<?php echo get_template_directory_uri() . '/images/graffiti7.png'; ?>" alt="">
                   <h4>Static Title</h4>
                   <h5>Static SubTitle</h5>
                 </a>
                 <a href="#/" class="lightbox" id="img7">
                   <div class="lightbox-image-wrapper">
                     <span>X</span>
                     <img src="<?php echo get_template_directory_uri() . '/images/graffiti7.png'; ?>" alt="">
                   </div>
                 </a>
               </li>
               <li>
                 <a href="#img8">
                   <img src="<?php echo get_template_directory_uri() . '/images/graffiti8.png'; ?>" alt="">
                   <h4>Static Title</h4>
                   <h5>Static SubTitle</h5>
                 </a>
                 <a href="#/" class="lightbox" id="img8">
                   <div class="lightbox-image-wrapper">
                     <span>X</span>
                     <img src="<?php echo get_template_directory_uri() . '/images/graffiti8.png'; ?>" alt="">
                   </div>
                 </a>
               </li>
             </ul>
           </div><!-- .thumbs-inner -->
         </div><!-- .thumbs -->
      </div><!-- .content-frames -->


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
