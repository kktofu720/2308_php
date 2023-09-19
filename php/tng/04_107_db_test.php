<?php

// 1. titles 테이블에 데이터가 없는 사원을 검색
// 2. [1]번에 해당하는 사원의 직책 정보를 insert 
//   2-1. 직책은 "green", 시작일은 현재시간, 종료일은 99990101
// 3. 디비에 저장 될 것

function db_conn( &$conn ) {
	$db_host    = "localhost"; 
	$db_user    = "root"; 
	$db_pw      = "php504";
	$db_name    = "employees"; 
	$db_charset = "utf8mb4"; 
	$db_dns     = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
	
	$db_options = [
		PDO::ATTR_EMULATE_PREPARES      => false
		,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
		,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
	];

	$conn = new PDO($db_dns, $db_user, $db_pw, $db_options);
}

$conn = null; // 객체타입은 null을 선호
db_conn($conn);


//1. titles 테이블에 데이터가 없는 사원을 검색

// $sql = 
// " SELECT "
// ." * "
// ." FROM "
// ." employees emp "
// ." WHERE " 
// ." emp.emp_no "
// ." NOT IN(SELECT emp_no FROM titles) "
// ;

// $arr_ps = [

// ];


// $stmt = $conn->prepare($sql);
// $stmt->execute($arr_ps);
// $result = $stmt->fetchAll();
// // var_dump($result);

// print_r($result);

$conn = null;


// 2. [1]번에 해당하는 사원의 직책 정보를 insert 
//   2-1. 직책은 "green", 시작일은 현재시간, 종료일은 99990101

$sql =
" INSERT INTO titles ( "
	." emp_no "
	." , title "
	." , from_date "
	." , to_date "
." ) "
." VALUES ( "
	." :emp_no "
	." , :title "
	." , NOW() "
	." , :to_date "
." ) "
;

$arr_ps = [
	":emp_no" => 700000
	, ":title" => "green"
	, ":to_date" => 99990101 
];

$stmt = $conn->prepare($sql);
$result = $stmt->execute($arr_ps);
// $result = $stmt->fetchAll();
$conn->commit(); // 커밋

// var_dump($result);
// print_r($result);
$conn = null;



?>