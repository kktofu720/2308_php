let arr = [1, 2, 3, 4, 5];

// push() 메소드 : 배열에 값을 추가
arr.push(6); // [1, 2, 3, 4, 5, 6]

// splice() : 배열의 요소를 삭제 또는 교체
// arr.splice(2, 1); // 배열의 arr[2]에서부터 n개를 삭제 [1, 2, 4, 5, 6]
// arr.splice(4, 1); // 배열의 arr[4]에서부터 n개를 삭제 [1, 2, 3, 4, 6]
// arr.splice(2, 0, 10); // 배열의 arr[2]에 값이 10인 인덱스를 추가 [1, 2, 10, 3, 4, 5, 6]
// arr.splice(2, 1, 10); // 배열의 arr[2]에서 부터 n개를 삭제 후 10으로 교체 [1, 2, 10, 4, 5, 6]
// arr.splice(2, 1, 'aaa');
// arr.splice(2, 0, 10, 11, 12, 13); // 3번째 아규먼트부터는 가변파라미터로써 모든 값을 추가 [1, 2, 10, 11, 12, 13, 3, 4, 5, 6]

// indexOf() : 배열에서 특정 요소를 찾는데 사용
// arr.indexOf(4); // 3


// lastIndexOf() : 배열에서 특정 요소 중 가장 마지막에 위치한 요소를 찾는데 사용
// arr = [1, 1, 1, 3, 4, 5, 6, 6, 6, 10];
// arr.lastIndexOf(1); // 2
// arr.lastIndexOf(6); // 8