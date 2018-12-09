<?php

class MBB_FileInput extends MBB_Field
{
	public $basic = array(
		'id',
		'name',
		// 'label_description',
		'desc' => array(
			'type' 	=> 'textarea',
		),
		'std',
		// 'placeholder',
		// 'size' 	=> 'number',
		'required' => array(
			'type' => 'checkbox',
		),
		'clone' => array(
			'type' => 'checkbox',
		),
	);
    public function register_fields() {
        parent::register_fields();

		unset( $this->appearance['size'] );
		unset( $this->appearance['placeholder'] );
    }
}

new MBB_FileInput;