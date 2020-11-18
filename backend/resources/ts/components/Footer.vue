<template>
<footer>
	<div class="footer-logo">
		灘校生徒会サイト
	</div>
	<div class="footer-text-wrap links">
		<div class="footer-text"><a>ABOUT</a></div>
		<div class="footer-text"><a>CONTACT</a></div>
	</div>

	<div class="footer-text-wrap copyright">
		<div class="footer-text">copyright</div>
	</div>
</footer>
</template>

<style lang="scss" moduled>
@import "../../sass/variables.scss";
$footer-bg: #222222;
$footer-letter: #cccccc;

footer {
	width: 100%;
	height: 25vh;
	background: $footer-bg;
	color: $footer-letter;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	.footer-logo {
		margin: 0 auto;
		margin-top: 1rem;
		font-weight: 600;
	}
	.footer-text-wrap {
		display: flex;
		justify-content: space-around;
	}
}

@include lg {
	footer {
		.footer-logo {
			font-size: 3rem;
			margin-bottom: 1rem;
		}
		.links {
			width: 40%;
			margin: 0 30%;
		}
		.copyright {
			margin-bottom: 3rem;
		}
	}
}

@include sm {
	footer {
		.footer-logo {
			font-size: 2rem;
		}
		.footer-text-wrap {
			font-size: 0.8rem;
		}
		.links {
			width: 60%;
			margin: 0 20%;
		}
		.copyright {
			margin-bottom: 1rem;
		}
	}
}

</style>
