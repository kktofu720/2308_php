<?php

// include : 해당 파일을 불러옵니다. 오류 발생 시 프로그램을 정지x
// include("./02_070_include2.php"); // 잘못된 오류 + 밑에거 그대로 처리

// require : 해당 파일을 불러옵니다. 오류 발생 시 프로그램을 정지o
// require("./02_070_include2.php"); // 잘못된 오류만

//_once : 중복되게 써도 하나만 출력
// include_once("./02_070_include2.php");
// include_once("./02_070_include2.php");
require_once("./02_070_include2.php");
require_once("./02_070_include2.php");

echo "include 11111\n";

?>