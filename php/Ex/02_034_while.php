<?php
// while문 : 조건이 참이면 루프하는 문법

$i = 0;
while($i <= 2) {
	echo "{$i}\n";
	$i++;
}

// 구구단 2단 찍어봅시다.
$i = 1;
while($i <= 9) {
	$mul = $i * 2;
	echo "2 X {$i} = {$mul}\n";
	$i++;
}
while(true) {
	$mul = 2 * $i;
	echo "2 X {$i} = {$mul}\n";
	if($i === 9) {
		break;
	}
	$i++;
}
// do ~ while : 무조건 한 번은 실행하고, 그 다음부터 조건이 참이면 루프하는 문법. 잘안씀
$i = 0;
do {
	echo "ttt";
}
while($i < 0);

?>