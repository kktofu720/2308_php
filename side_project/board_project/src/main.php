<?php
define("ROOT", $_SERVER["DOCUMENT_ROOT"]."/board_project/src/");
define("FILE_HEADER", ROOT."header.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/board_project/src/css/board.css">
    <title>메인페이지</title>
</head>
<body class="main-body">
    <?php
        require_once(FILE_HEADER);
    ?>
    <main class="main-main">
        <a class="main-a" href="/board_project/src/list.php">
            <img class="main-img" src="/board_project/src/img/고양이그룹.png" alt="">
        </a>
        <div class="main-div">고양이를 클릭해 주세요.</div>
    </main>
</body>
</html>