<?php
/*
Plugin Name: Add #ID in post title
Version: 0.1
Plugin URI: ${TM_PLUGIN_BASE}
Description: Add pot_id in title with #. It is coll for Wunderlist
Author: ${TM_NAME}
Author URI: ${TM_HOMEPAGE}
*/
function dw_listing_title( $title ) {
    if ( is_singular() && $id = get_queried_object_id() ) {
       $title = $title . ' - #' . $id;
    }

    return $title;
}
add_filter( 'wp_title', 'dw_listing_title' );
