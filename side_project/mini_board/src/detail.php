<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/mini_board/src/"); //웹서버 root 패스 생성
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
	<link rel="stylesheet" href="/mini_board/src/css/common.css">
	<title>상세 페이지</title>
</head>
<body>
	<?php
		require_once(FILE_HEADER);
	?>
	<div>
		<table class="detail-container">
			<tr>
				<th>글 번호</th>
				<td><?php echo $item["id"]; ?></td>
			</tr>
			<tr>
				<th>제목</th>
				<td><?php echo $item["title"]; ?></td>
			</tr>
			<tr>
				<th>내용</th>
				<td><?php echo $item["content"]; ?></td>
			</tr>
			<tr class="detail-tr4">
				<th class="detail-tr4">작성일자</th>
				<td class="detail-tr4"><?php echo $item["create_at"]; ?></td>
			</tr>
		</table>
	</div>
	<div class="detail-a">
		<a class="insert-butt" href="/mini_board/src/update.php/?id=<?php echo $id; ?>&page=<?php echo $page; ?>">수정</a>
		<a class="insert-butt" href="/mini_board/src/list.php/?page=<?php echo $page; ?>">취소</a>
		<a class="insert-butt" href="#">삭제</a>
	</div>
</body>
</html>