<?php
// **데이터타입 : int string array double boolean 5가지 알고있기
// int : 숫자
$num = 1;

// string : 문자열
$str = "sssss";

// array : 배열
$arr = [1, 2, 3];

// double : 실수
$double = 2.343;

// boolean : 논리(참/거짓)
$bool = false;

// NULL  obj:객체
$obj = null;

// 변수의 타입을 리턴
// echo gettype($str);

// 형변환 : 변수 앞에 (데이터타입)$num
$num1 = 1;
$str1 = "1";

echo $num1 + $str1; // 2
echo gettype((int)$str1); // integer


?>