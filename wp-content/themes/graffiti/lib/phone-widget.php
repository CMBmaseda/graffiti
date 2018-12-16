<?php

// Register and load the widget
function phone_load_widget() {
  register_widget( 'phone_widget' );
}

add_action( 'widgets_init', 'phone_load_widget' );

// Creating the widget
class phone_widget extends WP_Widget {

  function __construct() {
    parent::__construct(

      // Base ID of your widget
      'phone_widget',

      // Widget name will appear in UI
      __('Footer Phone Icon', 'phone_widget_domain'),

      // Widget description
      array( 'description' => __( 'A phone icon in the footer.', 'phone_widget_domain' ), )
    );
  }


  // Creating widget front-end
  public function widget( $args, $instance ) {
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];

    $link = $instance['link'];

    if ( isset( $instance[ 'link' ] ) ) {
      echo ( "<a href='tel:" . $link . "' title='Phone' class='icon fa-phone'><span class='label'>Phone</span></a>" );
    }

    echo $args['after_widget'];
  }


  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'link' ] ) ) {
      $link = $instance[ 'link' ];
    }
    else {
      $link = __( '', 'phone_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Phone #:' ); ?></label>
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

} // Class phone_widget

?>
