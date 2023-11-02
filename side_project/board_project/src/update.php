<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/board_project/src/");
define("FILE_HEADER", ROOT."header.php");
define("ERROR_MSG_PARAM", "%s을 입력해주세요.");// 파라미터 에러메세지
require_once(ROOT."lib/lib_db.php");

$conn = null; // DB 연결용 변수
$id = ""; // 변수에 값을 담기 위해 공백으로 설정
$page = "";
$http_method = $_SERVER["REQUEST_METHOD"]; // Method 확인
$arr_err_msg = [];

try {
    // DB 연결
	if(!my_db_conn($conn)) {
        // DB Instance 에러
		throw new Exception("DB ERROR : PDO Instance");
	}

    // GET Method의 경우
    if($http_method === "GET") {
    
        // 파라미터 획득
        $id = isset($_GET["id"]) ? $_GET["id"] : ""; // id 셋팅
		$page = isset($_GET["page"]) ? $_GET["page"] : ""; // page 셋팅

        if($id === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "id");
		}
		if($page === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "page");
		}
		if(count($arr_err_msg) >= 1) {
			throw new Exception(implode("<br>", $arr_err_msg));
		}
        
    } else {
        // POST Method의 경우
        // 게시글 수정을 위해 파라미터 셋팅
        $id = isset($_POST["id"]) ? trim($_POST["id"]) : ""; // id 셋팅
        $page = isset($_POST["page"]) ? trim($_POST["page"]) : ""; // page 셋팅
		$title = isset($_POST["title"]) ? trim($_POST["title"]) : ""; // title 셋팅
		$content = isset($_POST["content"]) ? trim($_POST["content"]) : ""; // content 셋팅

        if($id === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "id");
		}
		if($page === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "page");
		}
        if(count($arr_err_msg) >= 1) {
			throw new Exception(implode("<br>", $arr_err_msg));
		}

		if($title === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "제목");
		}
		if($content === "") {
			$arr_err_msg[] = sprintf(ERROR_MSG_PARAM, "내용");
		}
		
        if(count($arr_err_msg) === 0) {
            // 게시글 수정을 위해 파라미터 셋팅
            $arr_param = [
                "id" => $id
                ,"title" => $title
                ,"content" => $content
            ];
            // 게시글 수정 처리
            $conn->beginTransaction(); // 트랜잭션 시작

            if(!db_update_boards_id($conn, $arr_param)) { 
                throw new Exception("DB Error : Update_boards_id");
            }
            $conn->commit(); // commit

            header("Location: /board_project/src/detail.php/?id={$id}&page={$page}"); // detail 페이지로 이동
            exit;
        }    
    }

    // 게시글 데이터 조회를 위한 파라미터 셋팅
    $arr_param = [
        "id" => $id
    ];

    // 게시글 데이터 조회
    $result = db_select_boards_id($conn, $arr_param);

    // 게시글 조회 예외처리
    if($result === false) {
        // 게시글 조회 에러
        throw new Exception("DB ERROR : PDO Select_id");
    } else if(count($result) !== 1) {
        // 게시글 조회 count 에러
        throw new Exception("DB ERROR : PDO Select_id Count,".count($result));
    }

    $item = $result[0];

} catch(Exception $e) {
    if($http_method === "POST") {
        $conn->rollBack(); // rollback
    }
    echo $e->getMessage(); // 예외 메세지 출력
	exit; // 처리종료
} finally {
    db_destroy_conn($conn);
}

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/board_project/src/css/board.css">
    <title>수정 페이지</title>
</head>
<body class="list-body">
    <?php
		require_once(FILE_HEADER);
	?>    
    <main class="list-main">
        <form action="/board_project/src/update.php" method="post">
            <table class="list-table">
                <?php
			    foreach($arr_err_msg as $val) {
				?>
					<p><?php echo $val ?></p>
				<?php
					}
				?>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
              
                <tr class="detail-tr">
                    <th class="update-th">글 번호</th>
                    <td class="detail-td"><?php echo $item["id"]; ?></td>
                </tr>
                <tr class="detail-tr">
                    <th class="update-th">제목</th>
                    <td class="update-td-tit">
                        <input class="update-tit" type="text" name="title" value="<?php echo $item["title"] ?>">
                    </td>
                </tr>
                <tr class="detail-tr">
                    <th class="update-th">내용</th>
                    <td class="update-td-cont">
                        <textarea class="update-cont" name="content" id="content" cols="30" rows="10"><?php echo $item["content"] ?></textarea>
                    </td>
                </tr>
            </table>
            <br>
            <div class="detail-btn">
                <button class="update-a" type="submit">수정확인</button>
                <a class="update-a" href="/board_project/src/detail.php/?id=<?php echo $id; ?>&page=<?php echo $page; ?>">수정취소</a>
	        </div>
        </form>
	</main>
	
</body>
</html>