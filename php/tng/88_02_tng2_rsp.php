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

// $in_str = trim(fgets(STDIN));
// $rannum = rand(0, 2);
// $rsp = ["가위", "바위", "보"];
// $computer = $choice;
// $user = 0;

    
// if ($choice) {
// 	$user = "$choice";
// 	$computer = $rsp[rand($rsp)];
	
// 	echo "user : $user";
// 	echo "컴퓨터 : $computer";
	
// 	if ($user == $computer) {
// 		echo "무승부";
// 	} elseif (
// 		($user == 0 && $computer == 2) ||
// 		($user == 1 && $computer == 0) ||
// 		($user == 2 && $computer == 1)
// 	) {
// 		echo "승리";
// 	} else {
// 		echo "패배";
// 	}
// }

//0 가위 1 바위 2 보 
//0 이김 1 짐 2비김

echo "\n";
echo "******** 가위바위보 게임을 시작합니다 ********\n";
echo "*** 가위는 s 바위는 r 보는 p를 입력하세요 ***";

while(true){

$rsp = ["가위", "바위", "보"]; // 나
$user = trim(fgets(STDIN)); // 나
$rsp2 = ["s"=>"가위","r"=>"바위","p"=>"보"]; // 컴
	if($user=="e"){
		break;
	}

$computer=rand(0,2); // 컴
if($user == "s"){
	if($computer == 0){
		$result="무승부";
	}
	if($computer == 1){
		$result="패배";
	}
	if($computer == 2){
		$result= "승리";
	}
}
if($user == "r"){
	if($computer == 0){
		$result= "승리";
	}
	if($computer == 1){
		$result= "무승부";
	}
	if($computer == 2){
		$result= "패배";
	}
}
if($user == "p"){
	if($computer == 0){
		$result= "패배";
	}
	if($computer == 1){
		$result= "승리";	
	}
	if($computer == 2){
		$result= "무승부";
	}
}

echo "\n나 : $rsp2[$user]\n", "컴퓨터 : $rsp[$computer]\n", "결과 : $result\n";
}