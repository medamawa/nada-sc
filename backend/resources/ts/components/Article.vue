<template>
<article>
	<h1><a href="test">{{ title }}</a></h1>
	<div>
		<div class="name">{{ name }}</div>
		<div class="data">{{ data }}</div>
	</div>
	<p class="summary">{{ summary }}</p>
</article>
</template>

<script>
export default {
	props: ["title", "name", "data", "summary"]
}
</script>

<style lang="scss">
@import "../../sass/variables.scss";
@import "../../sass/style.scss";

article {
	width: 96%;
	border-bottom: solid 1px rgba(0, 0, 0, 0.25);
	padding: 2rem 2%;
	margin: 0.5rem 0;
	h1 {
		margin-top: 1rem;
		margin-bottom: 0;
	}
	div {
		color: $text-color;
		text-align: right;
		@include lg {
			font-size: 1.2rem;
		}
		.name {
			font-weight: 600;
		}
	}
}
</style>
