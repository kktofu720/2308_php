<?php

// 몇개일지 모르는 숫자를 다 더해주는 함수를 만들어주세요.

// function my_sum(...$num) {
// 	$sum = 0;
// 	foreach($num as $val) {
// 		$sum += $val;
// 	}
// 	return $sum;
// }
// echo my_sum(1, 4, 7, 10);


// 1+2+3+.......+10000

// function my_reverse($num2) {
// 	$sum2 = 0;
// 	for($num2; $num2 > 0; $num2--) {
// 		$sum2 += $num2;
// 	}
// 	return $sum2;
// }	

// echo my_reverse(10000);

// 재귀함수
function my_recursion($i) {
	if( $i === 0 ) {
		return 1;
	}
	return $i + my_recursion($i - 1);
}
echo my_recursion(3);

// 숫자로 이루어진 문자열을 하나 받습니다.
// 이 문자열의 모든 숫자를 더해주세요.
// 예) "3421"일 경으, 3+4+2+1 해서 10이 리턴 되는 함수





?>