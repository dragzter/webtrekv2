<?php
/**
 * @package NapMaker
 */

require_once plugin_dir_path( __FILE__ ) . 'CustomSettingsController.php';

class SettingsCallbacks extends CustomSettingsController
{
    public function inputField( $args )
    {
        $name = $args['label_for'];
        $classes = $args['class'];
        $option_name = $args['option_name'];

        $value = get_option( $name );

        if ( $name == 'url' || $name == 'image' ) {
          echo '<input type="url" class="'.$classes.' regular-text" name="'.$option_name.'" value="'.$value.'" placeholder="Write something here...">';
        } else {
          echo '<input type="text" class="'.$classes.' regular-text" name="'.$option_name.'" value="'.$value.'" placeholder="Write something here...">';
        }
    }

    public function selectionField( $args ) 
    {
        $name = $args['label_for'];
        $classes = $args['class'];
        $option_name = $args['option_name'];

        $value = get_option( $name ); ?>
    
        <select class="<?php echo $classes ?>" name="<?php echo $option_name ?>" id="<?php echo $option_name ?>"><?php
          foreach($this->business_types as $business ) { ?>
            <option value="<?php echo $business ?>"  <?php selected($value, $business); ?> ><?php echo $business ?></option><?php
          } ?>
        </select><?php      
    }

    public function sectionCallback( $args )
    {
        echo '<p>&rtrif; All data entered here is used to create a structured DATA object which is injected into the website header.  <br><br>&rtrif; <em>Opening Hours</em> need to have this format: <em>Mon-Sun 00:00-00:00</em>. <br><br>&rtrif; <em>URL</em> and <em>Image URL</em>, need to have an actual URL including <em>http://</em> or <em>https://</em><br><br>&rtrif; Match <em>Business Type</em> as closely as possible to your business type e.g. a Muffin Shop is "like" a Bakery.</p>';
    }

    public function socialSectionCallback()
    {
      echo '<p>Enter all releveant Social Networks URL\'s</p>';
    }
}
