<?php
#@author Vincent A Masiello II
#(c)teamSpaghetti 2017

require __DIR__ . '/app.php';
require __DIR__ . '/defaults.php';

confirmInit(
	array($matrixA_path,$matrixB_path),
	$default_data
);

echo '<p>try reading in matrixA from file...</p>';
$mA = getMatrixFromFile($matrixA_path);
printMatrix($mA);

echo '<p>try reading in matrixB from file...</p>';
$mB = getMatrixFromFile($matrixB_path);
printMatrix($mB);

echo '<p>try matrix multiplication...</p>';
$mR = mXm($mA, $mB);
printMatrix($mR);

echo '<p>try writing new matrix to file...</p>';
writeMatrixToFile($matrixR_path, $mR);

echo '<p>checking result output file...</p>';
$mR_check = getMatrixFromFile($matrixR_path);
printMatrix($mR_check);
