<?php
/**
 * @package NapMaker
 */
/*
Plugin Name: Nap Maker
Plugin URI: http://gowebtrek.com
Description: Creating Custom SEO schema for your website or business.
Version: 1.0.0
Author: Vladimir Mujakovic
Author URI: http://gowebtrek.com
License: GPLv2 or later
Text Domain: Nap Maker Plugin
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright (C) 2019  Vladimir Mujakovic
*/

if ( ! defined( 'ABSPATH') ) {
    die( 'Cannot access file directly.' );
}

require_once plugin_dir_path( __FILE__ ) . 'inc/Admin.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/SettingsRegister.php';

$new_admin = new Admin();
$register_settings = new SettingsRegister();

$new_admin->register();
$register_settings->register();
