<?php
/**
 * Plugin Name: Products and Orders Last Modified for WC REST API
 * Description: Retrieve Last Modified Products and Orders via WooCommerce REST API.
 * Version: 1.0.1
 * WC tested up to: 6.1
 * Tested up to: 5.9
 * WC requires at least: 3.9
 * Author: Chaharbaq Accounting Software
 * Author URI: https://chaharbaq.com/
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ){
	exit;
}

// Retrieve Last Modified Products After a Given time Woocommerce Rest API

add_filter('woocommerce_rest_product_object_query', function(array $args, \WP_REST_Request $request) {
    $modified_after = $request->get_param('modified_after');

    if (!$modified_after) {
        return $args;
    }

    $args['date_query'][0]['column'] = 'post_modified';
    $args['date_query'][0]['after']  = $modified_after;

    return $args;

}, 10, 2);

// Retrieve Last Modified Orders After a Given time Woocommerce Rest API

add_filter('woocommerce_rest_orders_prepare_object_query', function(array $args, \WP_REST_Request $request) {
    $modified_after = $request->get_param('modified_after');

    if (!$modified_after) {
        return $args;
    }

    $args['date_query'][0]['column'] = 'post_modified';
    $args['date_query'][0]['after']  = $modified_after;

    return $args;

}, 10, 2);


