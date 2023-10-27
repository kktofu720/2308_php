
//하
// 1. 현재 시간을 화면에 표시

const TIMER = setInterval(currentTime, 1000);
function currentTime() {
    let d = new Date();
    let t = '현재 시각 : ';
    const TIMER = document.getElementById('currentTime');
    TIMER.innerHTML = t+d.toLocaleTimeString();
}
 
// 중하
// 2. 실시간으로 시간을 화면에 표시

// 중하
// 3. 멈춰 버튼을 누르면, 시간이 정지할 것

const BTNSTOP = document.getElementById('stop');
BTNSTOP.addEventListener('click', () => {
    clearInterval(TIMER);
})
// 중상
// 4. 재시작 버튼을 누르면, 버튼을 누른 시점의 시간부터 다시 실시간으로 화면에 표지
const BTNGO = document.getElementById('go');

// BTNGO.addEventListener('click', function() {
//     TIMER = setInterval(function() {
//         let d = new Date();
//         let t = '현재 시각 : ';
//         const TIMER = document.getElementById('currentTime');
//         TIMER.innerHTML = t+d.toLocaleTimeString();
//     }, 1000)
// })
BTNGO.addEventListener('click', () => {
    TIMER = setInterval(currentTime, 1000);
})