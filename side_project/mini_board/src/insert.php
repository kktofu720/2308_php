<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/");
define("FILE_HEADER", ROOT."header.php");
require_once(ROOT."lib/lib_db.php");

// POST로 request가 왔을 때 처리
$http_method = $_SERVER["REQUEST_METHOD"];
if($http_method === "POST") {
	try {
		$arr_post = $_POST;
		$conn = null; // DB Connection 변수

		// DB 접속
		if(!my_db_conn($conn)) {
			// DB Insert 에러
			throw new Exception("DB Error : PDO Instance");
		}
		$conn->beginTransaction();

		// insert
		if(!db_insert_boards($conn, $arr_post)) {
			// DB Insert 에러
			throw new Exception("DB Error : Insert Boards");
		};

		$conn->commit(); // 모든 처리 완료 시 커밋

		// 리스트 페이지로 이동
		header("Location: list.php");
		exit;

	} catch(Exception $e) {
		$conn->rollBack();
		echo $e->getMessage();
		exit;
	} finally {
		db_destroy_conn($conn);
	}
	
}


?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/mini_board/src/css/common.css">
	<title>작성 페이지</title>
</head>
<body>
	<?php
		require_once(FILE_HEADER);
	?>
	<form action="/mini_board/src/insert.php" method="post">
		<fieldset class="insert-field">
			<div class="insert-container">
				<label for="title">제목</label>
				<input class="insert-tit"type="text" name="title" id="title" placeholder="제목을 입력해 주세요.">
			<br>
				<label for="content">내용</label>
				<textarea class="insert-cont" name="content" id="content" col="30" rows="10" placeholder="내용을 입력해 주세요."></textarea>
			</div>
			<br>
			<button class="insert-butt" type="submit">작성</button>
			<a class="insert-butt" href="/mini_board/src/list.php">취소</a>
		</fieldset>
	</form>
	
</body>
</html>