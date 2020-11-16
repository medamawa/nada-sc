<template>
<header>
	<div class="logo">名状しがたいロゴのようなもの</div>
	<div class="link"><a href="/papers"><span>お知らせ</span></a></div>
	<div class="link"><a href="/recruitment"><span>募集</span></a></div>
	<div class="link"><a href="/opinionbox"><span>意見箱</span></a></div>
</header>
</template>

<style lang="scss" module>
@import "../../sass/variables.scss";

header{
	background: $gray;
	width: 100%;
	height: 10vh;
	border-bottom: 2px solid #224473;
	margin-bottom: 1rem;
	display: flex;
	flex-direction: row;
	align-items: center;
	.logo {
		height: 75%;
		width: 10%;
		border: solid black 1px;
		margin: 0 2rem;
	}
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
</style>
