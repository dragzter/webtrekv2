<?php
/**
 * @package NapMaker
 */

class SettingsCallbacks
{
    public function inputField( $args )
    {
        $name = $args['label_for'];
        $classes = $args['class'];
        $option_name = $args['option_name'];

        $value = get_option( $name );
        echo '<input type="text" class="'.$classes.' regular-text" name="'.$option_name.'" value="'.$value.'" placeholder="Write something here...">';
    }

    public function sectionCallback()
    {
        echo 'All data entered here is used to create a structured DATA object which is injected into the website header.';
    }
}
