<?php

/**
 * Only from certain origins
 */
add_action( 'rest_api_init', function() {

	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
	add_filter( 'rest_pre_serve_request', function( $value ) {

        $origin = get_http_origin();
		if ( $origin && in_array( $origin, array(
				'http://geeknews.local',
				'http://geeknewsbackend.local',
			) ) ) {
			header( 'Access-Control-Allow-Origin: ' . esc_url_raw( $origin ) );
			header( 'Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE' );
			header( 'Access-Control-Allow-Credentials: true' );
		}

		return $value;

	});
}, 15 );
