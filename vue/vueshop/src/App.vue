<template>
  <img alt="Vue logo" src="./assets/logo.png">
  
  <!-- 헤더 -->
  <div class="nav">
    <!-- <a href="#">홈</a>
    <a href="#">상품</a>
    <a href="#">기타</a> -->

    <!-- 반복문 -->
    <a v-for="item in navList" :key="item">{{ item }}</a>
  </div>

  <!-- 모달 -->
  <!-- v-if -->
  <!-- 방법1 -->
  <!-- <div class="bg_black" v-if="modalFlg">
    <div class="bg_white">
      <img src="products[key].img" alt="img">
      <h4>상품명 : {{ products[key].name }}</h4>
      <p>상품 설명 : {{ products[key].content }}</p>
      <p>가격 : {{ products[key].price}} 원</p>
      <p>신고수 : {{ products[key].reportCnt }}</p>
      <button @click="modalFlg = false">닫기</button>
    </div>
  </div> -->

  <!-- 방법2 -->
  <Transition name="modalAni">
    <div class="bg_black" v-if="modalFlg" name="modalAni">
      <div class="bg_white">
        <img :src="modalProduct.img" alt="img" class="m-img">
        <h4>상품명 : {{ modalProduct.name }}</h4>
        <p>상품 설명 : {{ modalProduct.content }}</p>
        <p>가격 : {{ modalProduct.price }} 원</p>
        <p>신고수 : {{ modalProduct.reportCnt }}</p>
        <button @click="modalFlg = false">닫기</button>
      </div>
    </div>
  </Transition>

  <!-- 상품 리스트 -->
  <!-- 속성은 {{  }} 쓰면 안됨 -->
  <!-- {{  }} 은 echo라고 생각하면 됨 -->

  <!-- 방법1 -->
  <!-- <div>
    <div v-for="(item, i) in products" :key="i">
      <h4 @click="modalFlg = true; key=i" :style="sty_color_red">{{ item.name }}</h4>
      <p>{{ item.price }} 원</p>
      <button @click="plusOne(i)">허위 매물 신고</button>
      <span>신고수 : {{item.reportCnt }}</span>
    </div>
  </div> -->

  <!-- 방법2 -->
  <div>
    <div v-for="(item, i) in products" :key="i">
      <h4 @click="modalOpen(item)" :style="sty_color_red">{{ item.name }}</h4>
      <p>{{ item.price }} 원</p>
      <button @click="plusOne(i)">허위 매물 신고</button>
      <span>신고수 : {{item.reportCnt }}</span>
    </div>
  </div>

  <!-- <div>
    <div>
      <h4 :style="sty_color_red">{{ products[0] }}</h4>  
      <p>{{ prices[0] }}</p>
    </div>
    <div>
      <h4>{{ products[1] }}</h4>
      <p>{{ prices[1] }}</p>
    </div>
    <div>
      <h4>{{ products[2] }}</h4>
      <p>{{ prices[2] }}</p>
    </div>
  </div> -->
  
</template>

<script>
import data from './assets/js/data.js';

export default {
  name: 'App',

  // 데이터 바인딩 : 우리가 사용할 데이터를 저장하는 공간
  // 방법2에 넣을 modalProduct를 추가함
  data() {
    return {
      navList: ['홈', '상품', '기타', '문의'],
      sty_color_red: 'color: red',
      // products : ['양말', '티셔츠', '바지'],
      // prices : [1500, 25000, 40000],
      products: data,
      modalFlg: false,
      modalProduct: {},
      // key: 0,
    }
  },
  // methods : 함수를 정의하는 영역
  // 방법2에 넣을 modalOpen을 추가함
  methods: {
    plusOne(i) {
      this.products[i].reportCnt++;
    },
    modalOpen(item) {
      this.modalFlg = true;
      this.modalProduct = item;
    }
  },
}

</script>

<style>
@import url('./assets/css/common.css');
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
/* css 파일로 이관 */
/* .nav {
  background-color: #2c3e50;
  padding: 15px;
  border-radius: 10px;
}
.nav a {
  color: #fff;
  padding: 10px;
  text-decoration: none;
} */
</style>
