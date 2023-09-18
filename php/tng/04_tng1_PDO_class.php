<?php

// PDO클레스를 이용해서 아래 쿼리를 실행해 주세요.

// 1. 자신의 사원 정보를 employees 테이블에 등록해 주세요.
// 2. 자신의 이름을 "둘리", 성을 "호이"로 변경해주세요.
// 3. 자신의 정보를 출력해 주세요.
// 4. 자신의 정보를 삭제해 주세요.

// 5. PDO 클래스 사용법 숙지

require_once("../Ex/04_107_fnc_db_connect.php");

$conn = null; // 객체타입은 null을 선호
my_db_conn($conn);

// 1.
// $sql = 
// 	" INSERT INTO employees ( "
// 	." emp_no "
// 	." , birth_date "
// 	." , first_name "
// 	." , last_name "
// 	." , gender "
// 	." , hire_date "
// 	." ) "
// 	." VALUES ( "
// 	." :emp_no "
// 	." , :birth_date "
// 	." , :first_name "
// 	." , :last_name "
// 	." , :gender "
// 	." , :hire_date "
// 	." ) "
// ;
// $arr_ps = [
// 	":emp_no" => 500002
// 	, ":birth_date" => 19990326
// 	, ":first_name" => "minjoo"
// 	, ":last_name" => "KIM"
// 	, ":gender" => "F"
// 	, ":hire_date" => 20230918
// ];

// $stmt = $conn->prepare($sql);
// $stmt->execute($arr_ps);
// $result = $stmt->fetchAll();
// $conn->commit(); // 커밋

// var_dump($result);
// print_r($result);
// $conn = null;

// 2.
// $sql1 = 
//  " UPDATE employees "
// ." SET " 
// ." first_name = :first_name "
// ." WHERE emp_no = :emp_no "
// ;
// $sql2 =
//  " UPDATE employees "
// ." SET " 
// ." last_name = :last_name "
// ." WHERE emp_no = :emp_no "
// ;

// $arr_ps1 = [
// 	":first_name" => "둘리"
// 	, ":emp_no" => 500002
// ];

// $arr_ps2 = [
// 	":last_name" => "호이"
// 	, ":emp_no" => 500002
// ];

// $stmt = $conn->prepare($sql1);
// $result = $stmt->execute($arr_ps1);
// $stmt = $conn->prepare($sql2);
// $result = $stmt->execute($arr_ps2);

// var_dump($result);
// $conn->commit();
// $conn = null;

// 3.
// $sql = " SELECT "
//  	."     *  " 
// 	." FROM " 
// 	." employees "  
// 	." WHERE " 
// 	."    emp_no = :emp_no " // 10004 대신 :emp_no
// 	;

// // Prepared Statement 셋팅
// $arr_ps = [
// 	":emp_no" => 500002
// ];

// $stmt = $conn->prepare($sql); // 셋팅하는
// $stmt->execute($arr_ps); // 실행하는 부분
// $result = $stmt->fetchAll();

// print_r($result);

// $conn = null;

// 4.
$sql =
 " DELETE FROM employees "
 ." WHERE "
 ." emp_no = :emp_no "
 ;

$arr_ps = [
	":emp_no" => 500002
];

$stmt = $conn->prepare($sql);
$result = $stmt->execute($arr_ps);
$res_cnt = $stmt->rowCount();
var_dump($res_cnt);

$conn = null; // DB 파기

















?>