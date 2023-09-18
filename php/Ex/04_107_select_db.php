<?php

require_once("./04_107_fnc_db_connect.php");

$conn = null; // 객체타입은 null을 선호
my_db_conn($conn);

// SQL 작성
$sql = " SELECT "
 	."     *  " 
	." FROM " 
	." employees "  
	." WHERE " 
	."    emp_no = :emp_no " // 10004 대신 :emp_no
	;

// Prepared Statement 셋팅
$arr_ps = [
	":emp_no" => 10004
];

$stmt = $conn->prepare($sql); // 셋팅하는
$stmt->execute($arr_ps); // 실행하는 부분
$result = $stmt->fetchAll();

print_r($result);

$conn = null;

//db 파기
db_destroy_conn($conn);

?>