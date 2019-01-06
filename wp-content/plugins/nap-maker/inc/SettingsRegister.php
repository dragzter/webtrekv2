<?php

/**
 * @package NapMaker
 */

require_once plugin_dir_path( __FILE__ ) . 'SettingsCallbacks.php';
require_once plugin_dir_path( __FILE__ ) . 'CustomSettingsController.php';

class SettingsRegister extends CustomSettingsController
{

    public $fields = array();
    public $sections = array();
    public $settings = array();
    public $callbacks;

    public function register()
    {
        add_action( 'admin_init', array( $this, 'setSettings') );
        add_action( 'wp_print_scripts', array( $this, 'createJson' ) );
    }

    public function registerSettings( $sections, $settings, $fields )
    {

		// register setting
		foreach ( $settings as $setting ) {
			register_setting( $setting["option_group"], $setting["option_name"], ( isset( $setting["callback"] ) ? $setting["callback"] : '' ) );
		}

		// add settings section
		foreach ( $sections as $section ) {
			add_settings_section( $section["id"], $section["title"], ( isset( $section["callback"] ) ? $section["callback"] : '' ), $section["page"] );
		}

		// add settings field
		foreach ( $fields as $field ) {
			add_settings_field( $field["id"], $field["title"], ( isset( $field["callback"] ) ? $field["callback"] : '' ), $field["page"], $field["section"], ( isset( $field["args"] ) ? $field["args"] : '' ) );
		}

    }

    public function setSettings()
    {
        $this->callbacks = new SettingsCallbacks();

        $this->sections = array(
            array(
                'id'        => 'nap_section_1',
                'title'     => 'SCHEMA Data Settings',
                'callback'  => array( $this->callbacks, 'sectionCallback' ),
                'page'      => 'nap_schema'
            )
        );

        foreach ( $this->custom_fields as $key => $value ) {
            $this->settings[] = array(
                'option_group' => 'nap_schema_settings',
                'option_name'  => $key,
            );           
        };

        foreach ( $this->custom_fields as $key => $value ) {
            $this->fields[] = array(
                'id'        => $key,
                'title'     => $value,
                'callback'  => array( $this->callbacks, 'inputField' ),
                'page'      => 'nap_schema',
                'section'   => 'nap_section_1',
                'args'      => array(
                    'option_name' => $key,
                    'label_for'   => $key, 
                    'class'       => 'input-field'
                )
            );
        };

        $this->registerSettings($this->sections, $this->settings, $this->fields );

    }

    public function createJson()
    { 
        echo '<script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "ProfessionalService",
          "name": "WebTrek Web Development",
          "image": "http://gowebtrek.com/wp-content/uploads/2018/12/Original-on-Transparent.png",
          "@id": "",
          "url": "'.get_option('url').'",
          "telephone": "'.get_option('name').'",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "'.get_option('address').'",
            "addressLocality": "Manchester",
            "addressRegion": "NH",
            "postalCode": "'.get_option('name').'",
            "addressCountry": "US"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 42.975052,
            "longitude": -71.447385
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
              "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
          },
          "sameAs": [
            "https://facebook.com",
            "https://twitter.com",
            "https://facebook.com",
            "https://facebook.com",
            "https://facebook.com",
            "https://facebook.com",
            "https://facebook.com"
          ]
        }
        </script>';
    }
}