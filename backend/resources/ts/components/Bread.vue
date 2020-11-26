<template>
<div class="breadWrap" >
	<div v-for="(el, index) in breadList">
		<div> {{ el }} </div>
		<div v-if="index != breadList.length-1"> &nbsp; > &nbsp; </div>
	</div>
</div>
</template>
<script>
export default {
	data() {
		return {
			table: {
				"home": "トップページ",
				"koreha": "これは",
				"test": "テスト",
				"desu": "です"
			},
			breadList: []
		}
	},
	mounted: function(){
		const currentPath = location.pathname.slice(1);
		this.breadList = ["home", ...currentPath.split("/")].map(x => {
			return this.table[x];
		});
		console.log(this.breadList);
	}

}
</script>

<style lang="scss">
.breadWrap {
	display: flex;
	flex-direction: row;
	div {
		display: flex;
		flex-direction: row;
	}
}
</style>
