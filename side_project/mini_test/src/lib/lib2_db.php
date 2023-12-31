<?php

function my_db_conn2( &$conn ) {
	$db_host    = "localhost"; 
	$db_user    = "root"; 
	$db_pw      = "php504";
	$db_name    = "mini_test"; 
	$db_charset = "utf8mb4"; 
	$db_dns     = "mysql:host=".$db_host.";dbname=".$db_name.";charset=".$db_charset;
	
	try {
		$db_options = [
			PDO::ATTR_EMULATE_PREPARES      => false
			,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
			,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
		];
	
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


// --------------------------------
// 함수명    : db_select_test_cnt
// 기능      : test count 조회
// 파라미터  : PDO    &$conn
// 리턴      : Int / false
// --------------------------------

function db_select_test_cnt(&$conn) {

    $sql =
        " SELECT "
        ."      COUNT(id) as cnt "
        ." FROM "
        ."      test "
        ." WHERE "
        ."      delete_flg = '0' "
        ;

        try {
            $stmt = $conn->query($sql);
            $result = $stmt->fetchAll();

            return (int)$result[0]["cnt"]; // 정상 : 쿼리 결과 리턴

        } catch (Exception $e) {    
            return false; // 예외발생 : false 리턴
        }
}

// --------------------------------
// 함수명    : db_select_test_paging
// 기능      : test paging 조회
// 파라미터  : PDO   &$conn
//			  Array   &$arr_param 쿼리 작성용 배열
// 리턴      : Array / false
// --------------------------------

function db_select_test_paging(&$conn, &$arr_param) {
	try {
		$sql = 
		" SELECT "
		." 		id "
		."		,title "
		."		,create_at "
		." FROM "
		."		test "
		." WHERE"
		." 		delete_flg = '0' "
		." ORDER BY "
		."		id DESC "
		." LIMIT :list_cnt OFFSET :offset "  
		;

		$arr_ps = [
			":list_cnt" => $arr_param["list_cnt"]
			,":offset" => $arr_param["offset"]
		];

		$stmt = $conn->prepare($sql);
		$stmt->execute($arr_ps);
		$result = $stmt->fetchAll();

		return $result; // 정상 : 쿼리 결과 리턴

	} catch(Exception $e) {
		return false; // 예외발생 : false 리턴
	}
}

// --------------------------------
// 함수명    : db_insert_test
// 기능      : test 레코드 작성
// 파라미터  : PDO    &$conn
//			  Array   &$arr_param 쿼리 작성용 배열
// 리턴      : Boolean / false
// --------------------------------
function db_insert_test(&$conn, &$arr_param) {
	$sql = 	
		" INSERT INTO test ( "
		."		title "
		."		,content "
		." ) "
		." VALUES ( "
		." 		:title "
		." 		,:content "
		." ) "
		;
	$arr_ps = [
		":title" => $arr_param["title"]
		,":content" => $arr_param["content"]
	];

	try {
		$stmt = $conn->prepare($sql);
		$result = $stmt->execute($arr_ps);
		return $result; // 결과 리턴
	} catch(Exception $e) {
		return false;
	}
}

// --------------------------------
// 함수명    : db_select_test_id
// 기능      : test 레코드 작성
// 파라미터  : PDO    &$conn
// 리턴      : Int / false
// --------------------------------

function db_select_test_id(&$conn, &$arr_param) {
	$sql = 
		" SELECT "
		." 		id "
		." 		,title "
		." 		,content "
		."		,create_at "
		." FROM "
		." 		test "
		." WHERE "
		." 		id = :id "
		." AND "
		." 		delete_flg = '0' "
		;

	$arr_ps = [
		":id" => $arr_param["id"]
	];

	try {
		$stmt = $conn->prepare($sql);
		$stmt->execute($arr_ps);
		$result = $stmt->fetchAll();

		return $result; // 결과 리턴

	} catch(Exception $e) {
		echo $e->getMessage();
		return false;
	}
	
}

// --------------------------------
// 함수명    : db_update_test_id
// 기능      : test 레코드 작성
// 파라미터  : PDO    &$conn
//            Array    &$arr_param 쿼리 작성용 배열
// 리턴      : boolean
// --------------------------------
function db_update_test_id(&$conn, &$arr_param) {
	$sql = 
		" UPDATE "
		." 		test "
		." SET "
		." 		title = :title "
		." 		,content = :content "
		." WHERE "
		." 		id = :id "
		;
	
	$arr_ps = [	
		":id" => $arr_param["id"]
		,":title" => $arr_param["title"]
		,":content" => $arr_param["content"]
	];

	try {
		$stmt = $conn->prepare($sql);
		$result = $stmt->execute($arr_param);
		return $result;

	} catch (Exception $e) {
		echo $e->getMessage(); // Exception 메세지 출력
		return false; // 예외발생 : false
	}

}

// --------------------------------
// 함수명    : db_delete_test_id
// 기능      : 특정 id 레코드 삭제처리
// 파라미터  : PDO    &$conn
//            Array    &$arr_param
// 리턴      : boolean
// --------------------------------

function db_delete_test_id(&$conn, &$arr_param) {
	$sql = 
		" UPDATE test "
		." SET "
		." 		delete_at = now() "
		." 		,delete_flg = '1' "
		." WHERE "
		." 		id = :id "
		;		
	$arr_ps = [	
		":id" => $arr_param["id"]
	];

	try {
		// 2. Query 실행
		$stmt = $conn->prepare($sql);
		$result = $stmt->execute($arr_ps);

		return $result; // 정상종료 : true 리턴
	} catch(Exception $e) {
		echo $e->getMessage(); // Exception 메세지 출력
		return false; // 예외발생 : false 리턴
	}


}

?>