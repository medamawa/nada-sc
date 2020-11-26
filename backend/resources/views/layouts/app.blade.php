<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
</head>
<body>
	<div id="app">
<my-header></my-header>
	<main>
		@yield("main")
		<div class="menues">
			<my-menue
				topString="メインフィード"
				columnlink="[testlink,testlink,testlink,testlink,testlink,testlink,testlink,]"
				columnstring="[teststring,teststring,teststring,teststring,teststring,teststring,]"
			>
			</my-menue>
			<my-menue
				topString="募集"
				columnlink="[testlink,testlink,testlink,testlink,testlink,testlink,testlink,]"
				columnstring="[teststring,teststring,teststring,teststring,teststring,teststring,]"
			>
			</my-menue>
			<my-menue
				topString="意見"
				columnlink="[testlink,testlink,testlink,testlink,testlink,testlink,testlink,]"
				columnstring="[teststring,teststring,teststring,teststring,teststring,teststring,]"
			>
			</my-menue>
		</div>
	</main>
<my-footer></my-footer>
	</div>
	<script src="{{ asset('js/app.js') }}" defer></script>
</body>

<style>
body {
	margin: 0;
}
main {
	display: flex;
	justify-content: space-between;
	margin: 0 10vw;
}

@media (max-width: 1000px) {
	.menues {
		width: 100%;
	}
	main {
		flex-direction: column;
	}
}
@media (min-width: 1000px) {
	.menues {
		width: 20%;
	}
	main {
		flex-direction: row;
	}
}
</style>

</html>
