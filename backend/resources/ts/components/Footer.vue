<template>
<footer>
	<div class="footer-logo">
		灘校生徒会サイト
	</div>
	<div class="footer-text-wrap">
		<div class="footer-text">ABOUT</div>
		<div class="footer-text">CONTACT</div>
	</div>

	<div class="footer-text-wrap">
		<div class="footer-text">copyright</div>
	</div>
</footer>
</template>

<style lang="scss" >
$footer-bg: #222222;
$footer-letter: #cccccc;

footer {
	width: 100%;
	height: 25vh;
	background: $footer-bg;
	color: $footer-letter;
	display: flex;
	flex-direction: column;
	.footer-logo {
		margin: auto;
		font-weight: 600;
		font-size: 3rem;
	}
	.footer-text-wrap {
		display: flex;
		justify-content: space-around;
		margin: 1rem 30%;
	}
}
</style>
