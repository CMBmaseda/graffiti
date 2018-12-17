<?php

// Register and load the widget
function iframe_load_widget() {
  register_widget( 'iframe_widget' );
}

add_action( 'widgets_init', 'iframe_load_widget' );

// Creating the widget
class iframe_widget extends WP_Widget {

  function __construct() {
    parent::__construct(

      // Base ID of your widget
      'iframe_widget',

      // Widget name will appear in UI
      __('Iframe Widget', 'iframe_widget_domain'),

      // Widget description
      array( 'description' => __( 'An iframe at the middle-top of the homepage.', 'iframe_widget_domain' ), )
    );
  }


  // Creating widget front-end
  public function widget( $args, $instance ) {
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    $title = $instance['title'];
    $link = $instance['link'];
    $src = $instance['src'];
    if ( isset( $instance[ 'title' ] ) ) {
      if ( empty( $instance[ 'link' ] ) ) {
        echo ( '<h2>' . $title . '</h2>' );
      }
      else {
        echo ( '<h2>' . "<a href='" . $link . "' target='_blank'>" . $title . '</a>' . '</h2>' );
      }
    }
    if ( isset( $instance[ 'src' ] ) ) {
      echo ( "<iframe src='" . $src . "'" . " frameborder='0' style='border:0' allowfullscreen></iframe>" );
    }
    echo $args['after_widget'];
  }


  // Widget Backend
  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( '--- Iframe Text ---', 'iframe_widget_domain' );
    }
    if ( isset( $instance[ 'link' ] ) ) {
      $link = $instance[ 'link' ];
    }
    else {
      $link = __( '', 'iframe_widget_domain' );
    }
    if ( isset( $instance[ 'src' ] ) ) {
      $src = $instance[ 'src' ];
    }
    else {
      $src = __( '<iframe src="-- YOUR CUSTOM TEXT --" ...></iframe>', 'iframe_widget_domain' );
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
    <p>
      <label for="<?php echo $this->get_field_id( 'src' ); ?>"><?php _e( 'src:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'src' ); ?>" name="<?php echo $this->get_field_name( 'src' ); ?>" type="text" value="<?php echo esc_attr( $src ); ?>" />
    </p>
    <?php
  }

  // Updating widget replacing old instances with new
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
    $instance['src'] = ( ! empty( $new_instance['src'] ) ) ? strip_tags( $new_instance['src'] ) : '';
    return $instance;
  }

} // Class iframe_widget

?>
