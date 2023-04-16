<?php
/**
 * Plugin Name: Local Dev CaFile
 * Plugin URI: https://stackoverflow.com/q/44632619/881743
 * Description: Another solution for `SSL certificate problem: self signed certificate in certificate chain apache` error for your local development
 * Version: 1.0
 * Author: John Doe
 * Author URI: https://stackoverflow.com/
 * License: WTFPL
 */

add_filter( 'http_request_args', function ( $args ) {
    if ( getenv('WP_ENV') !== 'development' ) {
        return $args;
    } 

    $args['sslcertificates'] = ini_get( 'curl.cainfo' ) ?? $args['sslcertificates'];

    return $args;
}, 0, 1 );