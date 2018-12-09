<?php
/**
 * Adding columns to table list of field groups.
 */
class MBB_Admin_Columns {
	public function __construct() {
		add_filter( 'manage_meta-box_posts_columns', array( $this, 'columns' ) );
		add_action('manage_meta-box_posts_custom_column',  array( $this, 'show' ) );
	}
	public function columns( $columns ) {
		$columns = array_slice( $columns, 0, 2, true ) +
			array( 'location' => __( 'Location', 'meta-box-builder' ) ) +
			array_slice( $columns, 2, count( $columns ) - 1, true );
		return $columns;
	}

	public function show( $name ) {
		global $post;
		if ( 'location' !== $name ) {
			return;
		}
		$info = json_decode( $post->post_excerpt );
		$for = $info->for;

		switch ( $for ) {
			case 'user':
				esc_html_e( 'Users', 'meta-box-builder' );
				break;
			case 'comment':
				esc_html_e( 'Comments', 'meta-box-builder' );
				break;
			case 'attachments':
				esc_html_e( 'Attachments', 'meta-box-builder' );
				break;
			case 'settings_pages':
				$settings_pages = mbb_get_setting_pages();
				$pages = array();
				foreach ( $info->{$for} as $page ) {
					if ( ! is_string( $page ) ) {
						$pages[] = $page->title;
						continue;
					}
					if ( ! isset( $settings_pages[$page] ) ) {
						continue;
					}
					$page = $settings_pages[$page];
					$pages[] = $page['title'];
				}
				$output = _n( 'Settings Page: %s', 'Settings Pages: %s', count( $info->{$for} ), 'meta-box-builder' );
				echo esc_html( sprintf( $output, implode( ', ', $pages ) ) );
				break;
			case 'post_types':
				$types = array();
				foreach ( $info->{$for} as $type ) {
					$types[] = $type->name;
				}
				$output = _n( 'Post Type: %s', 'Post Types: %s', count( $types ), 'meta-box-builder' );
				echo esc_html( sprintf( $output, implode( ', ', $types ) ) );
				break;
			case 'taxonomies':
				$types = array();
				foreach ( $info->{$for} as $type ) {
					$types[] = $type->name;
				}
				$output = _n( 'Taxonomy: %s', 'Taxonomies: %s', count( $types ), 'meta-box-builder' );
				echo esc_html( sprintf( $output, implode( ', ', $types ) ) );
		}
	}
}