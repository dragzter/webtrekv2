<?php

/**
 * @package NapMaker
 */

class Admin
{
    
    public function register()
    {
        add_action( 'admin_menu', array( $this, 'addMenuPage' ) );
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
            'nap_schema',
            
            // Callback for the content of the page associated with this menu item
            array( $this, 'adminPageCallback'), 
            
            // Image or icon url/dashicon class
            'dashicons-admin-site',
            
            // Position
            100 
        );
    }
 }