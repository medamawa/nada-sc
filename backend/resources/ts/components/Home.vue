<template>
<div class="wrap">
<bread-list></bread-list>
<my-article 
	title="title"
	name="name"
	data="data"
	summary="kyouhaiitennkidesunetinaminikyounobangohanhahapposaidesita"
/>
<my-article 
	title="title"
	name="name"
	data="data"
	summary="kyouhaiitennkidesunetinaminikyounobangohanhahapposaidesita"
/>
<my-article 
	title="title"
	name="name"
	data="data"
	summary="kyouhaiitennkidesunetinaminikyounobangohanhahapposaidesita"
/>
<my-article 
	title="title"
	name="name"
	data="data"
	summary="kyouhaiitennkidesunetinaminikyounobangohanhahapposaidesita"
/>
</div>
</template>
<script>
import axios from "axios"

export default {
	data() {
		return {
			articles: ""
		}
	},
	mounted: function(){
		axios.get("/article")
		.then(res => {
			console.log(res);
		})
	}
}
</script>
<style lang="scss">
@import "../../sass/style.scss";
</style>
