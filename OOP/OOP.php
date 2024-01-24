<?php

// 다중상속 o
interface 수영 {
	public function 수영();

}

interface 기름 {
	public function 기름();

}

// 추상 class에는 abstract 붙여야함 다중상속 x
abstract class 포유류 {
	protected $이름; // 멤버변수 이름

	// 추상 메소드
	abstract public function 호흡();
								// 파라미터 이름
	public function __construct (string $이름) {
		$this->이름 = $이름;
	}

	public function 출산() {
		echo $this->이름.' 출산한다.';
	}

	
}


class 날다람쥐 extends 포유류 {
	public function 호흡() {
		echo $this->이름.' 폐호흡한다.';
	}

	public function 비행() {
		echo $this->이름.' 날아간다.';
	}
}


class 고래 extends 포유류 implements 수영, 기름 {
	public function 호흡() {
		echo $this->이름.' 바다에서 폐호흡한다.';
	}

	public function 수영() {
		echo $this->이름.' 수영한다.';
	}
}


class 고등어 implements 수영 {
	public function 수영() {
		echo '고등어 수영한다.';
	}
}

// $obj = new 날다람쥐('날다람쥐');
// echo $obj->호흡();

$obj = new 고래('고래');
echo $obj->수영();

$obj = new 고등어();
echo $obj->수영();