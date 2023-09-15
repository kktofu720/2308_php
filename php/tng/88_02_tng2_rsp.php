<?php



// echo "입력값 : {$in_str}";

// $rannum = rand(0, 2);
// $rsp = array("가위", "바위", "보");

// $computer = $choice[$rannum];
// $player = 0;

// if($rannum === 0) {
// 	$choice = "가위";
// }
// if($rannum === 1) {
// 	$choice = "바위";
// }
// if($rannum === 2) {
// 	$choice = "보";
// }
// echo "컴퓨터 : {$choice}";

// if($choice === $player) {
// 	echo "무승부";
// }
// else if($choice = "가위" && $player = "바위") {
// 	echo "승리";
// }
// else if($choice = "가위" && $player = "보") {
// 	echo "패배";
// }
// else if($choice = "바위" && $player = "가위") {
// 	echo "패배";
// }
// else if($choice = "바위" && $player = "보") {
// 	echo "승리";
// }
// else if($choice = "보" && $player = "가위") {
// 	echo "승리";
// }
// else($choice = "보" && $player = "바위") {
// 	echo "패배";
// }

$in_str = trim(fgets(STDIN));
$rannum = rand(0, 2);
$rsp = ["가위", "바위", "보"];
$computer = $choice;
$user = 0;

    
if ($choice) {
	$user = "$choice";
	$computer = $rsp[rand($rsp)];
	
	echo "나 : $user";
	echo "컴퓨터 : $computer";
	
	if ($user == $computer) {
		echo "무승부";
	} elseif (
		($user == 0 && $computer == 2) ||
		($user == 1 && $computer == 0) ||
		($user == 2 && $computer == 1)
	) {
		echo "승리";
	} else {
		echo "패배";
	}
}
php 88_02_tng2_rsp.php



?>