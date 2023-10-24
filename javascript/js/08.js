
// 조건문
// if(조건) {

// } else if(조건) {

// } else {

// }

let age = 40;
switch(age) {
    case 20:
        console.log("20대");
        break;
    case 30:
        console.log("30대");
        break;
    default:
        console.log("모르겠다.");
        break;
}


// -----------------------------------------------------------
// 반복문 (while , do_while, for, foreach, for...in, for...of)
// -----------------------------------------------------------

// foreach : 배열만 사용가능 (forEach 라고 대문자 신경쓰기)
// let arr = [1, 2, 3, 4];
// arr.forEach( function( val, key ){
//     console.log(`${key} : ${val}`);
// });
// 억음부호(backtick) ` 로 묶기 

// for...in : 모든 객체를 루프 가능, key에만 접근이 가능
// let obj = {
//     key1: 'val1'
//     ,key2: 'val2'
// }
// for( let key in obj ) {
//     console.log(key);
// }
// for...of : 모든 iterable객체를 루프 가능, value에 접근이 가능(String, Array, Map, Set, TypeArray...)
// for( let key of obj ) {
//     console.log(key);
// }


// 정렬해주세요.

let sort_arr = [3, 5, 2, 7, 10];
sort_arr.sort((a, b) => a - b);
sort_arr.sort( function(a, b){
    return a - b
});
// for(let i=0; i<sort_arr.length; i++) {
//     for(let j=0; j<sort_arr.length-1-i; j++){
//         if(sort_arr[j]>sort_arr[j+1]){
//             let tmp = sort_arr[j];
//             sort_arr[j] = sort_arr[j+1];
//             sort_arr[j+1] = tmp;
//         }
//     }
// }
console.log(sort_arr);