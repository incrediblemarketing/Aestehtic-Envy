<?php


function shortcode_call_number() {

		$business_location = get_field( 'business_locations', 'options' )[0];
		return '<a href="tel:' . $business_location['business_phone_url'] . '">' . $business_location['business_phone_display'] . '</a>';

}
add_shortcode( 'call_number', 'shortcode_call_number' );
