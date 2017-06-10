<?php

include("track.class.php");
$track = new Trackingmore;
$items = array(
    array(
		'tracking_number' => 'LX855551891CN',
		'carrier_code'    => 'australia-post',
		'title'          => 'iphone6',
		'customer_name'   => 'charse chen',
		'customer_email'  => 'chasechen@gmail.com',
		'order_id'      => '8988787987',
		'lang'          => 'en'
	),
	array(
		'tracking_number' => 'LX847555291CN',
		'carrier_code'    => 'australia-post',
		'title'          => 'iphone6s',
		'customer_name'   => 'clooney chen',
		'customer_email'  => 'clooneychen@gmail.com',
		'order_id'      => '898874587',
		'lang'          => 'en'
	),
);
$track = $track->createMultipleTracking($items);
?>