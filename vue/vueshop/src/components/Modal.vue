<template>
	<div class="bg_black" name="modalAni">
		<div class="bg_white">
			<img :src="data.img" alt="img" class="m-img">
			<h4>상품명 : {{ data.name }}</h4>
			<p>상품 설명 : {{ data.content }}</p>
			<p>가격 : {{ Number(data.price).toLocaleString() }} 원</p>
			<input 
				type="text"
				v-model="productCnt">
			<p>총 가격 : {{ Number(productCnt * data.price).toLocaleString() }} 원</p>
			<p>신고수 : {{ data.reportCnt }}</p>
			<button @click="$emit('closeModal')">닫기</button>
			<!-- $emit('@로 불러온 이름') 추가 -->
		</div>
    </div>
</template>
<script>
export default {
	name: 'Modal',
	data() {
		return {
			productCnt: 0,
		}
	},
	// watch : data를 감시하는 함수를 정의하는 영역
	watch: {
		// 함수명은 감시하고 싶은 데이터바인딩명과 동일해야합니다.
		productCnt(input) {
			if(input > 10) {
				alert('1인 10개까지 가능합니다');
				this.productCnt = 10;
			} else if(input < 0) {
				alert('(-) 넣지마세요');
				this.productCnt = 0;
			}
		}
	},
	props: {
		data: Object,
	},
}
</script>
<style>
	
</style>