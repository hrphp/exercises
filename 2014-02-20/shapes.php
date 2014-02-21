<?php


function output1() {
	foreach(range(8,1) as $num) {
		echo str_repeat('#', $num).PHP_EOL;	
	}
}

function output2() {
	foreach(range(1,8) as $num) {
		echo str_repeat('#', $num).PHP_EOL;	
	}
}

function output3() {

	$output = function($padding, $num_hashes) {
		echo str_repeat(' ', $padding);
		echo str_repeat('#', $num_hashes);
		echo str_repeat(' ', $padding);
		echo PHP_EOL;
	};

	$calc = function($row) use ($output) {
		$num_hashes = 2 * $row;
		$diff = 8 - $num_hashes; 
		$padding = (int)$diff / 2;

		$output($padding, $num_hashes);
	};

	for($row=1;$row<=4;$row++) $calc($row);
	for($row=4;$row>=1; $row--) $calc($row);
}

function output4() {
	$cols = 14;

	for($row=1;$row<=4;$row++) {
		$hashes = 2 * $row;
		$total_padding = $cols - $hashes;
	
		$num_hashes = $hashes / 2;
		$outside_padding = $num_hashes - 1;
		$inside_padding = $total_padding - ($outside_padding * 2);

		echo str_repeat(' ', $outside_padding);
		echo str_repeat('#', $num_hashes);
		echo str_repeat(' ', $inside_padding);
		echo str_repeat('#', $num_hashes);
		echo str_repeat(' ', $outside_padding);
		echo PHP_EOL;
	}

}

output4();
