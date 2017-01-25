<?php
#@author Vincent A Masiello II (except the matrix multiplication code)
#(c)teamSpaghetti 2017

# check if the data files are present at launch, otherwise
# create them
# @params	$paths	an array of the paths to each matrix data file
#			$default_data	assoc array of data passed in from app.php
function confirmInit($paths, $default_data) {
	foreach ($paths as $p) {
		if (file_exists($p)) {
			echo '<span>' . $p . ' exists</span><br />';
		} else {
			writeMatrixToFile($p, $default_data[$p]);
			echo '<span>files initialized</span><br />';
		}
	}
}

# gets a matrix as an array from file at $path
# @params	$path file path from which to read
# @return	2D php array containing the matrix data
function getMatrixFromFile($path) {
	if (file_exists($path)) {
		return json_decode(file_get_contents($path));
	} else {
		echo 'error: file does not exist';
	}
}

# encode a 2D array as a json string and write to file
# @params	$path	path to output file
#			$matrix	2D array of matrix data
function writeMatrixToFile($path, $matrix) {
	# create file if it doesn't exist, otherwise overwrites it
	file_put_contents($path, json_encode($matrix));
}

# prettify and print 2d array as a proper matrix 
# @params	$matrix		2d array of matrix data
function printMatrix($matrix) {
	foreach ($matrix as $row) {
		foreach ($row as $c) {
			echo '<span>&nbsp;&nbsp;' . $c . '&nbsp;&nbsp;</span>';
		}
		echo '<br />';
	}
}

# this function came from stackOverflow somewhere. TODO:find and cite the source.
# uses voodoo magic to multiply two matricies together
# @params	$m1, $m2	the input matricies, order counts, dude!
# @return	$m3			the product array
function mXm($m1,$m2) {
	$r = count($m1);
	$c = count($m2[0]);
	$p = count($m2);
	if (count($m1[0])!= $p) {
		throw new Exception('Incompatible matrices');
	}
	$m3 = array();
	for ($i=0; $i< $r; $i++) {
		for ($j=0; $j<$c; $j++) {
			$m3[$i][$j]=0;
			for ($k=0; $k<$p; $k++) {
				$m3[$i][$j] += $m1[$i][$k] * $m2[$k][$j];
			}
		}
	}
	return ($m3);
}