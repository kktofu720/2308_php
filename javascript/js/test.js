
// // 두 수를 받아서 더한 값을 리턴해주는 함수를 만들어 봅시다.
// // 기본적인 형태
// function mySum(a, b) {
//     return a + b;
// }
// mySum(2, 5);

// // 익명함수는 변수에 담아줘야함
// const SUM = function(a, b) {
//     return a + b;
// }

// // 콜백함수 : 나중에 실행시키겠다.

// function myCallBack(fnc) {
//     fnc();
// }
// myCallBack(function() {
//     console.log('123');
// });
// myCallBack(() => console.log('123')); // 화살표함수 : 성능이슈 생길 수 있슴 처리가 하나일 땐 {} 생략가능
// // 맨위 2개가 밑이랑 같다.
// function fnc() {
//     console.log('123');
// }


// setTimeout(function() {
//     console.log('123');
// }, 1000);

// [1, 2, 3].filter(function(num) {
//     return num === 3;
// });

// function myPrint() {
//     console.log('123');
// }
// setTimeout(myPrint, 1000); // myPrint() 뒤에 () 안 붙이는 이유는 나중에 실행하기 위해 붙이면 바로 실행됨

// function test() {
//     console.log('A');
//     mySum(2, 5);
// }


// 함수를 3개 만들어 주세요.
// - 1. php를 출력하는 함수
// - 2. 504를 출력하는 함수
// - 3. 풀스택을 출력하는 함수

// 1번 함수는 3초뒤에 출력
// 2번 함수는 5초뒤에 출력
// 3번 함수는 바로 출력

function phpPrint() {
    console.log('php');
}
function numPrint() {
    console.log('504');
}
function fullPrint() {
    console.log('풀스택');
}

setTimeout(phpPrint, 3000);
setTimeout(numPrint, 5000);
fullPrint();

// 현재 시간 구해주세요.
// yyyy-mm-dd hh:mi:ss
let today = new Date();
// console.log(today);

let year = today.getFullYear();
let month = ('0' + (today.getMonth() + 1)).slice(-2);
let day = ('0' + today.getDate()).slice(-2);
let hours = ('0' + today.getHours()).slice(-2); 
let minutes = ('0' + today.getMinutes()).slice(-2);
let seconds = ('0' + today.getSeconds()).slice(-2); 

let dateString = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes  + ':' + seconds;

console.log(dateString);

// 버튼을 하나 만듭시다.
// 버튼을 클릭하면 네이버로 이동시켜 주세요.
const BTNNA = document.getElementById('btn_na'); // 접근
BTNNA.onclick = function() {
    location.href = 'http:\/\/www.naver.com';
} // 잘 안씀

BTNNA.addEventListener('click', function() {
    location.href = 'http:\/\/www.naver.com';
});