<?php
// ---------------------------------
// 함수명   : my_db_conn
// 기능     : DB Connect
// 파라미터 : PDO   &$conn
// 리턴     : boolen
// ---------------------------------

function my_db_conn( &$conn ) {
	$db_host    = "localhost"; 
	$db_user    = "root"; 
	$db_pw      = "php504";
	$db_name    = "board_project"; 
	$db_charset = "utf8mb4"; 
	$db_dns     = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
	
	try {
		$db_options = [
			PDO::ATTR_EMULATE_PREPARES      => false // DB의 Prepared Statement 기능을 사용하도록 설정 :: 뒤에 있는 것은 PDO안에 있는 멤버변수
			,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws 하도록 설정
			,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC // 연상배열로 Fetch를 하도록 설정
		];
		// PDO Class
		$conn = new PDO($db_dns, $db_user, $db_pw, $db_options);
		return true;

	} catch( Exception $e ) {
		$conn = null;
		return false;
	}
}

// ---------------------------------
// 함수명   : db_destroy_conn
// 기능     : DB Destroy
// 파라미터 : PDO   &$conn
// 리턴     : 없음
// ---------------------------------

function db_destroy_conn(&$conn) {
	$conn = null;
}




?>