<?php

// namespace : 클래스를 구분해주기 위해 설정, 보통은 해당파일의 패스로 작성
namespace up;

class Class1 {
	public function __construct() {
		echo "up class";
	}

}

namespace down;

class Class1 {
	public function __construct() {
		echo "down class";
	}

}

// namespace를 이용해서 객체를 지정
// $obj_class1 = new \up\Class1();

namespace test;

use \down\class1;
$obj_class1 = new Class1();









?>