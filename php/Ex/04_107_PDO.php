<?php

$db_host    = "localhost"; // host
$db_user    = "root"; // user
$db_pw      = "php504"; // password
$db_name    = "employees"; // DB name
$db_charset = "utf8mb4"; // charset
$db_dns     = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;

$db_options = [
	// DB의 Prepared Statement 기능을 사용하도록 설정
	PDO::ATTR_EMULATE_PREPARES      => false
	// PDO Exception을 Throws하도록 설정
	,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
	// 연상배열로 Fetch를 하도록 설정
	,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
];

// PDO Class로 DB 연동
$obj_conn = new PDO($db_dns, $db_user, $db_pw, $db_options);


// SQL 작성
// 10004번 사원테이블의 사원정보를 출력해 주세요. "앞과 뒤 공백 넣어주기
// php 마지막에는 ; 넣지말기
// $sql = " SELECT "
//  	."     *  " 
// 	." FROM " 
// 	." employees "  
// 	." WHERE " 
// 	."    emp_no = :emp_no " // 10004 대신 :emp_no
// 	;

// // Prepared Statement 셋팅
// $arr_ps = [
// 	":emp_no" => 10004
// ];

// // Prepared Statement 생성
// $stmt = $obj_conn->prepare($sql);
// $stmt->execute($arr_ps); // 쿼리 실행 // ->앞에있는 것은 Class
// $result = $stmt->fetchAll(); // 쿼리 결과를 fetch 한다.
// print_r($result);


// SELECT 예제
///// 사번 10001, 10002의 현재 연봉과 사번, 생일을 가져오는 쿼리를 작성해서 출력해주세요.
// $sql = " SELECT " 
// 	  ."     sal.salary " 
// 	  ."     ,emp.emp_no " 
// 	  ."     ,emp.birth_date "  
// 	  ." FROM "
// 	  ."     employees emp "
// 	  ." JOIN "
// 	  ."     salaries sal "
// 	  ." ON "
// 	  ."     emp.emp_no = sal.emp_no "
// 	  ." AND "
// 	  ."     emp.emp_no IN(:emp_no1, :emp_no2) "
// 	  ." AND "
// 	  ."     sal.to_date >= NOW() " 
// ;

// $arr_ps = [
// 	":emp_no1" => 10001
// 	, ":emp_no2" => 10002
// ];

// // Prepared Statement 생성
// $stmt = $obj_conn->prepare($sql);
// $stmt->execute($arr_ps); // 쿼리 실행 // ->앞에있는 것은 Class
// $result = $stmt->fetchAll(); // 쿼리 결과를 fetch 한다.
// print_r($result);


// ---------
// INSERT 
// 부서번호가 'd010', 부서명이 'php504' 데이터 insert
$sql = 
	" INSERT INTO departments ( "
	."	dept_no "
	."	, dept_name "
	." ) "
	." VALUES ( "
	."	:dept_no "
	." 	, :dept_name "
	." ) "
;

$arr_ps = [
	":dept_no" => "d010"
	, ":dept_name" => "php504"
];

$stmt = $obj_conn->prepare($sql);
$result = $stmt->execute($arr_ps);
// $obj_conn->commit(); // 커밋

var_dump($result);
$obj_conn = null; // DB 파기

// delete
// 부서번호가 'd010' 삭제
// $sql = 
// " DELETE FROM departments "
// ." WHERE "
// ."    dept_no = :dept_no "
// ;

// $arr_ps = [
// 	":dept_no" => "d010"
// ];

// $stmt = $obj_conn->prepare($sql);
// $result = $stmt->execute($arr_ps);
// $res_cnt = $stmt->rowCount();
// var_dump($res_cnt);
// if($res_cnt >= 2) {
// 	$obj_conn->rollback();
// 	echo "rollback";
// } else {
// 	$obj_conn->commit();
// 	echo "commit";
// }

// $obj_conn = null; // DB 파기

// var_dump($result);



?>