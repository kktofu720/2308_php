// console.log("반갑습니다. js 파일입니다.");


// ----------------------
// 변수 (var, let, const)
// ----------------------
// var : 증복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// console.log(u_name);
// u_name = "갑순이"; // 앞에 var를 쓰면 뒤에서 부터 var 안써도됨 - 재할당 가능
// console.log(u_name);

// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_name = "홍길동";
// console.log(u_name);
// u_name = "갑순이"; // 앞에 let를 쓰면 뒤에서 부터 let 안써도됨 - 재할당 가능
// console.log(u_name);

// const : 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
const AGE = 19;
// AGE = 20; // 재할당 불가능
console.log(AGE);
