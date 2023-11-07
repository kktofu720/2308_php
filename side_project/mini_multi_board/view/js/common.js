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
