<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/board_project/src/");
define("FILE_HEADER", ROOT."header.php");
define("ERROR_MSG_PARAM", "%s을 입력해주세요.");// 파라미터 에러메세지
require_once(ROOT."lib/lib_db.php");

$conn = null; // DB Connection 변수
$http_method = $_SERVER["REQUEST_METHOD"]; // Method 확인
$arr_err_msg = []; // 에러 메세지 저장용
$title = "";
$content = "";

// POST로 request가 왔을 때 처리
if($http_method === "POST") {
	try {
		// 파라미터 획득
		$title = isset($_POST["title"]) ? trim($_POST["title"]) : ""; // title 셋팅
		$content = isset($_POST["content"]) ? trim($_POST["content"]) : ""; // content 셋팅

		if($title === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "제목");
		}
		if($content === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "내용");
		}
		
		if(count($arr_err_msg) === 0) {
				// DB 접속
			if(!my_db_conn($conn)) {
				// DB Insert 에러
				throw new Exception("DB Error : PDO Instance");
			}
			$conn->beginTransaction(); // 트랜잭션 시작

			// 게시글 작성을 위헤 파라미터 셋팅
			$arr_param = [
				"title" => $_POST["title"]
				,"content" => $_POST["content"]
			];

			// insert
			if(!db_insert_boards($conn, $arr_param)) {
				// DB Insert 에러
				throw new Exception("DB Error : Insert Boards");
			};

			$conn->commit(); // 모든 처리 완료 시 커밋

			// 리스트 페이지로 이동
			header("Location: list.php");
			exit;
		}
		
	} catch(Exception $e) {
		if($http_method !== "POST") {
			$conn->rollBack();
		}
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
	<link rel="stylesheet" href="/board_project/src/css/board.css">
	<title>작성 페이지</title>
</head>
<body class="list-body">
	<?php
		require_once(FILE_HEADER);
	?>
	<form action="/board_project/src/insert.php" method="post">
		<fieldset class="insert-field">
			<div class="insert-container">
				<?php
				foreach($arr_err_msg as $val) {
				?>
					<p class="ErrorMsg"><?php echo $val ?></p>
				<?php
					}
				?>
				<label for="title">제목</label>
				<input class="insert-tit"type="text" name="title" id="title" value="<?php echo $title ?>"placeholder="제목을 입력해 주세요.">
			<br><br><br>
				<label for="content">내용</label>
				<textarea class="insert-cont" name="content" id="content" col="30" rows="10" placeholder="내용을 입력해 주세요."><?php echo $content ?></textarea>
			</div>
			<br>
		</fieldset>	
		<div class="insert-div-btn">
			<button class="insert-btn" type="submit">작성</button>
			<a class="insert-btn" href="/board_project/src/list.php">취소</a>
		</div>
	</form>
	
</body>
</html>