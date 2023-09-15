<?php

// 1~9단
for($i = 1; $i <= 9; $i++) {
	echo "{$i}단\n";
	for($j = 1; $j <= 9; $j++) {
		$mul = $i * $j;
		echo "{$i} X {$j} = $mul\n";
	}
}
// 1, 9단
for($i = 1; $i <= 9; $i++) {
	if($i > 1 && $i < 9) {
		continue;
	}
	echo "{$i}단\n";
	for($j = 1; $j <= 9; $j++) {
		$mul = $i * $j;
		echo "{$i} X {$j} = $mul\n";
	}
}


?>