<template>
<div class="editor_wrap">
	<textarea class="editor" contenteditable="true" v-model="md"></textarea>
	<div class="result" v-html="result"></div>
</div>
</template>

<script>
import marked from "marked"
export default {
	data() {
		return {
			md: "a",
		}
	},
	computed: {
		result: function() {
			return marked(this.md);
		}
	}
}
</script>
<style lang="scss">
@import "../../sass/variables.scss";
@import "../../sass/style.scss";

.editor_wrap {
	width: 100vw;
	height: 80vh;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	margin-bottom: 1rem;
	textarea {
		resize: none;
		font-size: 1.2em;
	}
	> * {
		display: block;
		width: 45%;
		border: solid 1px $text-color;
		padding: 2%;
	}
	.editor {
		border-right: solid 1px $text-color;
	}
}
</style>
