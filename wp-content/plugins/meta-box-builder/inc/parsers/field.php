<?php
class MBB_Parser_Field extends MBB_Parser_Base {
	protected $ignore_empty_keys = array( 'max_status' );
	private $choice_types        = array( 'select', 'radio', 'checkbox_list', 'select_advanced', 'button_group' );

	public function parse() {
		$this->remove_tabs()
			->parse_boolean_values()
			->parse_numeric_values()
			->remove_angular_keys()
			->parse_datalist()
			->parse_group_title()
			->parse_object_field()
			->parse_choice_options()
			->parse_array_attributes( 'options' )
			->parse_array_attributes( 'js_options' )
			->parse_array_attributes( 'query_args' )
			->parse_custom_attributes()
			->parse_conditional_logic()
			->remove_empty_values();
	}

	private function remove_tabs() {
		if ( 'tab' === $this->type ) {
			$this->settings = array();
		}
		return $this;
	}

	private function parse_datalist() {
		if ( empty( $this->settings['datalist']['id'] ) ) {
			unset( $this->datalist );
		}
		return $this;
	}

	private function parse_group_title() {
		if ( 'group' !== $this->type ) {
			return $this;
		}
		if ( 'subfield' !== $this->groupfield ) {
			unset( $this->groupfield );
			return $this;
		}
		$sub_fields = implode( ',', (array) $this->group_title );
		$this->group_title = array(
			'field' => $sub_fields,
		);
		unset( $this->groupfield );
		return $this;
	}

	private function parse_object_field() {
		if ( ! in_array( $this->type, array( 'taxonomy', 'taxonomy_advanced', 'post', 'user' ), true ) ) {
			return $this;
		}
		unset( $this->terms );

		/**
		 * Available field types:
		 * - select
		 * - select_advanced
		 * - select_tree
		 * - checkbox_list
		 * - checkbox_tree
		 * - radio_list
		 */

		if ( in_array( $this->field_type, array( 'select', 'select_advanced', 'select_tree', 'checkbox_tree' ), true ) ) {
			unset( $this->inline );
		}
		if ( in_array( $this->field_type, array( 'select_tree', 'checkbox_list', 'checkbox_tree', 'radio_list' ), true ) ) {
			unset( $this->multiple );
		}
		if ( in_array( $this->field_type, array( 'select_tree', 'checkbox_tree', 'radio_list' ), true ) ) {
			unset( $this->select_all_none );
		}
		if ( empty( $this->multiple ) && in_array( $this->field_type, array( 'select', 'select_advanced' ), true ) ) {
			unset( $this->select_all_none );
		}

		return $this;
	}

	private function parse_choice_options() {
		if ( ! in_array( $this->type, $this->choice_types ) ) {
			return $this;
		}
		if ( empty( $this->options ) || is_array( $this->options ) ) {
			return $this;
		}
		$options = array();

		$this->options = wp_unslash( $this->options );
		$this->options = explode( "\n", $this->options );

		foreach ( $this->options as $choice ) {
			if ( false !== strpos( $choice, ':' ) ) {
				list( $value, $label )     = explode( ':', $choice, 2 );
				$options[ trim( $value ) ] = trim( $label );
			} else {
				$options[ trim( $choice ) ] = trim( $choice );
			}
		}

		$this->options = array_filter( $options );

		return $this;
	}
}
