<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/board_project/src/"); //웹서버 root 패스 생성
define("FILE_HEADER", ROOT."header.php"); // 헤어 패스
require_once(ROOT."lib/lib_db.php"); // DB 관련 라이브러리

$id = ""; // 게시글 id
$conn = null; // DB Connect
// $page_num = $_GET["page"];

try {

	// id 확인
	if(!isset($_GET["id"]) || $_GET["id"] === "") {
		throw new Exception("Parameter ERROR : No Id"); // 강제 예외 발생 : Parameter ERROR
	}

	$id = $_GET["id"]; // id 셋팅
	$page = $_GET["page"];

	// DB 연결
	if(!my_db_conn($conn)) {
		throw new Exception("DB ERROR : PDO Instance");
	}

	// 게시글 데이터 조회
	$arr_param = [
		"id" => $id
	];

	$result = db_select_boards_id($conn, $arr_param);

	// 게시글 조회 예외처리
	if($result === false) {
		// 게시글 조회 에러
		throw new Exception("DB ERROR : PDO Select_id");
	} else if(!(count($result) === 1)) {
		// 게시글 조회 count 에러
		throw new Exception("DB ERROR : PDO Select_id count,".count($result));
	}
	$item = $result[0];

} catch (Exception $e) {
	echo $e->getMessage(); // 예외 메세지 출력
	exit; // 처리종료

} finally {
	db_destroy_conn($conn); // DB 파기
}

$input_id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/board_project/src/css/board.css">
	<title>상세 페이지</title>
</head>
<body class="list-body">
	<?php
		require_once(FILE_HEADER);
	?>
		<table class="list-table">
			<tr class="detail-tr">
				<th class="detail-th">글 번호</th>
				<td class="detail-td"><?php echo $item["id"]; ?></td>
			</tr>
			<tr class="detail-tr">
				<th class="detail-th">제목</th>
				<td class="detail-td"><?php echo $item["title"]; ?></td>
			</tr>
			<tr class="detail-tr">
				<th class="detail-th">내용</th>
				<td class="detail-td"><?php echo $item["content"]; ?></td>
			</tr>
			<tr class="detail-tr">
				<th class="detail-th">작성일자</th>
				<td class="detail-td"><?php echo $item["create_at"]; ?></td>
			</tr>
		</table>
	<div class="detail-btn">
		<a class="insert-butt" href="/board_project/src/update.php/?id=<?php echo $id; ?>&page=<?php echo $page; ?>">수정</a>
		<a class="insert-butt" href="/board_project/src/list.php/?page=<?php echo $page; ?>">취소</a>
		<a class="insert-butt" href="/board_project/src/delete.php/?id=<?php echo $id; ?>&page=<?php echo $page; ?>">삭제</a>
	</div>
</body>
</html>