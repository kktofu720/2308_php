<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/view/css/common.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>자유게시판 페이지</title>
</head>
<body>
    <?php require_once("view/inc/header.php"); ?>

    <div class="text-center mt-5 mb-5">
        <h1>자유게시판</h1>
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            width="40" height="40" fill="currentColor" 
            class="bi bi-plus-circle-fill" 
            viewBox="0 0 16 16"
            data-bs-toggle="modal" 
            data-bs-target="#modalInsert">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
        </svg>
    </div>
    <!-- 모달 테스트 -->
    <!-- <div id="modal" class="displayNone">
        <div id="modalW"></div>
        <button id="btnModalClose">닫기</button>
    </div> -->
    <main>
        <div class="card">
            <img src="../side_project/board_project/src/img/메인배경.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">고양이</h5>
                <p class="card-text">애옹</p>
                <button 
                    class="btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalDetail"
                    >상세
                </button>
            </div>
        </div>
        <div class="card">
            <img src="../side_project/board_project/src/img/컴퓨터_배경화면.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">고양이</h5>
                <p class="card-text">애옹</p>
                <button 
                    class="btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalDetail"
                    >상세
                </button>
            </div>
        </div>
        <div class="card">
            <img src="../side_project/board_project/src/img/컴퓨터_배경화면 (1).jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">고양이</h5>
                <p class="card-text">애옹</p>
                <button 
                    class="btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalDetail"
                    >상세
                </button>
            </div>
        </div>
        <div class="card">
            <img src="../side_project/board_project/src/img/컴퓨터_배경화면 (2).jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">고양이</h5>
                <p class="card-text">애옹</p>
                <button 
                    class="btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalDetail"
                    >상세
                </button>
            </div>
        </div>
        <div class="card">
            <img src="../side_project/board_project/src/img/컴퓨터_배경화면 (3).jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">고양이</h5>
                <p class="card-text">애옹</p>
                <button 
                    class="btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#modalDetail"
                    >상세
                </button>
            </div>
        </div>
    </main>

    <!-- 상세 모달 -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">개발자입니다.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span>살려주시와요.</span>
                    <br><br>
                    <img src="../side_project/board_project/src/img/고양이그룹.png" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                </div>
            </div>
        </div>
    </div>

     <!-- 작성 모달 -->
     <div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <input type="text" class="form-control" placeholder="제목을 입력하세요.">
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" cols="30" rows="10" placeholder="내용을 입력하세요."></textarea>
                        <br><br>
                        <input type="file" accept="image/*">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">작성</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom bg-dark text-light text-center p-3">저작권</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/view/js/common.js"></script>
</body>
</html>