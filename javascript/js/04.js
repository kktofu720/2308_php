// console.log("반갑습니다. js 파일입니다.");


// ----------------------
// 변수 (var, let, const)
// ----------------------
// var : 증복 선언 가능, 재할당 가능, 함수레벨 스코프까지 가능
// var u_name = "홍길동";
// console.log(u_name);
// u_name = "갑순이"; // 앞에 var를 쓰면 뒤에서 부터 var 안써도됨 - 재할당 가능
// console.log(u_name);

// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프까지 가능
// let u_name = "홍길동";
// console.log(u_name);
// u_name = "갑순이"; // 앞에 let를 쓰면 뒤에서 부터 let 안써도됨 - 재할당 가능
// console.log(u_name);

// const : 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프까지 가능
// const AGE = 19;
// // AGE = 20; // 재할당 불가능
// console.log(AGE);

// ---------
// 스코프 : 변수 선언은 아무대나 가능하나 동작하는 방식이 다름
// ---------
// 전역 스코프 : 어디서든지 사용가능
let gender = "M";

// // 함수레벨 스코프 : 함수안에 있는
function test1() {
    let t = "test1";
    console.log(t);
    console.log(gender);
}
// test1() 찍으면 test1 나옴

// 블록레벨 스코프 : {}안에 있는 것이 블록레벨 스코프
function test2() {
    var t = "test1";
    if(true) {
        var t = "test2";
    }
    console.log(t);
}
// test2(); 찍으면 test2가 나옴
function test3() {
    let t = "test1";
    if(true) {
        let t = "test2";
    }
    console.log(t);
}
// test3(); 찍으면 test1가 나옴


// ------------------
// 호이스팅(hoisting)
// ------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올려지는 것

// console.log(htest1()); // htest1(); 찍기 전에 이미 띄어져 있음
// console.log(hvar); // var는 위에 선언하면 undefined 라고 뜸
console.log(hlet); // let은 여기서 부터 에러가 떠서 밑에부분까지 다 막힘

function htest1() {
    return "htest1 함수입니다.";
}

var hvar = "var로 선언";
let hlet = "let으로 선언";

// console.log(hvar); // var는 밑에 선언하면 var로 선언 라고 띄워짐
console.log(hlet); // let은 위에서 부터 막혀서 안뜸