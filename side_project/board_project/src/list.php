<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/board_project/src/");
define("FILE_HEADER", ROOT."header.php");
require_once(ROOT."lib/lib_db.php");

$conn = null; // DB Connection 변수
$content = "";
$list_cnt = 5; // 한 페이지 최대 표시 수
$page_num = 1; // 페이지 번호 초기화 
$block = 5; // 한 블럭 당 페이지 수

try {
	// DB 접속
	if(!my_db_conn($conn)) {
		// DB Instance 에러
		throw new Exception("DB Error : PDO Instance"); // 강제 예외발생 : DB Instance
	}
    $content = isset($_GET["content"]) ? $_GET["content"] : "";
	// ---------------
	// 페이징 처리
	// ---------------

	// 총 게시글 수 검색
	$boards_cnt = db_select_boards_cnt($conn);
	if($boards_cnt === false) {
		throw new Exception("DB Error : SELECT Count Error"); // 강제 예외발생 : DB SELECT Count
	}
 	// 최대 페이지 수
	$max_page_num = ceil($boards_cnt / $list_cnt);

	// GET Method 확인
	// 삼항연산자로 작성할 경우
	$page_num = isset($_GET["page"]) ? $_GET["page"] : 1;

	$offset = ($page_num -1) * $list_cnt; // 오프셋 계산


	// 이전버튼
	$prev_page_num = $page_num - 1;
	if($prev_page_num === 0) {
		$prev_page_num = 1;
	}
	
	// 다음버튼
	$next_page_num = $page_num + 1;
	if($next_page_num > $max_page_num) {
		$next_page_num = $max_page_num;
	}
	
	// 현재 블럭 지정
	$now_block = ceil($page_num / $block);
	
	// 블럭의 시작 지점
	$block_start = ($now_block-1) * $block + 1;

	// 블럭의 마지막 지점
	$block_end = $block_start + $block - 1;

	// 한 페이지당 블럭 개수 제한
	if($block_end > $max_page_num) {
		$block_end = $max_page_num;
	}
	
	// DB 조회시 사용할 데이터 배열
	$arr_param = [
		"list_cnt" => $list_cnt
		,"offset" => $offset
	];
	
	
	// 게시글 리스트 조회
	$result = db_select_boards_paging($conn, $arr_param);
	if(!$result) {
		throw new Exception("DB Error : SELECT boards paging Error"); // 강제 예외발생 : SELECT boards
	}


} catch (Exception $e) {
	echo $e->getMessage(); // 예외발생 메세지 출력
	exit; // 처리 종료
} finally {
	db_destroy_conn($conn); // DB 파기
}


?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/board_project/src/css/board.css">
	<title>리스트 페이지</title>
</head>
<body class="list-body">
	 <?php
	 	require_once(FILE_HEADER);
	 ?>
	<main class="list-main">
		<table class="list-table">
			<colgroup>
				<col width="25%">
				<col width="45%">
				<col width="30%">
			</colgroup>
			<tr class="list-tr1">
				<th class="list-th">번호</th>
				<th class="list-th">제목</th>
				<th class="list-th">작성일자</th>
			</tr>
			<?php
				// 리스트를 생성
				foreach($result as $item) {
			?>	
				<tr>
					<td class="list-td"><?php echo $item["id"]?></td>
					<td class="list-td">
						<a href="/board_project/src/detail.php/?id=<?php echo $item["id"]; ?>&page=<?php echo $page_num; ?>">
							<?php echo $item["title"]?>
						</a>
					</td>
					<td class="list-td"><?php echo $item["create_at"]?></td>
				</tr>	
			<?php	} ?>
		</table>
		<br>
		<section class="list-section">
			<!-- 이전 페이지 -->
			<a href="/board_project/src/list.php/?page=<?php echo $prev_page_num; ?>">◀</a>
			<?php
				for($page_link = $block_start; $page_link <= $block_end; $page_link++) {
					// 현재 페이지
					if($page_link == $page_num) {
					?>
					<a class="list-act-btn" href="/board_project/src/list.php/?page=<?php echo $page_link; ?>"><?php echo $page_link; ?></a>
					<?php
					} else {
					?>
					<a href="/board_project/src/list.php/?page=<?php echo $page_link; ?>"><?php echo $page_link; ?></a>
					<?php
					}
				}
				?>		
				
				<!-- 다음 페이지  -->
			<a href="/board_project/src/list.php/?page=<?php echo $next_page_num; ?>">▶</a>
		</section>
		<div class="list-main-div">
			<a class="list-a" href="/board_project/src/insert.php">글 작성</a>
		</div>
	</main>
</body>

</html>