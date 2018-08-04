<?php

// Logging functions
require_once 'inc/log.php';

// CORS handling
require_once 'inc/cors.php';

// Admin modifications
require_once 'inc/admin.php';

// Add Menus
//require_once 'inc/menus.php';

// Add custom post types
require_once 'inc/custom_post_types.php';

// Add ACF fields Programmatically
//require_once 'acf-json/acf_fields.php';

// Custom Thumbnail Sizes
add_image_size('project_thumbnail', 300, 300, true);
add_theme_support( 'post-thumbnails' );
