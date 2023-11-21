<template>
  <img alt="Vue logo" src="./assets/img/coupang.png">
  
  <!-- 헤더 -->
  <!-- :data="" 추가 -->
  <Header :data="navList"></Header>

  <!-- 컴포넌트로 이관 -->
  <!-- <div class="nav"> -->
    <!-- 반복문 -->
    <!-- <a v-for="item in navList" :key="item">{{ item }}</a>
  </div> -->

  <!-- 할인 배너 -->
  <Discount></Discount>
  <!-- 이렇게도 가능 <Discount/> --> 

  <!-- 컴포넌트로 이관  -->
  <!-- <div class="discount">
    <p>지금 당장 구매하시면, 30% 할인!!!!</p>
  </div> -->

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
  <!-- 컴포넌트로 이관 -->
  <!-- 함수불러올때 @ = "함수이름" 을 추가 -->
  <Transition name="modalAni">
    <Modal 
      v-if="modalFlg"
      :data = "modalProduct"
      @closeModal = "modalClose" 
    ></Modal>
  </Transition>
  
    <!-- <div class="bg_black" v-if="modalFlg" name="modalAni">
      <div class="bg_white">
        <img :src="modalProduct.img" alt="img" class="m-img">
        <h4>상품명 : {{ modalProduct.name }}</h4>
        <p>상품 설명 : {{ modalProduct.content }}</p>
        <p>가격 : {{ modalProduct.price }} 원</p>
        <p>신고수 : {{ modalProduct.reportCnt }}</p>
        <button @click="modalClose()">닫기</button>
      </div>
    </div> -->
  

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
  <!-- 컴포넌트로 이관 -->
  <div>
    <List
      v-for="(item, i) in products" :key="i"
      :data = "item" 
      :productKey = "i"
      :colorRed = "sty_color_red"
      @fncOpenModal = "modalOpen"
      @fncReport = "plusOne"
    ></List>
  </div>
  <!-- <div>
    <div v-for="(item, i) in products" :key="i">
      <h4 @click="modalOpen(item)" :style="sty_color_red">{{ item.name }}</h4>
      <p>{{ item.price }} 원</p>
      <button @click="plusOne(i)">허위 매물 신고</button>
      <span>신고수 : {{item.reportCnt }}</span>
    </div>
  </div> -->

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

// 컴포넌트로 이관할 때 파일따로 만들고 div영역 복붙, name 등록
// components영역에 추가, import 추가, 위에 주석달아놓은 곳에 <></>추가
import Discount from './components/Discount.vue';

import Header from './components/Header.vue';

import Modal from './components/Modal.vue';

import List from './components/List.vue';

export default {
  name: 'App',

  // 데이터 바인딩 : 우리가 사용할 데이터를 저장하는 공간
  // 방법2에 넣을 modalProduct를 추가함
  data() {
    return {
      navList: ['홈', '상품', '기타', '문의'], // Array 배열
      sty_color_red: 'color: red', // String 문자
      // products : ['양말', '티셔츠', '바지'],
      // prices : [1500, 25000, 40000], Number 숫자
      products: data,
      modalFlg: false, // Boolean
      modalProduct: {}, // Object 객체
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
    },
    modalClose() {
      this.modalFlg = false;
    }
  },

  // components : 컴포넌트를 등록하는 영역
  components: {
    Discount, Header, Modal, List,
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
