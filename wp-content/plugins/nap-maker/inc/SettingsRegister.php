<?php

/**
 * @package NapMaker
 */

require_once plugin_dir_path( __FILE__ ) . 'SettingsCallbacks.php';
require_once plugin_dir_path( __FILE__ ) . 'CustomSettingsController.php';

class SettingsRegister extends CustomSettingsController
{

    public $fields = array();
    public $settings = array();
    public $sections = array();
    public $callbacks;


    public function register()
    {
        add_action( 'admin_init', array( $this, 'setSettings') );
        add_action( 'wp_print_scripts', array( $this, 'createJson' ) );
    }

    public function registerSettings( $settings, $fields )
    {

		// register setting
		foreach ( $settings as $setting ) {
			register_setting( $setting["option_group"], $setting["option_name"], ( isset( $setting["callback"] ) ? $setting["callback"] : '' ) );
		}

		// add settings field
		foreach ( $fields as $field ) {
			add_settings_field( $field["id"], $field["title"], ( isset( $field["callback"] ) ? $field["callback"] : '' ), $field["page"], $field["section"], ( isset( $field["args"] ) ? $field["args"] : '' ) );
		}

    }

    public function setSections( $sections )
    {
        // add settings section
        if ( isset( $sections ) ) {
            foreach ( $sections as $section ) {
                add_settings_section( $section["id"], $section["title"], ( isset( $section["callback"] ) ? $section["callback"] : '' ), $section["page"] );
            }
        }
    }

    public function setSettings()
    {
        // Instantiate callbacks
        $this->callbacks = new SettingsCallbacks();

        /**
         * ============================
         * Sections
         * ============================
         */

        $this->sections = array(
            array(
                'id'        => 'nap_section_1',
                'title'     => 'Data For SCHEMA',
                'callback'  => array($this->callbacks, 'sectionCallback'),
                'page'      => $this->admin_page
            ),
            array(
                'id'        => 'nap_section_2',
                'title'     => 'Social Data',
                'callback'  => array($this->callbacks, 'socialSectionCallback'),
                'page'      => $this->admin_page
            ),
        );
        

        $this->setSections( $this->sections );


        /**
         * ============================
         * Select style input settings
         * ============================
         */

        $select_field = array();
        $select_setting = array();

        $select_setting = array(
            array(
                'option_group' => 'nap_schema_settings',
                'option_name'  => 'site_type',
            )
        );  

        $select_field = array(
            array(
                'id'        => 'site_type',
                'title'     => 'Business Type',
                'callback'  => array( $this->callbacks, 'selectionField' ),
                'page'      => $this->admin_page,
                'section'   => 'nap_section_1',
                'args'      => array(
                    'option_name' => 'site_type',
                    'label_for'   => 'site_type', 
                    'class'       => 'select-field'
                )
            )
        );

        $this->registerSettings($select_setting, $select_field );

        /**
         * ============================
         * Standard input fields
         * ============================
         */


        // Loop through $custom_settings array and create  a setting for each index
        foreach ( $this->custom_fields as $key => $value ) {
            $this->settings[] = array(
                'option_group' => 'nap_schema_settings',
                'option_name'  => $key,
            );           
        };



        // Add a field for each setting by looping through the $custom_settings array
        foreach ( $this->custom_fields as $key => $value ) {
            $this->fields[] = array(
                'id'        => $key,
                'title'     => $value,
                'callback'  => array( $this->callbacks, 'inputField' ),
                'page'      => $this->admin_page,
                'section'   => 'nap_section_1',
                'args'      => array(
                    'option_name' => $key,
                    'label_for'   => $key, 
                    'class'       => 'input-field'
                )
            );
        };

        $this->registerSettings( $this->settings, $this->fields );


        /**
         * ============================
         * Social networks input fields
         * ============================
         */

        $social_settings = array();
        $social_fields = array();

        foreach ( $this->social as $key => $value ) {
            $social_settings[] = array(
                'option_group' => 'nap_schema_settings',
                'option_name'  => $key,
            );           
        };

        foreach ( $this->social as $key => $value ) {
            $social_fields[] = array(
                'id'        => $key,
                'title'     => $value,
                'callback'  => array( $this->callbacks, 'inputField' ),
                'page'      => $this->admin_page,
                'section'   => 'nap_section_2',
                'args'      => array(
                    'option_name' => $key,
                    'label_for'   => $key, 
                    'class'       => 'social-input-field'
                )
            );
        };

        $this->registerSettings( $social_settings, $social_fields );
    }

    public function createJson()
    { 
        $social_array[] = get_option('facebook');
        $social_array[] = get_option('twitter');
        $social_array[] = get_option('google');
        $social_array[] = get_option('linkedin');
        $social_array[] = get_option('youtube');
        $social_array[] = get_option('instagram');
        $social_array[] = get_option('pinterest');
        $social_array[] = get_option('tumblr');

        $full_array = [];

        foreach ( $social_array as $social ) {
            if (!empty($social)) {
                $full_array[] = '"'.$social.'"';
            }
        }
        ?>
        <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "<?php echo get_option('site_type'); ?>",
          "name": "<?php echo get_option('name'); ?>",
          "image": "<?php echo get_option('image'); ?>",
          "url": "<?php echo get_option('url'); ?>",
          "telephone": "<?php echo get_option('telephone'); ?>",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo get_option('street_address'); ?>",
            "addressLocality": "<?php echo get_option('address_locality'); ?>",
            "addressRegion": "<?php echo get_option('address_region'); ?>",
            "postalCode": "<?php echo get_option('postal_code'); ?>",
            "addressCountry": "<?php echo get_option('country'); ?>"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": <?php echo get_option('lat'); ?>,
            "longitude": <?php echo get_option('long'); ?>
          },
          "openingHours": "<?php echo get_option('opening_hours'); ?>",
          "sameAs": [ <?php
          for ($i = 0; $i < count($full_array); $i++ ) {
            echo $full_array[$i];
            if ( end($full_array) != $full_array[$i] ) {
                echo ',';
            }
          }
          ?> ]
        }
        </script><?php
    }
}