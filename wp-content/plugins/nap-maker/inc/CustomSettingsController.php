<?php

/**
 * @package NapMaker
 */

class CustomSettingsController 
{
    public $custom_fields = array();

    public function __construct()
    {
        $this->custom_fields = array(
            'name'      => 'Set the name of your business',
            'url'       => 'Url of business',
            'address'   => 'Addres',
            'hours'     => 'Hours of operation'
        );
    }
}