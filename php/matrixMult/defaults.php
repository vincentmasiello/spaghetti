<?php
#@author Vincent A Masiello II
#(c)teamSpaghetti 2017

$matrixA_path = __DIR__ . '/matrixA.json';
$matrixB_path = __DIR__ . '/matrixB.json';
$matrixR_path = __DIR__ . '/matrixR.json';

# for development purposes, this data is written to a file
# if they are not detected in this directory on launch.
$default_data = array(
	$matrixA_path => array(
		array(
			13.5,
			30.1,
			45.6),
		array(
			23.4,
			89.2,
			53.7),
		array(
			12.2,
			43.2,
			75.1)
	),
	$matrixB_path => array(
		array(
			23.5,
			10.0,
			1.66),
		array(
			13.1,
			29.3,
			33.4),
		array(
			22.2,
			13.9,
			15.1)
	)
);