<?php

// Register and load the widget
function gallery_load_widget() {
  register_widget( 'gallery_widget' );
}

add_action( 'widgets_init', 'gallery_load_widget' );

// Creating the widget
class gallery_widget extends WP_Widget {

  function __construct() {
    parent::__construct(

      // Base ID of your widget
      'gallery_widget',

      // Widget name will appear in UI
      __('Gallery Widget', 'gallery_widget_domain'),

      // Widget description
      array( 'description' => __( 'A gallery at the middle of the homepage.', 'gallery_widget_domain' ), )
    );
  }


  // Creating widget front-end
  public function widget( $args, $instance ) {
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    $title = $instance['title'];
    $link = $instance['link'];
    if ( isset( $instance[ 'title' ] ) ) {
      if ( empty( $instance[ 'link' ] ) ) {
        echo ( '<h2>' . $title . '</h2>' );
      }
      else {
        echo ( '<h2>' . "<a href='" . $link . "' target='_blank'>" . $title . '</a>' . '</h2>' );
      }
    }
    echo $args['after_widget'];
  }


  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( '--- Gallery Text ---', 'gallery_widget_domain' );
    }
    if ( isset( $instance[ 'link' ] ) ) {
      $link = $instance[ 'link' ];
    }
    else {
      $link = __( '', 'gallery_widget_domain' );
    }
    // Widget admin form
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
    </p>
    <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
    return $instance;
  }

} // Class gallery_widget

?>
