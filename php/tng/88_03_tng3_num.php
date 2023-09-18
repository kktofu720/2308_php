<?php
// 숫자 맞추기 게임

// 1. 1~100의 랜덤한 숫자를 맞추는 게임입니다.
// 2. 총 5번의 기회를 제공합니다.
// 3. 입력한 숫자(나)가 정답(컴)보다 클 경우 "더 큼" 출력
// 4. 입력한 숫자가 정답보다 작을 경우 "더 작음" 출력
// 5. 정답일 경우 "정답" 출력하고 게임종료
// 6. 5번의 기회를 다 썼을 경우 정답과 "실패"를 출력

//1 

// $입력
// $정답
// for문 사용
// $user = trim(fgets(STDIN)); // 나
$rannum = rand(1, 100); // 컴
// $num // 기회

for($num=1; $num<=5; $num++) {
	echo $rannum; // 미리 답 알기
	$user = trim(fgets(STDIN));

	if($user > $rannum) {
		echo "더 큼\n";
	} // 3번
	else if($user < $rannum) {
		echo "더 작음\n";
	} // 4번
	else if($user == $rannum) {
		echo "정답\n";
		break; // 5번
	}
	if($num == 5) {
		echo "정답 : {$rannum}"."실패";
		break;
	}
}

// while 문 사용하기
// $user = trim(fgets(STDIN));
// $rannum = rand(1, 100);
// $num = 1;

// while($num <= 5) {
	
// 	$user = trim(fgets(STDIN));

// 	if($user > $rannum) {
// 		echo "더 큼\n";
// 	} // 3번
// 	else if($user < $rannum) {
// 		echo "더 작음\n";
// 	} // 4번
// 	else if($user == $rannum) {
// 		echo "정답\n";
// 		break; // 5번
// 	}
// 	if($num == 5) {
// 		echo "정답 : {$rannum}"."실패";
// 		break;
// 	}
// 	$num++;
// }
	



?>