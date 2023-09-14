<?php

// 버블 정렬
//      0  1   2  3  4  5  6


// for($i = 0; $i <=6; $i++) {
// 	for($a = $i + 1; $a < $i; $a++) {

// 	}
// }
// echo count($arr);

$arr = [5, 34, 3, 2, 6, 7, 12];
$len = count($arr);

for ($i = 0; $i < $len; $i++) {
	
	for ($j = 0; $j < $len - 1 - $i; $j++) {
	
		if ($arr[$j] > $arr[$j + 1]) {
			
			$tmp = $arr[$j];
			$arr[$j] = $arr[$j + 1];
			$arr[$j + 1] = $tmp;
		}
	}
}
print_r($arr);


// $tmp  = $arr[1];
// $arr[1] = $arr[2];
// $arr[2] = $arr[3];
// $arr[3] = $arr[4];
// $arr[4] = $arr[5];
// $arr[5] = $arr[6];
// $arr[6] = $tmp;



// print_r($arr);

// $arr2 = [3, 2, 1];


// $tmp = $arr2[0];
// $arr2[0] = $arr2[1];
// $arr2[1] = $tmp;

// print_r($arr2);



?>