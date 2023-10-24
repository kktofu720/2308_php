
// ----------------
// 기본 데이터 타입
// ----------------

// 숫자(number)
let num = 1;

// 문자열(string)
let str = "string"

// 불리언(boolean)
let boo = true;

// null
let nu = null;

// undefined
let und;

// symbol : 고유한 ID를 가진 데이터 타입
let symbol_1 = Symbol("symbol");
let symbol_2 = Symbol("symbol");
// symbol_1 === symbol_2 찍으면 false 가 뜸

// -----------
// 객체 타입
// -----------

// Object
let obj = {
    food1: "탕수육"
    ,food2: "짜장면"
    ,food3: "라조기"
    ,eat: function() {
        console.log("먹자");
    }
    ,list: {
        list1: "리스트1"
        ,list2: "리스트2"
    }
}
// obj.변수 이렇게 찍으면 나옴
// 예를들어 obj.food1 찍으면 탕수육

// Array
let arr = [1, 2, 3];
// arr 찍으면 다 나오고 arr[0] 찍으면 1이 나옴

// Date


// Math

// 그 외에 기본데이터 타입을 제외한 모든 것

// 자기자신의 회원정보를 객체로 만들어 보세요.
let my = {
    name: "김민주"
    ,age: "25"
    ,birth_date: "19990326"
    ,gender: "F"
}



