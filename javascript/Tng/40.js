// 하
// 1. 버튼을 클릭 시 아래 내용의 알러트가 나옵니다.
    // "안녕하세요."
    // "숨어있는 div를 찾아보세요."

const HELLO = document.querySelector('#btn_hello');
HELLO.addEventListener('click', () => { 
    alert('안녕하세요.\n숨어있는 div를 찾아보세요.');
});

// 중하
// 2-1. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다. 
    // "두근둗근"

const DIV1 = document.querySelector('#div1');
DIV1.addEventListener('mouseenter', popDiv1);
function popDiv1() {
    alert('두근둗근');
}

// 상
// 2-2. 들킨 상태에서는 알러트가 안나옵니다.


   
// 중하
// 3. 2번의 영역을 클릭하면 아래의 알러트를 출력하고, 배경색이 베이지 색으로 바뀌어 나타납니다.
    // "들켰다."
let i = true;

const DIV2 = document.querySelector('#div2');
DIV2.addEventListener('click', popDiv2);
function popDiv2() {
    if(i) {
        alert('들켰다.');
        DIV2.style.backgroundColor = 'beige';
    } else {
        alert('다시 숨는다');
        DIV2.style.backgroundColor = '#ffffff';
    }
    i = !i;
}


// 상
// 4. 3번의 상태에서 다시 한번 더 클릭하면 아래의 알러트를 출력하고, 배경색이 흰색으로 바뀌어 안보이게 됩니다.
    // "다시 숨는다."





//  1   >>  2-1  >>   3   >>   2-2   >>  4