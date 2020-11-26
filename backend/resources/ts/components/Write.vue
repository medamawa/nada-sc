<template>
<div class="title"><input class="title" type="text" name="title" v-model="title"></div>
<div class="editor_wrap">
	<textarea class="editor" contenteditable="true" v-model="md"></textarea>
	<div class="result" v-html="result"></div>
</div>

<div class="button"><input class="submit" type="button" @click="submit" value="submit"></div>
</template>

<script>
import marked from "marked"
import axios from "axios"

export default {
	data() {
		return {
			md: "",
			title: ""
		}
	},
	computed: {
		result: function() {
			return marked(this.md);
		}
	},
	methods: {
		submit: function(){
			axios.post("/draft", {
				name: "name",
				email: "test@gmail.com",
				title: this.title,
				summary: "summary",
				body: this.result
			})
		}
	}
}
</script>
<style lang="scss">
@import "../../sass/variables.scss";
@import "../../sass/style.scss";

.title{
	width: 100vw;
	margin-bottom: 2rem;
}
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
