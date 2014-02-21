<?php

define('NUM_ROWS', 8);
define('CHAR', '#');

function outputAscii()
{
	$output = [];
	for ($j = 0; $j < 8; $j++) {
		$output[] = str_repeat(CHAR, $j+1) . PHP_EOL;
	}

	foreach ($output as $o) {
		echo $o;
	}
	echo "\n";
	foreach (array_reverse($output) as $o) {
		echo $o;
	}
	echo "\n";

	$output = array();
	for ($j = 1; $j <= 4; $j++) {
		$output[] = str_repeat(' ',(4-$j)) . str_repeat('#',$j) . str_repeat('#',$j) . PHP_EOL;
	}
	foreach ($output as $o) {
		echo $o;
	}
	foreach (array_reverse($output) as $o) {
		echo $o;
	}
	echo "\n";

	$output = array();
	for ($j = 1; $j <= 4; $j++) {
		$output[] = str_repeat(' ',$j) . str_repeat('#',$j) . str_repeat(' ',(4-$j) * 4) . str_repeat('#',$j) . PHP_EOL;
	}
	foreach ($output as $o) {
		echo $o;
	}
	foreach (array_reverse($output) as $o) {
		echo $o;
	}
}

outputAscii();

