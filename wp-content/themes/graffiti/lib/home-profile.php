<?php

class Shape
{
	public function __construct()
	{
		// Register the shape as a custom post type.
		register_post_type( 'graffiti_shape', array(
			'labels' => array(
				'name' => 'Shapes',
				'singular_name' => 'Shape'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'shapes' ),
			'hierarchical' => true,
			'supports' => array( 'title' )
		) );

		// Add meta boxes to the edit page
		add_action( 'add_meta_boxes', array( &$this, 'add_meta_boxes' ) );

		// Save the data when updating a Shape.
		add_action( 'save_post', array( &$this, 'save_post' ) );

		// modify default query
		add_filter( 'pre_get_posts', array( &$this, 'pre_get_posts' ) );
	}

	public function add_meta_boxes()
	{
		add_meta_box( 'location', 'Location', array(&$this, 'location'), 'graffiti_shape', 'side', 'default' );
	}

	public function location($post)
	{
		$custom = get_post_custom( $post->ID );
		$location = '';
		if ( isset( $custom['location'] ) ) $location = $custom['location'][0];
		?>

    <?php
      echo '<div class="control-group">';
  		echo '<label for="location">Coordinates</label>';
  		echo '<div class="controls">';
  		echo '<textarea name="location">' . $location . '</textarea>';
  		echo '</div></div>';
    ?>

		<?php
	}

	public function save_post( $post_id )
	{
		// location
		if ( isset( $_POST['location'] ) ) update_post_meta($post_id, 'location', $_POST['location']);
	}

	// Customize shape queries
	public function pre_get_posts( $query )
	{
		if ( isset( $query->query_vars['post_type'] ) ) {
			switch ( $query->query_vars['post_type'] ) {
				case 'graffiti_shape':
					$query->query_vars['posts_per_page'] = -1;
          // $query->query_vars['orderby'] = '((title)+0)';
					$query->query_vars['orderby'] = 'publish_date';
					$query->query_vars['order'] = 'ASC';
					break;
			}
		}
		return $query;
	}


}


add_action( 'init', 'load_shape' );
function load_shape()
{
  $shape = new Shape();
}
