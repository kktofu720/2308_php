<?php
// 반복문을 이용해서 1~10까지 숫자를 출력해 주세요. 
for($i = 1; $i <= 10; $i++) {
	echo $i, "\n";
}

// 구구단 2단을 반복문을 이용해서 작성해 주세요.
for($i = 1; $i <= 9; $i++ ) {
	$mul = $i * 2;
	echo "2 X {$i} = $mul\n";
}

// 구구단 1~9단을 반복문을 이용해서 작성해 주세요.

for($i = 1; $i <= 9; $i++){
	echo "{$i}단\n";
	for($z = 1; $z <= 9; $z++){
		$mul = $i * $z;
		echo "{$i} X {$z} = $mul\n";
	}
}

// 1~9 단 중 2~8단 제외한 후 1단, 9단만 출력 
for($i = 1; $i <= 9; $i++){
	if($i>=2 && $i<=8){
		continue;
	}
	echo "{$i}단\n";
	for($z = 1; $z <= 9; $z++){
		$mul = $i * $z;
		echo "{$i} X {$z} = $mul\n";
	}
}

//홀수단만 출력
for($i = 1; $i <= 9; $i++){
	if($i%2 === 0) {
		continue;
	}
	echo "{$i}단\n";
	for($z = 1; $z <= 9; $z++){
			$mul = $i * $z;
			echo "{$i} X {$z} = $mul\n";
	}
}

?>