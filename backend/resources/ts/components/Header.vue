<template>
<header :class="{ open: isOpen }">
	<div class="links">
		<div class="link">名状しがたいロゴのようなもの</div>
		<div class="link" v-if="isOpen"><a href="/papers"><span>お知らせ</span></a></div>
		<div class="link" v-if="isOpen"><a href="/recruitment"><span>募集</span></a></div>
		<div class="link" v-if="isOpen"><a href="/opinionbox"><span>意見箱</span></a></div>
	</div>
	<div class="button" @click="humberger()"></div>
</header>
</template>
<script>
export default {
	data() {
		return {
			isOpen: false
		}
	},
	mounted: function() {
		console.log(window.innerWidth)
		if (window.innerWidth >= 1000) {
			this.isOpen = true;
		}
	},
	methods: {
		humberger: function() {
			this.isOpen = !this.isOpen;
			console.log(this.isOpen);
		}
	}
}
</script>
<style lang="scss" module>
@import "../../sass/variables.scss";

header{
	transition: 1.0s;
	background: $gray;
	width: 100%;
	border-bottom: 2px solid #224473;
	margin-bottom: 1rem;
	display: flex;
	align-items: flex-start;
	.links {
		.logo {
			height: 75%;
			border: solid black 1px;
			margin: 0 2rem;
		}
		display: flex;
		align-items: center;
		.link {
			height: 100%;
			width: 10rem;
			font-size: 1.2rem;
			display: flex;
			align-items: center;
			flex-direction: column;
			justify-content: center;
			a {
				width: 100%;
				height: 80%;
				position: relative;
				&:link{
					color: black;
					text-decoration: none;
				}
				&:hover{
					color: black;
					text-decoration: none;
					background: rgba(128, 128, 128, 0.1);
				}
				&:visited{
					color: black;
					text-decoration: none;
				}
				&:active{
					color: black;
					text-decoration: none;
				}
				span {
					position: absolute;
					top: 50%;
					left: 50%;
					transform: translate(-50%, -50%);
				}
			}
		}
	}
	.button {
		position: absolute;
		right: 5%;
		background: red;
		height: 3rem;
		width: 3rem;
	}
}

@include sm {
	.open {
		height: 45vh !important;
	}
	header {
		.links {
			height: 10vh;
			width: 100%;
			flex-direction: row;;
			flex-wrap: wrap;
			.logo {
				width: 100%;
			}
			.link {
				width: 100%;
			}
		}
	}
}

@include lg {
	header {
		height: 10vh;
		.button {
			display: none;
		}
	}
	.links {
		height: 100%;
		width: 75%;
		flex-direction: row;
		.logo {
			width: 15%;
		}
		.link {
			height: 100%;
			width: 10rem;
		}
	}
}

</style>
