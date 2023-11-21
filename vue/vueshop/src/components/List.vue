<template>
	<div>
		<h4 @click="$emit('fncOpenModal', data)" :style=colorRed>{{ data.name }}</h4>
		<p>{{ Number(data.price).toLocaleString() }} 원</p>
		<button @click="$emit('fncReport', productKey)">허위 매물 신고</button>
		<span>  신고수 : {{data.reportCnt }}</span>
	</div>
</template>
<script>
export default {
	name: 'List',
	props: {
		data: Object,
		productKey: Number,
		colorRed: String,
	}
}
</script>
<style>
	
</style>