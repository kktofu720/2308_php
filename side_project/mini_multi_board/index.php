<?php

require_once("config.php"); // 설정파일 불러오기
require_once("autoload.php"); // 오토로드 파일 불러오기


// 라우터 호출
// 오토로드 덕분에 파일 불러오기 안해도됨
// 라우터 파일의 const 가 실행됨
new router\Router(); 
