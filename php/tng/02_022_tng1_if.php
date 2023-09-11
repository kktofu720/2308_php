<?php
//IF로 만들어주세요.
//성적
//	범위 : 
//		이상 ~ 미만
//		   100   : A+
//		90이상 ~ 100미만 : A
//		80이상 ~ 90미만  : B
//		70이상 ~ 80미만  : C
//		60이상 ~ 70미만  : D
//		60미만   : F

//출력 문구 : "당신의 점수는 XXX점 입니다. <등급>"
// $num = 77;
// if( $num === 100){
// 	echo "당신의 점수는 {$num}점 입니다. <A+>";
// }
// else if( $num >= 90 && $num < 100 ){	
// 	echo "당신의 점수는 {$num}점 입니다. <A>";
// }
// else if( $num >= 80 && $num < 90 ){	
// 	echo "당신의 점수는 {$num}점 입니다. <B>";
// }
// else if( $num >= 70 && $num < 80 ){	
// 	echo "당신의 점수는 {$num}점 입니다. <C>";
// }
// else if( $num >= 60 && $num < 70 ){	
// 	echo "당신의 점수는 {$num}점 입니다. <D>";
// }
// else{
// 	echo "당신의 점수는 {$num}점 입니다. <F>";
// }

// && 없어도 됨
$num = 70;
if( $num === 100){
	echo "당신의 점수는 {$num}점 입니다. <A+>";
}
else if( $num >= 90 ){	
	echo "당신의 점수는 {$num}점 입니다. <A>";
}
else if( $num >= 80 ){	
	echo "당신의 점수는 {$num}점 입니다. <B>";
}
else if( $num >= 70 ){	
	echo "당신의 점수는 {$num}점 입니다. <C>";
}
else if( $num >= 60 ){	
	echo "당신의 점수는 {$num}점 입니다. <D>";
}
else{
	echo "당신의 점수는 {$num}점 입니다. <F>";
}

// 문구를 수정할 때 한방에 하려고 맨 위에 grade를 추가하여 맨 밑에 echo만 고치면 됨
// 0~100 입력 받았을 때 , "당신의 점수는 xxx점 입니다. <등급>" 라고 출력 하고,
//  그 외의 값일 경우, "잘못된 값을 입력 했습니다." 라고 출력해 주세요.
// %u : int($num) 숫자 들어가는 곳
$num = -10;	
$grade = "";
$answer = "당신의 점수는 %u점 입니다. <%s>";
if( $num === 100){
	$grade = "A+";
}
else if( $num >= 90 ){	
	$grade = "A";
}
else if( $num >= 80 ){	
	$grade = "B";
}
else if( $num >= 70 ){	
	$grade = "C";
}
else if( $num >= 60 ){	
	$grade = "D";
}
else if($num < 60){
	$grade = "F";
}

if( $num >= 0 && $num <=100){
	$str = sprintf($answer, $num, $grade);
	echo $str;
}
else{ 
	echo "잘못된 값을 입력 했습니다.";
}


?>