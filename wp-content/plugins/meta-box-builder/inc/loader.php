<?php
define( 'MBB_DIR', trailingslashit( dirname( __DIR__ ) ) );
define( 'MBB_INC_DIR', trailingslashit( MBB_DIR . 'inc' ) );
define( 'MBB_FIELDS_DIR', trailingslashit( MBB_INC_DIR . 'fields' ) );

// Show Meta Box admin menu.
add_filter( 'rwmb_admin_menu', '__return_true' );

require_once MBB_INC_DIR . 'helpers.php';
require_once MBB_INC_DIR . 'class-meta-box-attribute.php';
require_once MBB_FIELDS_DIR . 'field.php';
require_once MBB_INC_DIR . 'class-meta-box-show-hide-template.php';
require_once MBB_INC_DIR . 'class-meta-box-include-exclude-template.php';
require_once MBB_INC_DIR . 'parsers/base.php';
require_once MBB_INC_DIR . 'parsers/meta-box.php';
require_once MBB_INC_DIR . 'parsers/field.php';
require_once MBB_INC_DIR . 'class-meta-box-import.php';
require_once MBB_INC_DIR . 'class-meta-box-builder.php';
require_once MBB_INC_DIR . 'class-mbb-admin-columns.php';

new Meta_Box_Builder();
new MBB_Admin_Columns();