<?php

function matrixFromString($rawString) {
	$result = array();
	$row = 0;
	$col = 0;
	foreach (explode('#', $fileString) as $row) {
		foreach (explode(',', $row) as $e) {
			echo $e . '\n';
			#__setCellValue($rowCount, $colCount, $e);
			matrix[row][col] = $e;
			$col++;
		}
		$row++;
	}
	echo '<p>removing last item (should be blank): ->' . array_pop($result) . '<-</p>';
	return $result;
}

function stringFromMatrix($matrix) {
	$result = '';
	foreach ($matrix as $row) {
		$result = implode(',', $row) . '#';
	}
	return $result;
}

function readFromFile($path) {
	if (file_exists($path)) {
		$inFile = fopen($path, 'r');
		$fileString = file_get_contents($inFile);
		fclose($inFile);
		return $fileString;
	} else {
		throw new Exception('Failed to read file for some reason or whatever.');
	}
}

?>