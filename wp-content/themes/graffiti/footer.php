<?php
/**
 * The template for displaying the footer.
 *
 * @package graffiti
 */
?>


<div class="social">
  <p class="">&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?>.&nbsp; ALL RIGHTS RESERVED</p>
  <ul class="icons">
    <li><a href="https://www.facebook.com/" target= "_blank" rel="bookmark" title="Facebook" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
    <li><a href="https://www.instagram.com/" target= "_blank" rel="bookmark" title="Instagram" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
    <li><a href="https://www.twitter.com/" target= "_blank" rel="bookmark" title="Twitter" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
    <li><a href="https://www.youtube.com/" target= "_blank" rel="bookmark" title="Youtube" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
    <li>
     <a href="tel:555-555-5555" title="phone">
       <i class="icon fa-phone" aria-hidden="true"></i>
     </a>
    </li>
    <li>
     <a href="mailto:person@example.com" title="email">
       <i class="icon fa-envelope" aria-hidden="true"></i>
     </a>
    </li>
  </ul><!-- icons -->
</div><!-- social -->


<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js"></script>


<?php wp_footer(); ?>
</body>
</html>
