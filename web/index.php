<?php
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS']='on';
}

// WordPress view bootstrapper
define('WP_USE_THEMES', true);
require(dirname( __FILE__ ) . '/wp/wp-blog-header.php');
