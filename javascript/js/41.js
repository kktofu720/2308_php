
// 타이머 함수

// 1. setTimeout(콜백함수, 시간(ms)) : 일정시간이 흐른 후에 콜백함수를 실행
// setTimeout(() => console.log('시간'), 3000);

// 콘솔에 1초 뒤에 A, 2초뒤에 a'B', 3초 뒤에 'C'가 출력되도록 프로그램을 만들어주세요.

// 방법1
// setTimeout(() => console.log('A'), 1000);
// setTimeout(() => console.log('B'), 2000);
// setTimeout(() => console.log('C'), 3000);

// 방법2
// function my_print(chr, ms) {
//     setTimeout(() => console.log(chr), ms);
// }
// my_print('A', 1000);
// my_print('B', 2000);
// my_print('C', 3000);

// 2. clearTimeout(해당 setTimeout 객체) : 타이머를 삭제
let mySet = setTimeout(() => console.log('C'), 5000);
clearTimeout(mySet); // 클리어 할 필요없으면 변수로 안받아도됨

// 3. setInterval(콜백함수, 시간(ms)) : 일정 시간마다 반복
let myInter = setInterval(() => console.log('민경씨 자지마'), 1000);

// 4. clearInterval(해당 setInterval) : 인터벌 삭제
clearInterval(myInter);

// 화면을 로드하고(접속했을 때) 5초 뒤에 '두둥등장' 이라는 매우 큰 글씨가 나타나게 해주세요.
// 익명함수
setTimeout(() => {
    const H1 = document.createElement('h1');
    H1.innerHTML = '두둥등장!'
    document.body.appendChild(H1);
}, 5000);
// 콜백함수
setTimeout(myAddH1, 5000);
function myAddH1() {
    const H1 = document.createElement('h1');
    H1.innerHTML = '두둥등장!'
    document.body.appendChild(H1);
}
