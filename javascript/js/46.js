
// 1. async & await 란?
// 비동기처리를 좀 더 가독성 좋고 편하게 쓰기 위해 promise를 사용했는데,
// promise 또한 체이닝이 계속 될 경우 코드가 난잡해 질 수 있어 async & await가 도입되었습니다.
// async & await는 promise를 기반으로 동작합니다.

async function test() {
    await PRO3('A', 3000);
    await PRO3('B', 2000);
    await PRO3('C', 1000);
}

// 병렬처리 하는 방법 : Promise.all() 이용   여러 처리를 동시에 실행

async function test2() {
    return Promise.all(PRO3('A', 3000), PRO3('B', 1000))
        .then( () => console.log('처리완료'));
}

test2()
.then(() => console.log('test2'));
