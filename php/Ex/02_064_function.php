<?php

// 두 숫자를 받아서 더해주는 함수를 만들어봅시다.
// 리턴이 없는 함수
// function my_sum($a, $b) {
// 	echo $a + $b;
// }
// my_sum(5, 4);

// 리턴이 있는 함수
// function my_sum2($a, $b) {
// 	return $a + $b;
// }
// $reslt = my_sum2(2, 2);
// echo $reslt;

// 두 수를 받아서  - * / %를 리턴하는 함수를 만들어 주세요.

// 빼기 -
function my_minus($a, $b) {
	return $a - $b;
}

// 곱하기 *
function my_multiply($a, $b) {
	return $a * $b;
}

// 나누기 /
function my_divide($a, $b) {
	return $a / $b;
}

// 나머지 %
function my_remain($a, $b) {
	return $a % $b;
}

// 파라미터의 기본값이 설정되어 있는 함수 기본값은 뒷쪽에만 적어야함
function my_sum3($a, $b = 5) {
	return $a + $b;
}
// echo my_sum3(3);

// 가변 파라미터
// php-5.6 이상 가능
function my_args_param(...$items) {
	print_r($items);
}
my_args_param("a", "b", "c");

// php-5.5 이하에서 사용방법
// function my_args_param2() {
// 	$items = func_get_args();
// 	print_r($items);
// }

return array_sum($arr);
echo my_test($str);



 // 레퍼런스 파라미터

//  function test1( $str ) { // <- 여기 $str 과
// 	$str = "함수 test1";
// 	return $str;
//  }

//  $str = "???";            // <- 여기 $str 은 다름
//  $result = test1( $str );
//  echo $str, "\n";
//  echo $result;

function test2( &$st ) { // <- &붙으면 여기 $st과  
	$st = "함수 test2";
	return $st;
 }

 $str = "???";            // <- 여기 $str과 같음
 $result = test2( $str );
 echo $str, "\n";
 echo $result;

// test1( $str );  

// echo $str;






?>