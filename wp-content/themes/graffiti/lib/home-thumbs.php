<?php

class Thumb
{
	public function __construct()
	{
		// Register the Homepage Gallery Images as a custom post type.
		register_post_type( 'graffiti_thumb', array(
			'labels' => array(
				'name' => 'Homepage Gallery Images',
				'singular_name' => 'Thumb'
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'thumbs' ),
			'hierarchical' => true,
			'supports' => array( 'title', 'thumbnail', 'excerpt' )
		) );

		// Add meta boxes to the edit page
		add_action( 'add_meta_boxes', array( &$this, 'add_meta_boxes' ) );

		// Save the data when updating a Homepage Gallery Image.
		add_action( 'save_post', array( &$this, 'save_post' ) );

		// modify default query
		add_filter( 'pre_get_posts', array( &$this, 'pre_get_posts' ) );
	}

	public function add_meta_boxes()
	{
		add_meta_box( 'subtitle', 'Subtitle', array(&$this, 'subtitle'), 'graffiti_thumb', 'side', 'default' );
    add_meta_box( 'rank', 'Rank', array(&$this, 'rank'), 'graffiti_thumb', 'side', 'default' );
	}

	public function subtitle($post)
	{
		$custom = get_post_custom( $post->ID );
		$subtitle = '';
		if ( isset( $custom['subtitle'] ) ) $subtitle = $custom['subtitle'][0];
		?>

    <?php
      echo '<div class="control-group">';
  		echo '<div class="controls">';
  		echo '<textarea name="subtitle">' . $subtitle . '</textarea>';
  		echo '</div></div>';
    ?>

		<?php
	}

  public function rank($post)
	{
		$custom = get_post_custom( $post->ID );
		$rank = '';
		if ( isset( $custom['rank'] ) ) $rank = $custom['rank'][0];
		?>

    <?php
      echo '<div class="control-group">';
  		echo '<div class="controls">';
  		echo '<textarea name="rank">' . $rank . '</textarea>';
  		echo '</div></div>';
    ?>

		<?php
	}

	public function save_post( $post_id )
	{
		// subtitle
		if ( isset( $_POST['subtitle'] ) ) update_post_meta($post_id, 'subtitle', $_POST['subtitle']);
    // rank
		if ( isset( $_POST['rank'] ) ) update_post_meta($post_id, 'rank', $_POST['rank']);
	}

	// Customize Homepage Gallery Images queries
	public function pre_get_posts( $query )
	{
		if ( isset( $query->query_vars['post_type'] ) ) {
			switch ( $query->query_vars['post_type'] ) {
				case 'graffiti_thumb':
					$query->query_vars['posts_per_page'] = 12;
          $query->query_vars['meta_key'] = 'rank';
          $query->query_vars['orderby'] = 'meta_value';
          $query->query_vars['order'] = 'ASC';
				break;
			}
		}
		return $query;
	}


}


add_action( 'init', 'load_thumb' );
function load_thumb()
{
  $thumb = new Thumb();
}
