<template>
	<div class="nav">
    <!-- 반복문 -->
	<!-- in navList를 in data로 변경 -->
		<a v-for="item in data" :key="item">{{ item }}</a>
	</div>
</template>
<script>
export default {
	name: 'Header',

	// props : 상위 컴포넌트의 데이터를 하위 컴포넌트가 쓰기 위한 영역
	props: {
		// 부모한테 받는 데이터타입으로 적기
		data: Array,
	}
}
</script>
<style>
	
</style>