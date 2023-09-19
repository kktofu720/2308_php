<?php

// foreach : 배열의 길이만큼 루프하는 문법
$arr = [1, 2, 3];
// echo count($arr) - 1; // 3 - 1 = 2

// for($i = 0; $i <= count($arr) - 1; $i++) {
// 	echo $arr[$i]; 
// } //$i는 index 방값 0, 1, 2 count($arr)은 1, 2, 3
$arr2 = [
	"현희" => "불고기"
	, "호철" => "김치"
	, "휘야" => "못정함"
];

foreach($arr2 as $key => $val) {
	echo "{$key} : {$val}\n";
} //$key는 index 0,1,2 $val은 나오는 값 1, 2, 3

//키가 필요없을 때
// foreach($arr2 as $val) {
// 	echo "{$val}\n";
// }



?>