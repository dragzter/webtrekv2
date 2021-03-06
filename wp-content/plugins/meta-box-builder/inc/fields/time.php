<?php

class MBB_Time extends MBB_Field
{


	public function __construct()
	{
		$label2 = 'Display the time picker inline with the input<span class="tooltip right"><span class="dashicons dashicons-editor-help"></span><b title="Do not require to click the input field to trigger the time picker"></b></span>';
		$this->basic = array(
			'id',
			'name',
			// 'label_description',
			'desc' => array(
				'type' 	=> 'textarea',
			),
			'std',
			'inline' => array(
				'type' 	=> 'checkbox',
				'label' => $label2,
			),
			'required' => array(
				'type' => 'checkbox',
			),
			'clone' => array(
				'type' 	=> 'checkbox',
				'size'	=> 'wide'
			),
		);

		$label = 'Time picker options (<a href="http://trentrichardson.com/examples/timepicker">see documentation</a>)';
		$js_options = Meta_Box_Attribute::get_attribute_content( 'key_value', 'js_options', $label );

		$this->advanced['js_options'] = array(
			'type' 		=> 'custom',
			'content' 	=> $js_options,
			'size'		=> 'wide'
		);

		parent::__construct();
	}
    public function register_fields() {
        parent::register_fields();
		unset( $this->appearance['placeholder'] );
    }
}

new MBB_Time;