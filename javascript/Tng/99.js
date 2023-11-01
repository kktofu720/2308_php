
const BTN_API = document.querySelector('#btn-api'); // id가 btn-api인 버튼에 있는 API 호출 접근
BTN_API.addEventListener('click', my_fetch); // API호출 버튼 눌렀을 때 이벤트 동작

// my_fetch 함수
function my_fetch() {
    const INPUT_URL = document.querySelector('#input-url'); // input 태그에 접근
    fetch(INPUT_URL.value.trim())
    .then( response => {
        if( response.status >= 200 && response.status < 300 ){
            return response.json();  // 화살표 뒤에 return이 숨어있음
        } else {
            throw new Error('에러에러');
        }
    } )
    .then( data => makeImg(data)) // makeImg 함수 호출
    .catch( error => console.log(error) );
}
// fetch() 함수는 첫번째 인자로 URL, 두번째 인자로 옵션 객체를 받고, Promise 타입의 객체를 반환합니다. 
// 반환된 객체는, API 호출이 성공했을 경우에는 응답(response) 객체를 resolve하고, 
// 실패했을 경우에는 예외(error) 객체를 reject합니다.


function makeImg(data) {
    data.forEach( item => {
        const NEW_IMG = document.createElement('img'); // img 태그 생성
        const NEW_ID = document.createElement('p'); // id나오는 p 태그 생성
        const NEW_DIV = document.createElement('div'); // h1와 img를 함께 묶어주는 div 태그 생성
        const DIV_IMG = document.querySelector('#div-img'); // id가 div-img에 접근

        NEW_ID.innerHTML=item.id; // item 안에 있는 id 값 
        NEW_IMG.setAttribute('src', item.download_url); // item 안에 있는 download_url
    
        NEW_DIV.style.backgroundColor = 'gray'; // h1와 img가 들어있는 div에 배경색 집어넣기
        NEW_IMG.style.width = '95%'; // img 크기 맞추기

        DIV_IMG.appendChild(NEW_DIV); // id가 div-img인 영역(DIV_IMG)(부모)안에 새로만든 div태그(NEW_DIV)(자식)을 추가
        NEW_DIV.appendChild(NEW_ID); // 새로만든 div태그(NEW_DIV)(부모)안에 id나오는 h1 태그(NEW_ID)(자식)을 추가
        NEW_DIV.appendChild(NEW_IMG); // 새로만든 div태그(NEW_DIV)(부모)안에 img 태그(NEW_IMG)(자식)을 추가
    });
}

//  div2 > div-img(DIV_IMG) > div(NEW_DIV) > h1(NEW_ID), img(NEW_IMG)

// 지우기 버튼 눌렀을 때 이미지 삭제
const BTN_TRASH = document.querySelector('#btn-trash'); // id가 btn-trash인 지우기 버튼에 접근
BTN_TRASH.addEventListener('click', my_trash) // 지우기 버튼 눌렀을 때 이벤트 동작

// my_trash 함수
function my_trash() {
    const DIV_IMG = document.querySelector('#div-img');
    DIV_IMG.replaceChildren();
}
