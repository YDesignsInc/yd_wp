<?php
//This config file will be used to switch between the local, stage, and prod configs
$domain = $_SERVER['SERVER_NAME'];
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    define( 'WP_LOCAL_DEV', true );
    include( dirname( __FILE__ ) . '/local-config.php' );
} elseif( strpos($domain, 'devshed.y-designs.com') !== false) {
	include( dirname( __FILE__ ) . '/stage-config.php' );
} else {
	include( dirname( __FILE__ ) . '/prod-config.php' );
}