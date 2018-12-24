<?php

// Register and load the widget
function analytics_load_widget() {
  register_widget( 'analytics_widget' );
}

add_action( 'widgets_init', 'analytics_load_widget' );

// Creating the widget
class analytics_widget extends WP_Widget {

  function __construct() {
    parent::__construct(

      // Base ID of your widget
      'analytics_widget',

      // Widget name will appear in UI
      __('Analytics Code', 'analytics_widget_domain'),

      // Widget description
      array( 'description' => __( 'A analytics widget to drop in your code (everything between the <script> tags).', 'analytics_widget_domain' ), )
    );
  }


  // Creating widget front-end
  public function widget( $args, $instance ) {
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];

    $script = $instance['script'];

    if ( isset( $instance[ 'script' ] ) ) {
      echo $script;
    }

    echo $args['after_widget'];
  }


  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'script' ] ) ) {
      $script = $instance[ 'script' ];
    }
    else {
      $script = __( '', 'analytics_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'script' ); ?>"><?php _e( 'Analytics Script:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'script' ); ?>" name="<?php echo $this->get_field_name( 'script' ); ?>" type="text" value="<?php echo esc_attr( $script ); ?>" />
    </p>
    <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    // $instance = array();
    $instance['script'] = ( ! empty( $new_instance['script'] ) ) ? strip_tags( $new_instance['script'] ) : '';
    return $instance;
  }

} // Class analytics_widget

?>
