<?php

//폴더(디렉토리) 만들기
// if(mkdir("../tng/testdir", 777)) {
// 	echo "정상";
// }
//삭제하기

// rmdir("../tng/testdir");


/////////////
// 파일
/////////////
// 파일 열기
$file = fopen("zz.txt", "r");
// var_dump($file);

//파일 쓰기
// $f_write = fwrite($file, "탕수육\n");

//파일 읽기
while($line = fgets($file)){
	echo $line;
}


// 파일 닫기
// if($file) {
// 	echo "참";
// }
// else {
// 	echo "거짓";
// }
// fclose($file);

//파일 삭제
// unlink("zz.txt");

?>