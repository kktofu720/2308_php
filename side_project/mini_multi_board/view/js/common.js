// const BTN_DETAIL = document.querySelector('#btnDetail');
// const BTN_MODAL_CLOSE = document.querySelector('#btnModalClose');

// BTN_DETAIL.addEventListener('click',() => {
//     const MODAL = document.querySelector('#modal');
//     MODAL.classList.remove('displayNone');
// });

// BTN_MODAL_CLOSE.addEventListener('click', () => {
//     const MODAL = document.querySelector('#modal');
//     MODAL.classList.add('displayNone');
// });

let test;


// 상세 모달 제어
function openDetail(id) {
    const URL = '/board/detail?id='+id;
    console.log(URL);
    fetch(URL)
    .then( response => response.json() )
    .then( data => {
        // 요소의 데이터 셋팅
        const TITLE = document.querySelector('#b_title');
        const CONTENT = document.querySelector('#b_content');
        const IMG = document.querySelector('#b_img');
        const CREATE = document.querySelector('#created_at');
        const UPDATE = document.querySelector('#updated_at');

        TITLE.innerHTML = data.data.b_title;
        CONTENT.innerHTML = data.data.b_content;
        IMG.setAttribute('src', data.data.b_img);
        CREATE.innerHTML = data.data.created_at;
        UPDATE.innerHTML = data.data.updated_at;


        // 모달 오픈
        openModal();
    } )
    .catch( error => console.log(error) )
}

// 모달 오픈 함수
function openModal() {
    const MODAL = document.querySelector('#modalDetail');
    MODAL.classList.add('show');
    MODAL.style = 'display : block; background-color : rgba(0, 0, 0, 0.7);';
}

// 모달 닫기 함수
function closeDetailModal() {
    const MODAL = document.querySelector('#modalDetail');
    MODAL.classList.remove('show');
    MODAL.style = 'display : none;';
}

// 아이디체크
function idCheck() {
    const U_ID = document.querySelector('#u_id').value;
    const URL = '/user/idcheck?u_id='+U_ID;
    // URL에 대문자 x (개발자들끼리 약속)
    const ID_CHK_MSG = document.querySelector('#id_chk_msg');
    ID_CHK_MSG.innerHTML = "";

    fetch(URL)
    .then( response => response.json() )
    .then( data => {
        console.log(data);
         if(data.data.cnt > 0) {
            ID_CHK_MSG.innerHTML = "중복된 아이디가 존재합니다.";
            ID_CHK_MSG.classList = 'text-danger';
         } else {
            ID_CHK_MSG.innerHTML = "사용가능한 아이디입니다.";
            ID_CHK_MSG.classList = 'text-success';
         }
    })
    .catch( error => console.log(error) )
}

