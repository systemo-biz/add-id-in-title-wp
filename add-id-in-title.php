<?php
/*
Plugin Name: Add #ID in post title
Plugin URI: https://github.com/systemo-biz/add-id-in-title-wp
Description: Add pot_id in title with #. It is coll for Wunderlist
Author: Systemo
Author URI: http://systemo.biz
Version: 20150902
*/

//Для старой версии WP до 4.4.
function dw_listing_title( $title ) {
    if ( is_singular() && $id = get_queried_object_id() ) {
       $title = $title . ' - #' . $id;
    }

    return $title;
} add_filter( 'wp_title', 'dw_listing_title' );


// Для новой версии WP 4.4.+
function document_title_parts_cb_s($title){

  if(is_single() and $id = get_queried_object_id()){
    $title[] = '#' . $id;
  }

  return $title;

} add_filter( 'document_title_parts', 'document_title_parts_cb_s' );
