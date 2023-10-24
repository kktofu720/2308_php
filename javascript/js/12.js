
// 함수

// 함수 생성

// 함수 선언식 : 호이스팅에 영향을 받는다.
function fnc_sum(a, b) {
    return a + b;
}

// 함수 표현식 : 호이스팅의 영향을 받지 않는다.
let fnc1 = function(a, b) {
    return a + b;
}

// 익명함수() : 이름이 없는 함수(단독으로 사용 x)
let fnc2 = function(a, b) {
    return a + b;
}
// 콜백함수 : 다시 호출되는 함수, 
function fnc_callback(call) {
    call();
}

fnc_callback(function(){
    console.log('익명함수');
});

// 배열객체의 sort의 경우 예시(**동작은 안함**)
// sort_arr.sort( function(a, b){
//     return a - b
// });

// function sort(call) {
//     let num = call();
//     if(num < 0) {
//         // 처리
//     } else {
//         // 처리
//     }
// }

// Function 생성자 함수
let tt = Function('a', 'b', 'return a + b;');

// 화살표 함수(Arrow Function)
let f1 = function() {
    return "f1";
}

let f2 = () => "f2";

// 파라미터가 1개인 경우
let f3 = function(a) {
    return a + '입니다.';
}

let f4 = a => a + '입니다.';
// let f4 = (a) => a + '입니다.';

// 파라미터가 2개 이상인 경우
let f5 = function(a, b) {
    return a + b;
}

let f6 = (a, b) => a + b;

let f7 = function(a, b) {
    if(a > b) {
        return 'a가큼';
    } else {
        return 'b가큼';
    }
}

let f8 = (a, b) => {
    if(a > b) {
        return 'a가큼';
    } else {
        return 'b가큼';
    }
}