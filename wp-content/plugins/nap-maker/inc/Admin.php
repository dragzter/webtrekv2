<?php

/**
 * @package NapMaker
 */

require_once plugin_dir_path( __FILE__ ) . 'CustomSettingsController.php';

class Admin extends CustomSettingsController
{
    
    public function register()
    {
        add_action( 'admin_menu', array( $this, 'addMenuPage' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueueNapScripts' ) );
    }

    public function adminPageCallback()
    {
        require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
    }

    public function addMenuPage()
    {
        add_menu_page(
            
            // Page title
            'Nap Schema Settings',
            
            // Title in admin menu
            'Nap Schema',
           
            // Capability
            'manage_options', //Required. The required capability of users to access this menu item.
            
            // Page or slug
            $this->admin_page,
            
            // Callback for the content of the page associated with this menu item
            array( $this, 'adminPageCallback'), 
            
            // Image or icon url/dashicon class
            'dashicons-admin-site',
            
            // Position
            100 
        );
    }

    public function enqueueNapScripts()
    {
        wp_enqueue_style( 'nap-styles', plugins_url( 'assets/nap-style.css', __FILE__ )  );
        wp_enqueue_script( 'nap-script', plugins_url( 'assets/nap-scripts.js', __FILE__ ) );
    }
 }