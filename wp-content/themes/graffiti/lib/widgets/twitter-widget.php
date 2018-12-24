<?php

// Register and load the widget
function twitter_load_widget() {
  register_widget( 'twitter_widget' );
}

add_action( 'widgets_init', 'twitter_load_widget' );

// Creating the widget
class twitter_widget extends WP_Widget {

  function __construct() {
    parent::__construct(

      // Base ID of your widget
      'twitter_widget',

      // Widget name will appear in UI
      __('Footer Twitter Icon', 'twitter_widget_domain'),

      // Widget description
      array( 'description' => __( 'A Twitter icon in the footer.', 'twitter_widget_domain' ), )
    );
  }


  // Creating widget front-end
  public function widget( $args, $instance ) {
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];

    $link = $instance['link'];

    if ( isset( $instance[ 'link' ] ) ) {
      echo ( "<a href='" . $link . "' target='_blank' rel='bookmark' title='Twitter' class='icon fa-twitter'><span class='label'>Twitter</span></a>" );
    }

    echo $args['after_widget'];
  }


  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'link' ] ) ) {
      $link = $instance[ 'link' ];
    }
    else {
      $link = __( '', 'twitter_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
    </p>
    <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
    return $instance;
  }

} // Class twitter_widget

?>
