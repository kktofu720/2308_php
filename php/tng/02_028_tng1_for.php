<?php
// 반복문을 이용해서 1~10까지 숫자를 출력해 주세요. 
// for($i = 1; $i <= 10; $i++) {
// 	echo $i, "\n";
// }

// 구구단 2단을 반복문을 이용해서 작성해 주세요.
// for($i = 1; $i <= 9; $i++ ) {
// 	$mul = $i * 2;
// 	echo "2 X {$i} = $mul\n";
// }

// 구구단 1~9단을 반복문을 이용해서 작성해 주세요.

// for($i = 1; $i <= 9; $i++){
// 	echo "{$i}단\n";
// 	for($z = 1; $z <= 9; $z++){
// 		$mul = $i * $z;
// 		echo "{$i} X {$z} = $mul\n";
// 	}
// }

// 1~9 단 중 2~8단 제외한 후 1단, 9단만 출력 
// for($i = 1; $i <= 9; $i++){
// 	if($i>=2 && $i<=8){
// 		continue;
// 	}
// 	echo "{$i}단\n";
// 	for($z = 1; $z <= 9; $z++){
// 		$mul = $i * $z;
// 		echo "{$i} X {$z} = $mul\n";
// 	}
// }

//홀수단만 출력
// for($i = 1; $i <= 9; $i++){
// 	if($i%2 === 0) {
// 		continue;
// 	}
// 	echo "{$i}단\n";
// 	for($z = 1; $z <= 9; $z++){
// 			$mul = $i * $z;
// 			echo "{$i} X {$z} = $mul\n";
// 	}
// }

// 반복문을 이용해서 아래처럼 출력해주세요.
// *
// ** 
// ***
// ****
// *****

// for($i = 1; $i <= 5; $i++) {
// 	for($z = 1; $z <= $i; $z++) {
// 		echo "*";
// 	}
//    echo "\n";	
// }

$int_line = 1;
$int_star = 1;
while($int_line <= 5) {
	while($int_star <= $int_line) {
		echo "*";
		$int_star++;
	}
	$int_star = 1;
	echo "\n";
	$int_line++;
}

// 다 되면 이렇게
//     *
//    **
//   ***
//  ****
// *****

//  for($i = 1; $i <= 5; $i++) {
// 	for($z = 5; $z >= 0; $z--) {
// 		if($i > $z) {
// 			echo "*";
// 		}
// 		else{
// 			echo " ";
// 		}
// 	}
// 	echo "\n";
//  }

//  for($i = 1; $i <= 5; $i++) {
// 	for($z = 5; $z >= $i; $z--) {
// 		echo " ";
// 	}
// 	for($c = 1; $c <= $i; $c++) {
// 		echo "*";
// 	}
// 	echo "\n";
//  }

//     *
//    ***
//   *****
//  *******
// *********

// 2단
// for($i=1; $i<=9; $i++) {
// 	$mul = 2 * $i;
// 	echo "2 X $i = $mul\n";
// }

// 1~9단
// for($i=1; $i<=9; $i++) {
// 	for($z=1; $z<=9; $z++) {
// 		$mul = $i * $z;
// 		echo "{$i} X {$z} = {$mul}\n";
// 	}
// }
// 1, 9단만



?>