
// 인라인 이벤트
// html파일 9~10라인 확인


// 프로퍼티 리스너 (잘 안씀)
const BTNGOOGLE = document.getElementById('btn_google');
BTNGOOGLE.onclick = function() {
    location.href = 'http:\/\/www.google.com';
};

// addEventListener(eventType, function) - 많이 씀

// ------------
// 팝업창 열기
// ------------
function popOpen() {
    winOpen = open('http:\/\/www.daum.net', '', 'width=1000 height=1000');
}
const BTNDAUM = document.getElementById('btn_daum');
let winOpen;
BTNDAUM.addEventListener('click', popOpen); // 콜백함수 ()붙이면 함수를 실행한다는 말
// BTNDAUM.addEventListener('click', () => {
//     open('http:\/\/www.daum.net', '', 'width=1000 height=1000')
// });

// ------------
// 팝업창 닫기
// ------------
const BTNCLOSE = document.getElementById('btn_close');
// BTNCLOSE.addEventListener('click', () => winOpen.close());

// 창 닫기 눌러도 안닫아지기
BTNCLOSE.addEventListener('click', popClose); // 호이스팅으로 인해 위에 써도 적용
function popClose() {
    winOpen.close();
}
BTNCLOSE.removeEventListener('click', popClose);

// ------------
// 이벤트 삭제
// ------------
// BTNDAUM.removeEventListener('click', popOpen); // 




// 콜백함수 다시 확인
// 'test'를 콘솔에 출력하는 함수
// function test() {
//     console.log("test");
// }

// // 콜백함수를 실행하는 함수
// function cb(fnc) {
//     fnc();
// }

// cb(test);

// -----------
// 이벤트타입
// -----------

// 1. 마우스 이벤트
// - mouseenter : 마우스 포인터가 요소 안으로 진입 했을 때
const DIV1 = document.querySelector('#div1'); // 접근
DIV1.addEventListener('mouseenter', () => { 
    alert('DIV1에 들어왔어요.');
    DIV1.style.backgroundColor = 'black';
});

